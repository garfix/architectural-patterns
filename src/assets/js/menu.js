
var $window = $(window);
var $sidebar = $('#sidebar');
var $sidebar_inner = $sidebar.children('.inner');
var $menu = $('#menu');
var sidebarScrollStorageKey = 'architectural-patterns.sidebar.scroll';

// Keep the sidebar independent from the main page scroll.
// The default Editorial lock logic pins the sidebar to the document scroll,
// so we disable it here and let the sidebar scroll on its own.
$sidebar_inner
    .data('locked', 0)
    .css('position', '')
    .css('top', '');

function persistSidebarScroll() {
    if (!$sidebar_inner.length)
        return;

    try {
        sessionStorage.setItem(sidebarScrollStorageKey, String($sidebar_inner.scrollTop()));
    } catch (error) {
        // Storage may be unavailable in some environments.
    }
}

function restoreSidebarScroll() {
    if (!$sidebar_inner.length)
        return;

    try {
        var savedScrollTop = sessionStorage.getItem(sidebarScrollStorageKey);
        if (savedScrollTop === null)
            return;

        var parsedScrollTop = parseInt(savedScrollTop, 10);
        if (!isNaN(parsedScrollTop))
            $sidebar_inner.scrollTop(parsedScrollTop);
    } catch (error) {
        // Storage may be unavailable in some environments.
    }
}

function getMenuLinkParts(value) {
    var raw = String(value || '');
    var hashIndex = raw.indexOf('#');
    var hash = '';
    var path = raw;

    if (hashIndex !== -1) {
        hash = raw.slice(hashIndex + 1);
        path = raw.slice(0, hashIndex);
    }

    path = path
        .split('?')[0]
        .replace(/^\.\//, '')
        .replace(/^\/+/, '')
        .replace(/\/+$/, '')
        .replace(/\.html?$/i, '');

    return {
        path: path,
        hash: hash
    };
}

function normalizeMenuHref(value) {
    return getMenuLinkParts(value).path;
}

function closeAllMenuBranches() {
    $('#menu .menu-item, #menu .menu-group, #menu .pattern-item').removeClass('current active is-open');
    $('#menu .submenu').removeClass('is-open');
    $('#menu .menu-toggle').removeClass('active').attr('aria-expanded', 'false');
    $('#menu a.current, #menu span.current').removeClass('current');
    $('#menu a.active, #menu span.active').removeClass('active');
}

function openMenuBranch($item) {
    if (!$item || !$item.length) {
        return;
    }

    $item.addClass('is-open');

    var $toggle = $item.find('> .menu-row > .menu-toggle').first();
    if ($toggle.length) {
        $toggle.addClass('active').attr('aria-expanded', 'true');
    }

    var $submenu = $item.children('ul.submenu').first();
    if ($submenu.length) {
        $submenu.addClass('is-open');
    }

    var $parent = $item.parent().closest('.menu-item, .menu-group');
    if ($parent.length) {
        openMenuBranch($parent);
    }
}

function findMatchingMenuLink() {
    var locationPath = normalizeMenuHref(window.location.pathname || '');
    var locationHash = (window.location.hash || '').replace(/^#/, '');

    if (locationHash) {
        var $hashMatch = $('#menu a[href$="#' + locationHash + '"]');
        if ($hashMatch.length) {
            return $hashMatch.first();
        }
    }

    var $match = $();

    $('#menu a[href]').each(function() {
        var $link = $(this);
        var href = ($link.attr('href') || '').trim();
        if (!href || href === '#') {
            return;
        }

        var hrefParts = getMenuLinkParts(href);
        var normalizedHref = normalizeMenuHref(href);
        var pathMatches = normalizedHref === locationPath;
        var hashMatches = !!locationHash && hrefParts.hash === locationHash && hrefParts.path === locationPath;

        if (pathMatches && (!locationHash || hashMatches)) {
            $match = $link;
            return false;
        }
    });

    return $match;
}

function revealDirectChildren($item) {
    if (!$item || !$item.length) {
        return;
    }

    var $submenu = $item.children('ul.submenu').first();
    if (!$submenu.length) {
        return;
    }

    $submenu.addClass('is-open');
    $submenu.children('li.menu-item, li.menu-group, li.pattern-item').each(function() {
        var $child = $(this);
        $child.addClass('is-open');

        var $childToggle = $child.find('> .menu-row > .menu-toggle').first();
        if ($childToggle.length) {
            $childToggle.addClass('active').attr('aria-expanded', 'true');
        }
    });
}

function applyMenuStateFromUrl() {
    closeAllMenuBranches();

    var $matchedLink = findMatchingMenuLink();
    if (!$matchedLink.length) {
        return;
    }

    $matchedLink.addClass('current active');
    var $matchedItem = $matchedLink.closest('.menu-item, .menu-group, .pattern-item');
    if ($matchedItem.length) {
        $matchedItem.addClass('current active');
        openMenuBranch($matchedItem);
        revealDirectChildren($matchedItem);
    }
}

$sidebar_inner.on('scroll.sidebar-scroll', persistSidebarScroll);
$window.on('beforeunload.sidebar-scroll pagehide.sidebar-scroll', persistSidebarScroll);
$window.on('load hashchange', function() {
    restoreSidebarScroll();
    applyMenuStateFromUrl();
});

$(function() {
    applyMenuStateFromUrl();
});

$menu.find('.menu-toggle').each(function() {
    var $toggle = $(this);
    var $menuItem = $toggle.closest('.menu-item, .menu-group');
    var $submenu = $($toggle.attr('data-target'));

    if (!$submenu.length) {
        $submenu = $menuItem.children('ul.submenu');
    }

    $toggle.on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();

        var willOpen = !$toggle.hasClass('active');
        var $siblings = $toggle.closest('ul, .menu-group').find('> li > .menu-row > .menu-toggle, > li > .menu-row > .menu-group-label + .menu-toggle');

        if (willOpen) {
            $siblings.not($toggle).removeClass('active').attr('aria-expanded', 'false');
            $menuItem.siblings().removeClass('is-open');
            $menuItem.siblings().find('> .submenu, > ul').removeClass('is-open');
            $menuItem.siblings().find('.menu-toggle').removeClass('active').attr('aria-expanded', 'false');
        }

        $toggle.toggleClass('active', willOpen);
        $toggle.attr('aria-expanded', willOpen ? 'true' : 'false');
        $menuItem.toggleClass('is-open', willOpen);
        $submenu.toggleClass('is-open', willOpen);

        $window.triggerHandler('resize.sidebar-lock');
    });
});

$menu.find('.menu-row').each(function() {
    var $row = $(this);
    var $toggle = $row.find('.menu-toggle').first();
    var $menuItem = $row.closest('.menu-item, .menu-group');

    if (!$toggle.length || !$menuItem.length)
        return;

    $row.on('click', function(event) {
        if ($(event.target).closest('button').length)
            return;

        if ($toggle.hasClass('active')) {
            return;
        }

        $toggle.trigger('click');
    });
});