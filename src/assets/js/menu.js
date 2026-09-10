
// Keep the sidebar independent from the main page scroll.
// The default Editorial lock logic pins the sidebar to the document scroll,
// so we disable it here and let the sidebar scroll on its own.
$sidebar_inner
    .data('locked', 0)
    .css('position', '')
    .css('top', '');

// Menu.
var $menu = $('#menu');
var sidebarScrollStorageKey = 'architectural-patterns.sidebar.scroll';

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

function normalizeMenuHref(value) {
    if (!value) {
        return '';
    }

    return String(value)
        .split('#')[0]
        .split('?')[0]
        .replace(/^\.\//, '')
        .replace(/\/+$|\\+$/g, '')
        .replace(/\.html?$/i, '')
        .replace(/^\//, '');
}

function applyHashHighlight() {
    $('#menu a.current, #menu span.current').removeClass('current');
    $('#menu .menu-item.current, #menu .pattern-item.current').removeClass('current');
    $('#menu a.active, #menu span.active').removeClass('active');
    $('#menu .menu-item.active, #menu .pattern-item.active').removeClass('active');

    var hash = window.location.hash || '';
    var targetId = hash ? hash.replace(/^#/, '') : '';
    var currentPath = normalizeMenuHref(window.location.pathname || '');
    var $targetLinks = $();

    if (targetId) {
        $targetLinks = $('#menu a[href$="#' + targetId + '"]');
    } else if (currentPath) {
        $targetLinks = $('#menu a[href]').filter(function() {
            var href = $(this).attr('href') || '';
            if (!href || href === '#') {
                return false;
            }

            var normalizedHref = normalizeMenuHref(href);
            return normalizedHref && normalizedHref === currentPath;
        });
    }

    if (!$targetLinks.length) {
        return;
    }

    $targetLinks.each(function() {
        var $link = $(this);
        $link.addClass('current active');
        $link.closest('.menu-item, .pattern-item').addClass('current active');
    });
}

$sidebar_inner.on('scroll.sidebar-scroll', persistSidebarScroll);
$window.on('beforeunload.sidebar-scroll pagehide.sidebar-scroll', persistSidebarScroll);
$window.on('load hashchange', function() {
    restoreSidebarScroll();
    applyHashHighlight();
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