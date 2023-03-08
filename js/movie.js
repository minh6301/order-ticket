
window.addEventListener("load", function () {
    const $ = document.querySelector.bind(document)
    const $$ = document.querySelectorAll.bind(document)

    const tabs = $$('.list_movie')
    const panes = $$('.show_list_movie')

    tabs.forEach((tab, index) => {
        const pane = panes[index]

        tab.onclick = function () {

            console.log(pane)
            $('.list_movie.active').classList.remove('active')
            $('.show_list_movie.active').classList.remove('active')

            this.classList.add('active')
            pane.classList.add('active')
        }
    })
    const buyTicket = document.querySelector(".buy_ticket");
    const selectMovie = document.querySelector(".select_movie");
    const fullScreen = document.querySelector(".full-screen");
    buyTicket.addEventListener("click", function () {
        selectMovie.classList.add("active");
        fullScreen.classList.add("active");
    });
    fullScreen.addEventListener("click", function () {
        selectMovie.classList.remove("active");
        fullScreen.classList.remove("active");
    })
});