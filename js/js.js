const toggle = document.querySelector(".show-password");
toggle.addEventListener("click", function () {
    const input = this.previousElementSibling;
    const inputType = input.getAttribute("type");
    if (inputType === "password") {
        input.setAttribute("type", "text");
    }
    else {
        input.setAttribute("type", "password");
    }
});


const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const tabs = $$('.list_movie')
const panes = $$('.product_movie')

tabs.forEach((tab, index) => {
    const pane = panes[index]

    tab.onclick = function () {

        console.log(pane)
        $('.list_movie.active').classList.remove('active')
        $('.product_movie.active').classList.remove('active')

        this.classList.add('active')
        pane.classList.add('active')
    }
})

