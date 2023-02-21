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
<body>
    <header class="site__entete">
        <div class="site__entete__haut">
            <div class="site__entete__textes">
                <h1><a class="site__titre" href="<?= bloginfo("url"); ?>"><?= bloginfo("name"); ?></a></h1>
                <h2 class="site__desc"><?= bloginfo("description"); ?></h2>
            </div>
            <?php get_search_form(); ?>
            <div class="logo__site">
                <?php the_custom_logo(); ?> 
            </div>
        </div>
        <div class="menu__site">
            <?php  wp_nav_menu(array( 
                        "menu" => "entete",
                        "container" => "nav",
                        "container_class" => "menu__entete"
                    )); 
            ?>
        </div>
    </header>
    