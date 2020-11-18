<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-8 blog-main">


            <p id='error'>
                <strong><?php _e('Oups... Il semble y avoir une erreur...') ?></strong>
                <br>
                <br>
                <?php
                echo _e('La page demandée n\'a pas été trouvée.') . '<br>';
                ?>
                <br>
                <?php _e('Retour') ?> <a href='<?php echo get_bloginfo('wpurl'); ?>' title='Accueil du Site'> <?php _e('accueil') ?></a> ;-)
            </p>

        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>

