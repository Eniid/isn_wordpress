<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    wp_head();
    ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/dist/app.css" media="all" />
    <title>Un titre</title>

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
            <form action="">
                <input type="text" id="name" name="user_name" placeholder="votre e-mail (ex : nom@gmail.com)"> <button>Envoyé</button><div class="border"></div>
            </form>
        </div>
    </div>
