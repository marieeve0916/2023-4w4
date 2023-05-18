<?php
// index.php est le modèle par défaut du thème 4w4
    get_header() 
?>
<main class="site__main">
    <pre>front-page.php</pre>
    <h1 class="titre__main">Bienvenue sur le site du TIM!</h1>
    <!-- Deuxième galerie -->
        <!-- <div class="sidebar">
            <?php //dynamic_sidebar( 'entete1' ); ?>
        </div> -->
        <section class="blocflex">
            <?php  wp_nav_menu(array( 
                            "menu" => "evenement",
                            "container" => "nav",
                            "container_class" => "menu_evenement"
                        )); 
            ?>
            <?php  wp_nav_menu(array( 
                            "menu" => "bloc-archives",
                            "container" => "nav",
                            "container_class" => "menu_bloc_archives"
                        )); 
            ?>
            <?php if(have_posts()):
                while (have_posts()): the_post(); ?>
                <?php if (in_category('galerie')) {
                    get_template_part('template-parts/categorie', 'galerie');
                } else {
                ?> 
                    <h1>Nos nouveautés</h1> 
                <?php
                    get_template_part('template-parts/categorie', '4w4');
                }?> 
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
</main>
<?php get_footer() ?>
</body>
</html>