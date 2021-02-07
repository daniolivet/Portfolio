<?php 

add_theme_support( 'post-thumbnails' );

/* Remove Admin Bar */
function remove_admin_login_header() {

    remove_action('wp_head', '_admin_bar_bump_cb');
    
}

add_action('get_header', 'remove_admin_login_header');

/* Custom Post Type Languages */
$args = array(
    'labels' => array(
        'name' => __('Portfolio', 'portfolio'),
        'add_new' => __('Añadir portfolio'),
        'new_item' => __('Nuevo portfolio'),
        'add_new_item' => __('Añadir Nuevo portfolio'),
        'edit_item' => __('Editar portfolio'),
        'view_item' => __('Ver portfolio en la web'),
        'search_items' => __('Buscar portfolio'),
        'not_found' => __('Portfolio no encontrado'),
        'not_found_in_trash' => __('Portfolio no encontrado en la papelera')
    ),
    'singular_label' => __('portfolio'),
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'page',
    'hierarchical' => false,
    'rewrite' => true,
    'query_var' => 'portfolio',
    'menu_icon' => 'dashicons-welcome-widgets-menus',
    'supports' => array(
        'title',
        'thumbnail',
        'editor'
    )
);

register_post_type('portfolio', $args);

?>