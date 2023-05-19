<?php
    /**
     * "Template parts" gabarit categorie-galerie permet d'afficher la galerie
     */
    $titre = get_the_title();
?>

<article class="blocflex__galerie">
    <?php the_content(); ?>
</article>