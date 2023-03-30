<?php
// index.php est le modèle par défaut du thème 4w4
    get_header() 
?>
<main class="site__main custom-background"> 
    <pre>404.php</pre>
    <h1>Erreur 404</h1>
    <h4>Page introuvable. Vous pouvez tenter une recherche:</h4>
    <div class="barre__recherche">
        <?php get_search_form(); ?>
    </div>
    <h5>Nos choix de cours</h5>
    <div class="menu__cours">
        <?php
            wp_nav_menu(array(
                'menu'				=> "cours",
                'container'			=> "nav", 
                'container_class'	=> "menu_cours"
            ) );
        ?>
    </div>
    <h5>Les notes de cours</h5>
    <?php
        wp_nav_menu(array(
            'menu'				=> "menu-4w4",
            'container'			=> "nav",
            'container_class'	=> "menu_4w4"
        ) );
    ?>
</main>
<?php get_footer() ?>
</body>
</html>