window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    let botaoSubir = document.getElementById('subir');
    if (
        document.documentElement.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        botaoSubir.style.display = 'block';
    } else {
        botaoSubir.style.display = 'none';
    }
}

function scrollToTop() {
    document.documentElement.scrollTop = 0;
}
