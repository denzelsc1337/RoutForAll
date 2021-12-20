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

// --------------------------------------------------------------------------------------------------

(() => {

    const targets = document.querySelectorAll('[data-target]');
    const content = document.querySelectorAll('[data-content]');

    targets.forEach(target => {
        target.addEventListener('click', () => {
            content.forEach(c => {
                c.classList.remove("active")
            })
            const t = document.querySelector(target.dataset.target)
            t.classList.add("active");
        })
    })

    const tabsItem = document.querySelectorAll(".tabs-item");



    tabsItem.forEach((tabItem, i) => {

        tabsItem[i].addEventListener('click', () => {

            tabsItem.forEach((tabItem, i) => {

                tabsItem[i].classList.remove("active");
                // tabSubContent[i].classList.remove("active");

            })

            tabsItem[i].classList.add("active");
            // tabSubContent[i].classList.add("active");

        })
    })


    // const tabs = document.querySelector(".tabs"),
    //     tabsItem = document.querySelectorAll(".tabs-item");


    // tabs.addEventListener('click', () => {
    //     if (tabsItem.classList.contains("active")) {
    //     console.log("ola");
    //     tabsItem.classList.add("active");
    //     tabsItem.classList.remove("active");
    //     }
    // })


})();
// --------------------------------------------------------------------------------------------------

// const subContainerItem = document.querySelectorAll(".sub-content-item");
// subContainerItem.forEach((subContainer) => {
//     if (!subContainer.classList.contains("active")) {
//         console.log(subContainer);
//         subContainer.classList.add("hide");
//     }
// })