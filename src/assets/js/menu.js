var $window = $(window);
var $sidebar = $("#sidebar");
var $sidebar_inner = $sidebar.children(".inner");
var $menu = $("#menu");
var sidebarScrollStorageKey = "architectural-patterns.sidebar.scroll";

const current = document.querySelector(".current");
const active = document.querySelectorAll(".active");
var element = null;

console.log(current, active);

if (current) {
    element = current;
} else {
    element = active[active.length - 1];
}

element.scrollIntoView({ block: "center", behavior: "auto" });
