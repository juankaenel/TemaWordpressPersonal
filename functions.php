<?php

/** Consultas reutilizables **/
require get_template_directory() . '/inc/queries.php';

// Cuando el tema es activado
function personalPage_setup(){
    // Hablitar imágenes destacadas
    add_theme_support('post-thumbnails');

    // Hablitar títulos para seo
    add_theme_support('title-tag');

    // Agregar imágenes de tamaño personalizado
    add_image_size( 'square', 350, 350, true);
    add_image_size( 'portrait', 350, 724, true);
    add_image_size( 'cajas', 400, 375, true);
    add_image_size( 'mediano', 700, 400, true);
    add_image_size( 'blog', 966, 644, true);
}
add_action('after_setup_theme', 'personalPage_setup');

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

// Definir zona de widgets
function personalPage_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>',
        'description' => 'Widgets para mostrar videos',
    ));
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>',
        'description' => 'Widgets para mostrar cursos',
    ));

}
add_action('widgets_init', 'personalPage_widgets');

/** Imágen Hero **/

function personalPage_hero_image() {
    // obtener id página principal
    $front_page_id = get_option('page_on_front');
    // obtener id imágen
    $id_imagen = get_field('imagen_hero', $front_page_id);
    // obtener imágen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    // Style CSS
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .site-header {
            background-image: linear-gradient( rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($imagen);   
        }
    ";

    wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'personalPage_hero_image');