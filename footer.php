</div>

<footer>

    <div class="container-fluid">
        <div class="row footer2">

            <!-- footer with 3 sidebars -->
            <div class="col-sm-4">
                <?php
                if (is_active_sidebar('sidebar-footer-1')) {
                    dynamic_sidebar('sidebar-footer-1');
                }
                ?>
            </div>

            <div class="col-sm-4">
                <?php
                if (is_active_sidebar('sidebar-footer-2')) {
                    dynamic_sidebar('sidebar-footer-2');
                }
                ?>
            </div>


            <div class="col-sm-4">
                <?php
                if (is_active_sidebar('sidebar-footer-3')) {
                    dynamic_sidebar('sidebar-footer-3');
                }
                ?>
            </div>

        </div>

    </div>


    <div class="container-fluid footer-text footer1">
        <div class="row">

            <div class="col-sm-4">

                <p class="textF"><?php echo _e('Fièrement propulsé par', 'numerica') ?> <a href="https://fr.wordpress.org/" target="_blank" title="Site de Wordpress">Wordpress</a>
                </p>

                <p>&#x1f12f; -
                    <?php echo date_i18n('Y'); ?>
                    - <?php echo _e('Thème', 'numerica'); ?> : <a href="https://github.com/ANDRE-Ani/NumericatousTheme" target="_blank" title="Dépôt Github"><?php
                                                                                                                                            $my_theme = wp_get_theme('numerica');
                                                                                                                                            echo $my_theme->get('Name');
                                                                                                                                        ?></a>

                    <?php echo _e('Par', 'numerica') ?> : <a href="https://numericatous.fr" target="_blank" title="Site de l'auteur du thème"><?php
                                                                                                                                            $theme = wp_get_theme();
                                                                                                                                            echo $theme->Author;
                                                                                                                                        ?></a>
                </p></a>
            </div>


            <div class="col-sm-8">
                <p>
                    <?php
                    echo get_theme_mod("footer_code");
                    ?>
                </p>
            </div>

        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>