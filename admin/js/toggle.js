window.addEventListener("load", function () {

    const showMovie = document.querySelector(".toggle-show-movie")
    const movieOnShow = document.querySelector(".sidebar-list-movie")
    showMovie.addEventListener("click", function () {
        movieOnShow.classList.toggle("active");
    });

    const detailMovie = document.querySelector(".detail-movie")
    const closeShowDetailMovie = document.querySelector(".close-show-info-movie")
    const showDetailMovie = document.querySelector(".icon-show-info")
    const fullScreenMovie = document.querySelector(".full-screen-movie")
    showDetailMovie.addEventListener("click", function () {
        detailMovie.classList.add("active");
        fullScreenMovie.classList.add("active");
    });
    closeShowDetailMovie.addEventListener("click", function () {
        detailMovie.classList.remove("active");
        fullScreenMovie.classList.remove("active");
    });

});