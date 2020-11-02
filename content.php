<div class="presentationArt">
    <i class="far fa-newspaper icones"></i> - <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<div class="presentationArt2">  

    <p class="blog-post-meta"><i class="far fa-clock"></i> <?php the_date(); ?> <i class="fas fa-user"></i> <a href="http://test2.andre-ani.fr/a-propos/"><?php the_author(); ?></a></p>
    <p class="blog-post-meta">Dans : <?php the_category(', '); ?> - 
        <?php the_tags(); ?> - 
        <i class="far fa-comment"></i> <a href="<?php comments_link(); ?>">
            <?php printf(_nx('Un commentaire', '%1$s commentaires', get_comments_number(), 'comments title', 'textdomain'), number_format_i18n(get_comments_number())); ?>
        </a>
    </p>

    <p><?php the_post_thumbnail(); ?></p>
    <p class="blog-post-meta"><?php the_excerpt(); ?></p>

</div>