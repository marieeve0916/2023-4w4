<?php
// category.php est le modèle par défaut pour afficher une archive d'articles 
// de catégories spécifiques
    get_header() 
?>

<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
    //   Création d'ine nouvelle requête
      $query = new WP_Query( $args );
    //   Tout le reste de l'extraction de données est basée sur la nouvelle requete
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
               <h2><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h2>
               <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>

<?php get_footer() ?>
</body>
</html>