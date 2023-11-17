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
                    if (i.lastElementChild.classList.contains('icofont-rounded-down')) {
                        i.lastElementChild.classList.toggle('icofont-rounded-up')
                        i.lastElementChild.classList.toggle('icofont-rounded-down')
                    }
                }
            })
        })
    })

    let currentUrl = window.location.href;
    let links = document.querySelectorAll('.sidebar-area-container-wrapper a');
    links.forEach((link, key) => {
        if (link.href == currentUrl) {
            if (link.parentElement.parentElement.classList.contains('sidebar-area-container')) {
                link.parentElement.classList.add('active');
            } else {
                link.classList.add('active');
                link.parentElement.parentElement.parentElement.classList.add('active')
            }
        }
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

function observatoryShowAndHide(element) {
    if (document.querySelectorAll(element) != null || document.querySelectorAll(element) != undefined) {
        let observatoryBtn = document.querySelectorAll(element);
        observatoryBtn.forEach((item) => {
            item.addEventListener('click', () => {
                item.classList.toggle('icofont-plus')
                item.classList.toggle('icofont-minus')
                item.parentElement.nextElementSibling.lastElementChild.classList.toggle('d-none')
            })
        })
    }
}
document.addEventListener("DOMContentLoaded", function (event) {
    showNavbar('#header-toggle', '.wrapper-container')
    activateDropDown('.dropdown-action')
    sideBarScroll('.sidebar-area-container-wrapper')
    observatoryShowAndHide('.observatory-btn')
});

