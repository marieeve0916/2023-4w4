<?php
// category.php est le modèle par défaut pour afficher une archive d'articles 
// de catégories spécifiques
    get_header() 
?>
<main>
    <pre>category.php</pre>
    <h1 class="titre__main">Bienvenue sur 4w4</h1>
        <section class="blocflex">
            <?php if(have_posts()):
                while (have_posts()): the_post(); ?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php // get_the_excerpt() ?>
                    <?= wp_trim_words(get_the_excerpt(), 10, " ... "); ?>
                </article>
                <?php endwhile; ?>
            <?php  endif; ?>
        </section>
</main>
<?php get_footer() ?>
</body>
</html>