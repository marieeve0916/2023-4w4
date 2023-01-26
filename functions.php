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
?>
