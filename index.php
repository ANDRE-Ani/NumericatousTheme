<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-8 blog-main">


            <?php
            if (have_posts()) : while (have_posts()) : the_post();

                    get_template_part('content', get_post_format());
            ?>

                <?php endwhile; ?>

                <div class="nav-previous alignleft"><?php previous_posts_link('Précédent'); ?></div>
                <div class="nav-next alignright"><?php next_posts_link('Suivant'); ?></div>
            <?php endif;
            ?>

        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>