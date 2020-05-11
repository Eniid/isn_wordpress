<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    wp_head();
    ?>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dist/app.css" media="all" />
    <title><?= ins_get_title(',', false) ?></title>

</head>
<body>
    <h1><span class="hl">L'</span><span class="hi">image</span><span class="hs">sans</span><span class="hn">nom</span></h1>


    <input class="burger" type="checkbox">
    <?php wp_nav_menu(); ?>

    <div class="newsletter">
        <div class="newsletter_button">
            <a href="#"> newsletter</a>
        </div>
        <div class="newsletter_block">
            <p>Inscrivez-vous à notre newsletter pour recevoir toutes les informations sur nos prochaines expositions.</p>
            <form action="#">
                <input type="text" id="newsletter_email" name="newsletter_email" placeholder="votre e-mail (ex : nom@gmail.com)"> <button>Envoyé</button><div class="border"></div>
            </form>
        </div>
    </div>
