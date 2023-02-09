<?php
// L'ensemble des fonctions du thème
function enfiler_css() {
wp_enqueue_style('main-styles', //identificateur
                get_template_directory_uri() . '/style.css', //adresse uri de style.css
                array(), // définir les dépendances
                fileatime(get_template_directory() . '/style.css'), //le calcul de la version du fichier css
                'all'); //media
}
add_action('wp_enqueue_scripts', 'enfiler_css');

/* -------------------------------------- Enregitrement des menus */
function enregistre_menus(){
    register_nav_menus( array(
    'menu_entete' => 'Menu entete',
    'menu_sidebar'  => 'Menu sidebar',
    ) );
}
add_action( 'after_setup_theme', 'enregistre_menus', 0 );

/* -------------------------------------- add_theme_suport */

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
'height' => 150,
'width'  => 150
) );

?>
