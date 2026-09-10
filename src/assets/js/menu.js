var $window = $(window);
var $sidebar = $('#sidebar');
var $sidebar_inner = $sidebar.children('.inner');
var $menu = $('#menu');
var sidebarScrollStorageKey = 'architectural-patterns.sidebar.scroll';

$sidebar_inner
    .data('locked', 0)
    .css('position', '')
    .css('top', '');

function persistSidebarScroll() {
    if (!$sidebar_inner.length) {
        return;
    }

    try {
        sessionStorage.setItem(sidebarScrollStorageKey, String($sidebar_inner.scrollTop()));
    } catch (error) {
        // no-op
    }
}

function restoreSidebarScroll() {
    if (!$sidebar_inner.length) {
        return;
    }

    try {
        var savedScrollTop = sessionStorage.getItem(sidebarScrollStorageKey);
        if (savedScrollTop === null) {
            return;
        }

        var parsedScrollTop = parseInt(savedScrollTop, 10);
        if (!isNaN(parsedScrollTop)) {
            $sidebar_inner.scrollTop(parsedScrollTop);
        }
    } catch (error) {
        // no-op
    }
}

function normalizeMenuHref(value) {
    return String(value || '')
        .split('#')[0]
        .split('?')[0]
        .replace(/^\.\//, '')
        .replace(/^\/+/, '')
        .replace(/\/+$/, '')
        .replace(/\.html?$/i, '');
}

function clearMenuState() {
    $('#menu .menu-item, #menu .menu-group, #menu .pattern-item').removeClass('current active is-open');
    $('#menu .submenu').removeClass('is-open');
    $('#menu .menu-toggle').removeClass('active').attr('aria-expanded', 'false');
}

function openBranch($item) {
    if (!$item || !$item.length) {
        return;
    }

    var $parent = $item.parents('.menu-item, .menu-group').first();
    if ($parent.length) {
        openBranch($parent);
    }

    $item.addClass('is-open');
    $item.children('ul.submenu').addClass('is-open');
    $item.find('> .menu-row > .menu-toggle').addClass('active').attr('aria-expanded', 'true');
}

function openChildren($item) {
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
        $child.find('> .menu-row > .menu-toggle').addClass('active').attr('aria-expanded', 'true');
    });
}

function applyMenuStateFromUrl() {
    clearMenuState();

    var path = normalizeMenuHref(window.location.pathname || '');
    var hash = (window.location.hash || '').replace(/^#/, '');
    var $match = hash
        ? $('#menu a[href$="#' + hash + '"]').first()
        : $('#menu a[href]').filter(function() {
            return normalizeMenuHref($(this).attr('href') || '') === path;
        }).first();

    if (!$match.length) {
        return;
    }

    var $item = $match.closest('.menu-item, .menu-group, .pattern-item');
    if (!$item.length) {
        return;
    }

    $match.addClass('current active');
    $item.addClass('current active');
    openBranch($item);
    openChildren($item);
}

$sidebar_inner.on('scroll.sidebar-scroll', persistSidebarScroll);
$window.on('beforeunload.sidebar-scroll pagehide.sidebar-scroll', persistSidebarScroll);
$window.on('load hashchange', function() {
    restoreSidebarScroll();
    applyMenuStateFromUrl();
});
$(applyMenuStateFromUrl);

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

    if (!$toggle.length || !$menuItem.length) {
        return;
    }

    $row.on('click', function(event) {
        if ($(event.target).closest('button').length) {
            return;
        }

        if ($toggle.hasClass('active')) {
            return;
        }

        $toggle.trigger('click');
    });
});