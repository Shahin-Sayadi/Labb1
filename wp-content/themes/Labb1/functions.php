<?php
// lägger till olika theme options
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


register_sidebar(

    [

       'name' => 'search',

       'Description' => 'top_bar_search',

       'id' => 'search_bar', 

       'before_widget' => ' ',

    ]

);


function register_menus() {
    register_nav_menu('header-menu', 'header-meny');
    register_nav_menu("undersida-menu", "undersida menu"); 
    }
    
    add_action('after_setup_theme', 'register_menus');


?>