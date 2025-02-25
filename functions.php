<?php

function add_theme_scripts(){
    wp_enqueue_style('style', get_template_directory_uri()."/style.css", false, '1.0', "all");    
    wp_enqueue_scripts("main", get_template_directory_uri()."/js/main.js", array('jquary'), "1.0", true);

    if(is_singular() && comments_open() && get_option('thread-comments')){
        wp_enqueue_script('comment-reply');
    }
}

add_action("wp_enqueue_scripts", "add_theme_scripts");

function ds_set_up(){
    add_theme_support('menus');
    register_nav_menu('primary','primary navigation');

}

add_action("init", "ds_set_up");
add_theme_support("post-thumbnails");

?>