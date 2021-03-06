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
    
    



<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//matomo.numericatous.fr/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->





</head>

<body>

<div class="contact">
			
				
					<?php
					echo get_theme_mod('contact_code');
					?>
				
		</div>
                    
    <div class="container-fluid">


        <div class="row">
            <div class="col-sm-12 logo img-fluid">
                <?php if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
        </div>


        <!-- titre et slogan -->
        <div class="row">
            <div class="col-4">
                <div class="blog-header">
                    <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                    <h2 class="lead blog-description slogan"><?php echo get_bloginfo('description'); ?></h2>
                </div>
            </div>

            <!-- menu -->
            <div class="col-8 menu-nav">
                <div id="navmenu">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-titre',
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
