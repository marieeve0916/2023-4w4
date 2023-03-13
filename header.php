<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4w4</title>
    <!-- Liens des icônes -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php wp_head() ?>
</head>
<body>
<body class="site <?php echo(is_front_page() ? "no__aside" : "");?>" >
    <header class="site__entete">
        <div class="site__entete__haut">
            <div class="logo__site">
                <?php the_custom_logo(); ?> 
            </div>
            <div class="menu__site">
                <?php  wp_nav_menu(array( 
                            "menu" => "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete"
                        )); 
                ?>
            </div>
            <div class="header__cote__droit">
                <div class="barre__recherche">
                    <?php get_search_form(); ?>
                </div>
                <div>
                    <input type="checkbox" id="cc-pour-bouton-burger">
                    <label for="cc-pour-bouton-burger" class="bouton-burger">
                        <span class="material-symbols-outlined icone-btn-burger-ouvrir icone" id="menu">menu</span>
                        <span class="material-symbols-outlined icone-btn-burger-fermer icone" id="fermer-menu"> close </span>
                    </label>
                </div>
            </div>
        </div>
    </header>
   <?php 
   if (! is_front_page()) {
   get_template_part("template-parts/aside");
   } ?>
    