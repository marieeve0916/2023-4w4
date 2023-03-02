<?php
    /**
     * "Template parts" gabarit categorie-galerie permet d'afficher la galerie
     */
    $titre = get_the_title();

    // Retirer le premier 0 du titre d'article
    // if (substr($titre, 0, 1) == '0') {

    // }
?>


<article class="blocflex__galerie">
    <?php the_content(); ?>
</article>