<?php

// Menus de navegación, agregar más utilizando el arreglo
function personalPage_menus() {
    register_nav_menus( array(
        // 1er argumento valor que la computadora entiende, 2do lo que el usuario puede leer acompañado del text domain que definimos en style.css, __ agregamos doble guion bajo que quiere decir que ese texto se puede traducir
        'menu-principal' => __( 'Menú Principal', 'personalthemejk' ), 
        //'menu-principal2' => __( 'Menú Principal 2', 'personalthemejk' ),
    ));
}
// Todas las funciones que creemos en wordpress las tenemos que agregar a un hook (funciones que corren en un det. tiempo y lugar)
add_action('init', 'personalPage_menus'); // en este caso uso el hook 'init', y lo que hace es que cuando wordpress arranque carge la función y registre los menus


// Scripts y Styles
function personalPage_scripts_styles(){
    // normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    // google font
    wp_enqueue_style('googleFont',"https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap", array(), '1.0.0'); 
    // fontawasome
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
    // slick nav
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
    // hoja de estilo principal
     wp_enqueue_style('style',get_stylesheet_uri(), array('normalize','googleFont'), '1.0.0'); // hoja des estilo, url hoja de, array de dependecias, versión
    // javascript slick
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true); 
    // scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery','slicknavJS'), '1.0.0', true); 

}
add_action('wp_enqueue_scripts', 'personalPage_scripts_styles');  // hook, wp_head()-> función que se encuentra en el header.php se encarga de cargar enqueue_scripts y así ya está funcionando la hoja de estilos

// Widgets
function personalPage_widgets(){
    register_sidebar(array(
        'name' => __('Footer Widgets'),
        'id' => ('footer_widget'),
        'description' => 'Widgets para el Footer',
    ));
}
add_action('widgets_init', 'personalPage_widgets');
