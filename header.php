<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <meta name="description" content="Thème personnalisé pour mon site">
        <meta name="author" content="Patrice">
        <?php wp_head(); ?>

        <!-- bootstrap -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </head>

    <body>

        <div id="head1">

            <!-- navbar of Bootstrap -->
            <div id="navmenu">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-haut',
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-expand-lg',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav mr-auto',
                            'depth' => '0'
                        ));
                        ?>

                    </div>


                </nav>
            </div>


            <!-- title and slogan -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="blog-header">
                            <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                            <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
                        </div>
                    </div>

                        <div class="col-sm-8 menu-nav">
                        <div id="navmenu">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-haut',
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse navbar-expand-lg',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav mr-auto',
                            'depth' => '0'
                        ));
                        ?>

                    </div>


                </nav>
            </div>
                        </div>


                </div>
            </div>


            <!-- breadcrumb -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb1">
                            <?php
                            if (function_exists('fil_ariane')) {
                                echo fil_ariane();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>