import './bootstrap';

window.toggleMenu = function () {
    const menuItems = document.getElementById("menuItems");
    if (menuItems.classList.contains('max-h-0')) {
        menuItems.classList.remove('max-h-0', 'opacity-0');
        menuItems.classList.add('max-h-[500px]', 'opacity-100');
    } else {
        menuItems.classList.remove('max-h-[500px]', 'opacity-100');
        menuItems.classList.add('max-h-0', 'opacity-0');
    }
};

window.hideMenu = function () {
    const menuItems = document.getElementById("menuItems")
    if (menuItems.classList.contains('max-h-[500px]')) {
        menuItems.classList.remove('max-h-[500px]', 'opacity-100');
        menuItems.classList.add('max-h-0', 'opacity-0');
    }
}
