window.onload = function () {
    // Select the submenu that is hidden
    var submenu = document.querySelector('.ant-menu-submenu-horizontal.ant-menu-overflowed-submenu');

    // Check if the submenu exists
    if (submenu) {
        // Remove the inline styles that hide the submenu
        submenu.style.display = 'list-item'; // Or 'block', depending on how you want it to display
        submenu.style.visibility = 'visible';
        submenu.style.position = 'relative';
    }

    var header = document.getElementById('header');
    header.style.position = 'fixed';
    header.style.top = '0';
    header.style.left = '0';
    header.style.width = '100%';
    header.style.zIndex = '1000';


};

document.addEventListener('DOMContentLoaded', function () {
    var menuButton = document.querySelector('img[data-v-1def8f76][src="https://www.swensens1112.com/images/menu.svg"]');
    var drawer = document.querySelector('.ant-drawer');
    var drawerWrapper = document.querySelector('.ant-drawer-content-wrapper');
    const aside = document.querySelector('aside');

    function showDrawer(e) {
        if (drawer && drawerWrapper) {
            drawer.classList.add('ant-drawer-open');
            drawerWrapper.style.transform = '';
        }
        e.stopPropagation(); // หยุดการกระจายตัวของ event
    }

    function closeDrawer(e) {
        if (!aside.contains(e.target)) {
            drawer.classList.remove('ant-drawer-open');
            drawerWrapper.style.transform = 'translateX(100%)';
        }
    }

    if (menuButton) {
        menuButton.addEventListener('click', showDrawer);
    }

    document.addEventListener('click', closeDrawer);
});
