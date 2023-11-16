const showNavbar = (toggleId, wrapper) => {
    let nevToggle = document.querySelector(toggleId)
    let wrapperNev = document.querySelector(wrapper) 
    nevToggle.addEventListener('click', () => {
        // show navbar
        wrapperNev.classList.toggle('desk-v-width')
        wrapperNev.classList.toggle('mobi-v-width')
        // change icon
        nevToggle.classList.toggle('icofont-navigation-menu')
        nevToggle.classList.toggle('icofont-close-line')
    })
}
const activateDropDown = (element) => {
    let dropDownAction = document.querySelectorAll(element);
    dropDownAction.forEach((item, key) => {
        item.addEventListener('click', (e) => {
            item.parentElement.classList.toggle('active')
            item.lastElementChild.classList.toggle('icofont-rounded-up')
            item.lastElementChild.classList.toggle('icofont-rounded-down')
            dropDownAction.forEach((i, k) => {
                if (key != k) {
                    i.parentElement.classList.remove('active')
                    if(i.lastElementChild.classList.contain('icofont-rounded-down')){
                        i.lastElementChild.classList.toggle('icofont-rounded-up')
                        i.lastElementChild.classList.toggle('icofont-rounded-down')
                    }
                }
            })
        })
    })
}

const sideBarScroll = (element) => {
    let container = document.querySelector(element);
    let ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 100,
        scrollTop: 0,
    });

    container.addEventListener('mouseenter', () => {
        document.querySelector('body').style.overflow = "hidden"
    })
    container.addEventListener('mouseleave', () => {
        document.querySelector('body').style.overflow = "auto"
    })
}




document.addEventListener("DOMContentLoaded", function (event) {
    showNavbar('#header-toggle', '.wrapper-container')
    activateDropDown('.dropdown-action')
    sideBarScroll('.sidebar-area-container-wrapper')
});