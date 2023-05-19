<footer class="site__footer">
    <section class="footer__col"> 
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer1' ); ?>
        </div>
    </section>   
    <section class="footer__col"> 
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer2' ); ?>
        </div>
    </section>   
    <section class="footer__col"> 
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer3' ); ?>
        </div>
    </section>  
    <?php wp_footer(); ?> 
</footer>