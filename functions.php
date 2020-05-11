<?php


// Pour compléter les liens
function ins_get_theme_asset($asset) {
    return get_stylesheet_directory_uri().'/'.ltrim($asset, '/');
}


// 

register_nav_menu('main', 'Le menu de navigation principale');
// pour l'afficher <?php_naw_menu(['theme_location'  => 'social'])

//* Lien du CSS et du JS <3
add_action('wp_enqueue_scripts', 'pf_scripts');
function pf_scripts()
{ 
wp_enqueue_style('dist.app', get_stylesheet_uri());
// wp_enqueue_script('script', get_template_directory_uri() . '/public/js/app.js');
}


//* Fonction qui permet d'ajouter un imaga à la une dans un article
if (function_exists( 'add_theme_support' )) {
    add_theme_support( 'post-thumbnails' );
}




//! pour le custom post_type 
//* Photo! 
add_action( 'init', 'isn_photo_postype' );

function isn_photo_postype() {
    $labels = array(
        'name'                  => _x( 'Photographies', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Photographie', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Photographies', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Photographie', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Ajouter', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter une nouvelle expo', 'textdomain' ),
        'new_item'              => __( 'Nouvelle expo', 'textdomain' ),
        'edit_item'             => __( 'Editer l\'exp', 'textdomain' ),
        'view_item'             => __( 'Voir l\'exp', 'textdomain' ),
        'all_items'             => __( 'Voir toutes les expos', 'textdomain' ),
    );


    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'photographie' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        'menu_icon'          => 'dashicons-camera',

    );

    register_post_type( 'photographie', $args );
}



//* Livres
add_action( 'init', 'isn_bibli_postype' );

function isn_bibli_postype() {
    $labels = array(
        'name'                  => _x( 'Bibliotheque', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Bibliothèque', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Bibliothèque', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Bibliothèque', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Ajouter', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un nouveau livre', 'textdomain' ),
        'new_item'              => __( 'Nouveau livre', 'textdomain' ),
        'edit_item'             => __( 'Editer le livre', 'textdomain' ),
        'view_item'             => __( 'Voir le livre', 'textdomain' ),
        'all_items'             => __( 'Voir touts les livres', 'textdomain' ),
    );


    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'bibliotheque' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        'menu_icon'          => 'dashicons-book',

    );

    register_post_type( 'bibliotheque', $args );
}




//! Supression de menu 

function remove_menu_items() {
	global $menu;
	$restricted = array(__('Posts'), __('Comments'));
	end ($menu);
	while (prev($menu)) {
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)) {
			unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menu_items');


// Le titre
function ins_get_title($separator = "|", $left = true) {
    $separator = ' '.$separator.' ';

    $title = trim(wp_title('', false, 'right'));

    if(!$title) {
        return get_bloginfo('name');
    }

    if($left) {
        return $title.$separator.get_bloginfo('name');
    } else {
        return get_bloginfo('name').$separator.$title; 
    }
}
