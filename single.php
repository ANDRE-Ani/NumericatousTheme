<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 blog-post">

            <?php
            if (have_posts()): while (have_posts()): the_post();
                    get_template_part('content-single', get_post_format());

                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;

                endwhile;
            endif;
            ?>

        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>