<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-8 blog-main">


            <p id='error'>
                <strong>Arf... Il semble y avoir une erreur...</strong>
                <br>
                <br>
                <?php
                $website = get_bloginfo('url');
                $uri = $_SERVER['REQUEST_URI'];
                echo 'La page demandée : ' . $uri . ' sur le site : ' . $website . ' n\'a pas été trouvée...' . '<br>';
                ?>
                <br>
                Revenez donc à l'<a href='https://andre-ani.fr' title='Page d\'accueil du Site d\'ANDRE Ani'> accueil</a> ;-)
            </p>

        </div>

        <div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>

