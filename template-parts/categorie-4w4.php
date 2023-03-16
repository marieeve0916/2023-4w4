<?php
    /**
     * "Template parts" gabarit categorie-cours permet d'afficher un article "bloc"
     * qui s'intègre dans la liste des cours qu'on accède avec category/cours
     */
    $titre = get_the_title();
?>


<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>