window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (window.scrollY >= 1000) {
        var btnUp = document.getElementById('btnUp');
        if (btnUp) {
            btnUp.classList.add("show");
        }
    }
}