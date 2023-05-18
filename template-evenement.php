<?php
    /**
     * template name: evenement
     */

    get_header(); ?>
    <main class="site__main site__evenement">
    <?php
        if ( have_posts() ) : the_post(); ?>
        <figure class="img__evenement"><?php the_post_thumbnail('medium'); ?></figure>
        <h1 class="titre__evenement"><?= get_the_title(); ?></h1>
        <?php the_content();?>
        <p class="adresse__evenement">L'adresse de l'evénement: <?php the_field('adresse'); ?></p>
        <p class="date__evenement">La date et l'heure de l'événement: <?php the_field('dateetheure'); ?></p>     
        <?php endif;?>
    </main><!-- #main -->
    <?php
    get_footer();
?>
