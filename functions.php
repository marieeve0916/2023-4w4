<?php
// L'ensemble des fonctions du thème
function enfiler_css() {
wp_enqueue_style('main-styles', //identificateur
                get_template_directory_uri() . '/style.css', //adresse uri de style.css
                array(), // définir les dépendances
                fileatime(get_template_directory() . '/style.css'), //le calcul de la version du fichier css
                'all'); //media
                //Changer la police
                wp_enqueue_style("google_font",
                "https://fonts.googleapis.com/css2?family=Lato&display=swap",
                false);    
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
));

$defaults = array(
	'default-image'          => '',
	'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
	'default-position-x'     => 'left',    // 'left', 'center', 'right'
	'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
	'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
	'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
	'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
	'default-color'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support('custom-background');

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() //si page d'accueil
         && $query->is_main_query() //si requete principale
         && ! is_admin() ) { //si pas dans tableau bord
      $query->set( 'category_name', '4w4' ); //filtre les articles de categorie note4w4
      $query->set( 'orderby', 'title' );//trier selon le champ title
      $query->set( 'order', 'ASC' ); //trier en ordre ascendant
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );


  /**
 * Permet de personnalisé chacun des titre du menu cours
 * @param $title : titre du menu à modifier
 *         $item : la structure «li» du menu
 *         $args : objet décrivant l'ensemble des menu de notre site
 *         $depth : Niveau de profondeur du menu (on a retirer ici)     
 */
    function perso_menu_item_title($title, $item, $args, $depth) {
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if($args->menu == 'cours') {
    // Modifier la longueur du titre en fonction de vos besoins
    // À modifier/améliorer pour TP1

    // MODIFIER ICI LES P
    $sigle = substr($title,4,3);
    $title = substr($title, 7);
    $title = "<code>" .$sigle. "</code>" . "<p>" . wp_trim_words($title, 3, ' ... ') . "</p>" ; 
    }
    return $title;
    }
    add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 4);

    // Enregistrement des widgets
    function enregistrer_sidebar() {
        register_sidebar( array(
            'name' => __( 'Sidebar', 'nom-de-mon-theme' ),
            'id' => 'footer1',
            'description' => __( 'Un widget area pour afficher des widgets dans le footer.', 'nom-de-mon-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );

        register_sidebar( array(
            'name' => __( 'Sidebar', 'nom-de-mon-theme' ),
            'id' => 'footer2',
            'description' => __( 'Un widget area pour afficher des widgets dans le footer.', 'nom-de-mon-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );

        register_sidebar( array(
            'name' => __( 'Sidebar', 'nom-de-mon-theme' ),
            'id' => 'footer3',
            'description' => __( 'Un widget area pour afficher des widgets dans le footer.', 'nom-de-mon-theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'enregistrer_sidebar' );