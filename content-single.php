<div class="blog-post">
    <div class="presentationArt">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
    </div>
    <div class="presentationArt2"> 
        <p class="blog-post-meta"><i class="far fa-clock"></i> <?php the_date(); ?> <i class="fas fa-user"></i> <a href="#"><?php the_author(); ?></a></p>
        <p class="blog-post-meta">Dans : <?php the_category(', '); ?>
            <?php the_content(); ?>
    </div>
</div><!-- /.blog-post -->