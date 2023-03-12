<?php
    /**
     * "Template parts" gabarit categorie-cours permet d'afficher un article "bloc"
     * qui s'intègre dans la liste des cours qu'on accède avec category/cours
     */
    $titre = get_the_title();
    $sigle = substr($titre, 0, 7);
    $titre__long = substr($titre, 7, -5);
    $duree = substr($titre, -6);
?>


<article  class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $sigle; ?></a></h5>
    <h6><?= $titre__long; ?></h6>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h6><?= $duree; ?></h6>
</article>