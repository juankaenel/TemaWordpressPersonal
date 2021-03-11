jQuery(document).ready( $ =>{
    $('.menu-principal .menu').slicknav(
        {
            label: '', // me oculta la palabra menú que trae por defecto
            appendTo: '.site-header', // lo agregamos por debajo del logo, en el site-header
    }
    );
});

// Agrega posición fija en el header al hacer scroll
window.onscroll = () => {
    const scroll = window.scrollY;
    
    const headerNav = document.querySelector('.barra-navegacion');
    const documentBody = document.querySelector('body');
    // si la cantidad de scroll es mayor a, agregar una clase
    if(scroll > 300){
        headerNav.classList.add('fixed-top');
        documentBody.classList.add('ft-activo');
    }
    else{
        documentBody.classList.remove('ft-activo');
        headerNav.classList.remove('fixed-top');
    }
}