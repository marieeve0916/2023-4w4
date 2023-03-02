<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4w4</title>
    <!-- <a class="site__titre" href="<?= bloginfo('url'); ?>">
    <h1 class="site__info"><?= bloginfo('name'); ?></h1></a>
    <h2 class="site__desc"><?= bloginfo('description'); ?></h2> -->
    <?php wp_head() ?>
</head>
<body>
<body class="site">
    <header class="site__entete">
        <div class="site__entete__haut">
            <!-- <div class="site__entete__textes">
                <h1><a class="site__titre" href="<?= bloginfo("url"); ?>"><?= bloginfo("name"); ?></a></h1>
                <h2 class="site__desc"><?= bloginfo("description"); ?></h2>
            </div> -->
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
            <div class="barre__recherche">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
    <aside class="site__aside">
        <h3>Notes</h3>
        <?php  
            $category = get_queried_object();
            if (isset($category)) {
                $menu = $category->slug;
            }
            else {
                $menu = "4w4";
            }
            // $menu peut prendre les valeurs "4w4" ou "cours"
            echo $menu;
            wp_nav_menu(array( 
                    "menu" => $menu,
                    "container" => "nav",
                )); 
        ?>
    </aside>
    