(() => {

    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.a_cont');
    menuLength = menuItem.length

    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {

            menuItem[i].classList.add("outer-shadow", "active");

        } else {
            menuItem[i].classList.add("inner-shadow");
            menuItem[i].classList.remove("outer-shadow");
        }
    }

})();