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
                    <p class="textF">Fièrement propulsé par <a href="https://fr.wordpress.org/" target="_blank" title="Site de Wordpress">Wordpress</a>
                    </p>

                    <p>&#x1f12f; -
                        <?php echo date('Y'); ?>
                        - Thème : <a href="https://gitlab.com/andre0ani/andreaniswptheme" target="_blank" title="Dépôt Gitlab"><?php
                                                                                                                                $my_theme = wp_get_theme();
                                                                                                                                echo $my_theme->get('Name');
                                                                                                                                ?></a>

                        Par : <a href="https://andre-ani.fr" target="_blank" title="Site de l'auteur du thème"><?php
                                                                                                                $my_theme = wp_get_theme();
                                                                                                                echo $my_theme->get('Author');
                                                                                                                ?></a>
                    </p>
                </div>



                <div class="col-sm-8">
                    <p>
                        Numericatous, Entrez dans le numérique avec les bons outils
                        2020 - Numericatous.fr - Patrice ANDREANI - Auto-entrepreneur - SIREN 753 453 711 - 18000 Bourges
                        https://numericatous.fr - contact@numericatous.fr
                    </p>
                </div>
            
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>