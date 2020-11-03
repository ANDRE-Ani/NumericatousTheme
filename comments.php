<div class="comments">

    <?php
    if (post_password_required()) {
        return;
    }
    ?>
    <div id="comments" class="comments-area">

        <?php if (have_comments()) : ?>
            <h3 class="comments-title">
                <?php
                printf(_nx('Un commentaire sur “%2$s”', '%1$s commentaires sur “%2$s”', get_comments_number(), 'comments title'),
                        number_format_i18n(get_comments_number()), get_the_title());
                ?>
            </h3>
            <ul class="comment-list">
                <?php
                wp_list_comments(array(
                    'short_ping' => true,
                    'avatar_size' => 50,
                ));
                ?>
            </ul>
        <?php endif; ?>
        <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
            <p class="no-comments">
                <?php _e('Les commentaires sont fermés.'); ?>
            </p>
        <?php endif; ?>

        <?php
        $args = array(
            'fields' => apply_filters(
                    'comment_form_default_fields', array(
                'author' => '<div class="row"><div class="col-lg-4 col-md-4"><p class="comment-form-author">' . '<input class="form-control" id="author" placeholder="Votre nom" name="author" type="text" value="' .
                esc_attr($commenter['comment_author']) . '" size="30"' . isset($aria_req) . ' />' .
                '</p></div>'
                ,
                'email' => '<div class="col-lg-4 col-md-4"><p class="comment-form-email">' . '<input class="form-control" id="email" placeholder="Votre email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                '" size="30"' . isset($aria_req) . ' />' .
                '</p></div>',
                'url' => '<div class="col-lg-4 col-md-4"><p class="comment-form-url">' .
                '<input class="form-control" id="url" name="url" placeholder="URL de votre site" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /> ' .
                '</p></div></div>'
                    )
            ),
            'comment_field' => '<p class="col-md-12 col-lg-12 comment-form-comment">' .
            '<textarea class="form-control" id="comment" name="comment" placeholder="Votre commentaire" cols="45" rows="8" aria-required="true"></textarea>' .
            '</p>',
            'comment_notes_after' => '',
            'title_reply' => '<div class="crunchify-text"> <h5>N\'hésitez pas à faire un commentaire</h5></div>'
        );
        ?>

        <?php comment_form($args, $post->ID); ?>

    </div>

</div>

