<!-- Template pour afficher la zone aside -->
<aside class="site__aside">
        <h3>Menu secondaire</h3>
        <?php  
            // Fonctionne bien pour une page d'archive
            // $category = get_queried_object();
            // if (isset($category)) {
            //     $menu = $category->slug;
            // }
            // else {
            //     $menu = "4w4";
            // }
            $menu = 'menu-4w4';
            if (in_category('cours')) {
                $menu = "cours";
                            // $menu peut prendre les valeurs "4w4" ou "cours"
            echo $menu;   
         }
            wp_nav_menu(array( 
                    "menu" => $menu,
                    "container" => "nav",
                )); 
        
        ?>
    </aside>