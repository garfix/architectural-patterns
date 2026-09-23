var $window = $(window);
var $sidebar = $("#sidebar");
var $sidebar_inner = $sidebar.children(".inner");
var $menu = $("#menu");
var sidebarScrollStorageKey = "architectural-patterns.sidebar.scroll";

const current = document.querySelector(".current");
const active = document.querySelectorAll(".active");
var element = null;

if (current) {
    element = current;
} else {
    element = active[active.length - 1];
}

element.scrollIntoView({ block: "center", behavior: "auto" });

const params = new URLSearchParams(window.location.search);
const child = params.get("child");
const section = document.getElementById(child);
if (section) {
    section.scrollIntoView();
}
