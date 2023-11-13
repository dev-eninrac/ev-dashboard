const showNavbar = (toggleId, wrapper) => {
    let nevToggle = document.querySelector(toggleId)
    let wrapperNev = document.querySelector(wrapper)
    // // Validate that all variables exist  
    nevToggle.addEventListener('click', () => {
        // show navbar
        wrapperNev.classList.toggle('desk-v-width')
        wrapperNev.classList.toggle('mobi-v-width')
        // change icon
        nevToggle.classList.toggle('icofont-navigation-menu')
        nevToggle.classList.toggle('icofont-close-line')
    })
}

document.addEventListener("DOMContentLoaded", function (event) {
    showNavbar('#header-toggle', '.wrapper-container')
});