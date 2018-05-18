<?php 


function leaguesite_files() {
	wp_enqueue_script('main-league-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true );
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i', false);
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false);
	wp_enqueue_style('league_main_styles', get_stylesheet_uri(), NULL, microtime());
}


add_action('wp_enqueue_scripts', 'leaguesite_files');

function league_features() {
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'league_features');

