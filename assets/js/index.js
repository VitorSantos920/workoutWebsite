function menuShow() {
    let menuMobile = document.querySelector('.menu-mobile');
    let icone = document.querySelector('.fa-bars, .fa-x');

    if (menuMobile.classList.contains('abrir')) {
        menuMobile.classList.remove('abrir');
        icone.classList.remove('fa-x', 'fa-xl');
        icone.classList.add('fa-bars', 'fa-2xl');
    } else {
        menuMobile.classList.add('abrir');
        icone.classList.remove('fa-bars', 'fa-2xl');
        icone.classList.add('fa-x', 'fa-xl');
    }
}


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    let botaoSubir = document.getElementById("subir");
    if (document.documentElement.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        botaoSubir.style.display = "block";
    } else {
        botaoSubir.style.display = "none";
    }
}


function scrollToTop() {
    document.documentElement.scrollTop = 0;
}