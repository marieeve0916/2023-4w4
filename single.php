<?php
// single.php est le modèle par defaut qui affiche un article
get_header() 
?>
<main>
    <pre>single.php</pre>
    <h1>Bienvenue sur 4w4</h1>
    <?php if(have_posts()):
        while(have_posts()): the_post(); ?>
        <article>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </article> 
        <hr>
        <?php endwhile; ?>
        <?php endif; ?>
    
</main>
<?php get_footer() ?>
</body>
</html>