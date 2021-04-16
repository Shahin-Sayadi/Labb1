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


?>