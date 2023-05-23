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
            <table>
                <tr>
                    <td><p class="informations formateur__atelier">Formateur: </p></td>
                    <td><p class="informations date__atelier">Date: </p></td> 
                    <td><p class="informations heure__atelier">Heure: </p></td>
                    <td><p class="informations duree__atelier">Durée: </p></td>  
                    <td><p class="informations local__atelier">Local: </p></td>   
                </tr>
                <tr>
                    <td><p><?php the_field('formateur'); ?></p></td>
                    <td><p><?php the_field('datedebut'); ?></p></td>
                    <td><p><?php the_field('heuredebut'); ?></p></td>
                    <td><p><?php the_field('duree'); ?></p></td>
                    <td><p><?php the_field('local'); ?></p> </td>   
                </tr>
            </table> 
        <?php endif;?>
    </main><!-- #main -->
    <?php
    // inclure le aside ici
    get_footer();
?>