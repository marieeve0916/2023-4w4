<?php
// L'ensemble des fonctions du thème
wp_enqueue_style('main-styles', //identificateur
                get_template_directory_uri() . '/style.css', //adresse uri de style.css
                array(), // définir les dépendances
                fileatime(get_template_directory() . '/style.css'), //le calcul de la version du fichier css
                'all') //media
?>
