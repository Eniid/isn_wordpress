<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="L'image sans nom est un lieu dédier à la photographie">
    <meta name="keywords" content="L'image sans nom, photographie, bibliothéque, liége, culture,">
    <meta name="author" content="Everaert Céline">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="http://image-sans-nom.celine-everaert.com/">
    <meta name="twitter:title" content="L'image sans nom">
    <meta name="twitter:description" content="L'image sans nom est un lieu dédier à la photographie">
    <meta name="twitter:creator" content="@enidHBC">

    <meta property="og:title" content="L'image sans nom">
    <meta property="og:url" content="http://image-sans-nom.celine-everaert.com/">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="L'image sans nom">
    <meta property="og:description" content="L'image sans nom est un lieu dédier à la photographie">
    <meta property="og:type" content="website">


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
    <title><?= ins_get_title(',', true) ?></title>

</head>
<body class="no-js">
    <input type="checkbox" id="lightbox">
    <div class="lightbox"><label for="lightbox" class="lightbox_button"><img src="<?php bloginfo('template_url'); ?>/img/plus.svg" alt="close"></label><div class="lightboxContainer"></div></div>
    <h1 role="heading" aria-level="1"><span class="hl">L'</span><span class="hi">image</span><span class="hs">sans</span><span class="hn">nom</span></h1>


    <input class="burger" type="checkbox" aria-hidden="true">
    <?php wp_nav_menu(); ?>

    <div class="newsletter">
        <input class="newsletter_tcheck" type="checkbox" id="news">
        <label for="news" class="newsletter_button"><span class="not_checked">newsletter</span><span class="checked">close</span> </label>
        <div class="newsletter_block">
            
            <p>Inscrivez-vous à notre newsletter pour recevoir toutes les informations sur nos prochaines expositions.</p>
            <?php echo do_shortcode( '[contact-form-7 id="161" title="newsletter"]' ); ?>

        </div>
    </div>
