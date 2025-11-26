<?php

//--------- LES ACTIONS ---------

add_action('init', function(){

    register_taxonomy('diet_type', 'post', [

        'labels' => [
            'name' => 'Type'
        ],
        "show_in_rest" => true,
        "hierarchical" => true,
        "rewrite" => [
            "slug" => "dietetique"
        ]

    ]);

});

add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Entête du menu');
    add_image_size('card-header', 350, 215, true);
});

// Register style sheet.
add_action('wp_enqueue_scripts', function(){
    wp_register_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css");
	wp_enqueue_style( 'bootstrap' );
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_script('bootstrap');
	wp_register_style('allpages',get_stylesheet_directory_uri() . '/assets/scss/all-pages.css', [], 3);
	wp_enqueue_style( 'allpages' );

	// charge le style selon le template de page chargé
	if ( is_page_template( 'templates/style1.php' ) ) {
		wp_register_style( 'style1', get_stylesheet_directory_uri() . '/assets/scss/style1.css',[],3);
		wp_enqueue_style( 'style1' );
	}

});

// Change le séparateur du title
add_filter('document_title_separator', function (){
    return '|';
});

//--------- LES FILTRES ---------

// Ajoute une classe aux li du menu
add_filter('nav_menu_css_class', function($classes){
    $classes[] = 'nav-item';
    return $classes;
});

// Ajoute une classe aux liens du menu
add_filter('nav_menu_link_attributes', function($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
});

// Metaboxes
require_once "metaboxes/favori.php";
SponsoMetaBox::register();

//Créé une pagination customisée pour nos articles
function dietetique_pagination(){

    $pages = paginate_links(['type' => 'array']);
    if($pages === null){
        return;
    }

    echo '<nav aria-label="Pagination" class="my-4">';
		echo '<ul class="pagination-container">';
		
		foreach ($pages as $page) {
		
		    $active = str_contains($page, 'current');
		    $class = 'page-item';
		    if ($active) {
		        $class .= ' active';
		    }
		
		    echo '<li class="' . $class . '">';
		        echo str_replace('page-numbers', 'page-link', $page);
		    echo '</li>';
		}
		
		echo '</ul>';
	echo '</nav>';

}
