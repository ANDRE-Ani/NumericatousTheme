<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 articleS">

            <?php
            if (have_posts()): while (have_posts()): the_post();
                    get_template_part('content-single', get_post_format());

                    if (comments_open() || get_comments_number()):
                        comments_template();
                    endif;

                endwhile;
            endif;
            ?>

        </div> <!-- /.col -->

        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div> <!-- /.row -->
</div>
<?php get_footer(); ?>