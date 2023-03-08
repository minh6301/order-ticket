window.addEventListener("load", function () {

    const showMovie = document.querySelector(".toggle-show-movie")
    const movieOnShow = document.querySelector(".sidebar-list-movie")
    showMovie.addEventListener("click", function () {
        movieOnShow.classList.toggle("active");
    });

    const detailTicket = document.querySelector(".info-ticket")
    const closeShowDetail = document.querySelector(".close-show-info")
    const showDetailTicket = document.querySelector(".icon-edit")
    const fullScreen = document.querySelector(".full-screen")
    showDetailTicket.addEventListener("click", function () {
        detailTicket.classList.add("active");
        fullScreen.classList.add("active");
    });
    closeShowDetail.addEventListener("click", function () {
        detailTicket.classList.remove("active");
        fullScreen.classList.remove("active");
    });

});    
