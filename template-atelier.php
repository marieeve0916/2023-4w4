<?php
    /**
     * template name: atelier
     */

    get_header(); ?>
    <main class="site__main site__atelier">
    <?php
        if ( have_posts() ) : the_post(); ?>
        <h1 class="titre__atelier"><?= get_the_title(); ?></h1>
        <?php the_content();?>
        <p class="formateur__atelier">Formateur <?php the_field('formateur'); ?></p>
        <p class="date__atelier">Date <?php the_field('datedebut'); ?></p> 
        <p class="heure__atelier">Heure <?php the_field('heuredebut'); ?></p> 
        <p class="duree__atelier">Durée <?php the_field('duree'); ?></p>
        <p class="local__atelier">Local <?php the_field('local'); ?></p>   
        <?php endif;?>
    </main><!-- #main -->
    <?php
    get_footer();
?>