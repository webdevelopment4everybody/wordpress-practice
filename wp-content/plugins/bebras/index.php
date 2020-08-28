<?php
/**
* Plugin Name: Bebro pluginas
* Plugin URI: https://www.bebbr.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Your Name Here
* Author URI: http://bebbr.com/
**/


add_action( 'admin_menu', function(){
    add_menu_page('Bebro Puslapis', 'Bebras', 'manage_options', 'bebras', 'bebro_funkcija');
 
add_submenu_page('bebras', 'Page title 2', 'Menu title 2',
    'manage_options', 'bebras2', 'bebro_funkcija2');


 
add_submenu_page('bebras', 'Edit', null,
    'manage_options', 'bebras3', 'bebro_funkcija3');
 
});
 
add_action( 'init', function() {
    $labels = [
      'name'               => 'Calendar',
      'singular_name'      => 'Calendar',
      'add_new'            => 'new Calendar',
      'add_new_item'       => __( 'Add New Product' ),
      'edit_item'          => __( 'Edit Product' ),
      'new_item'           => __( 'New Product' ),
      'all_items'          => __( 'All Products' ),
      'view_item'          => __( 'View Product' ),
      'search_items'       => __( 'Search Products' ),
      'not_found'          => __( 'No products found' ),
      'not_found_in_trash' => __( 'No products found in the Trash' ), 
      'menu_name'          => 'Products'
    ];
    $args = [
      'labels'        => $labels,
      'description'   => 'Holds our products and product specific data',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => [],
      'has_archive'   => true,
    ];
register_post_type('event', $args ); 
});
 
function bebro_funkcija()
{
    echo '<h1>Aš Esu Bebras</h1>';
 
    $post = [
        'post_title'   => 'Test post-----------',
        'post_content' => '',
        'post_status'  => 'publish',
        'post_author'  => 1,
        'meta_input'   => [
            'text' => 'ivykio tekstas---------',
            // 'data' => $_POST['event_date']
        ],
    ];
    
}
 
function bebro_funkcija2()
{
    echo '<h1>Naujas ivykis</h1>';
 
function bebro_funkcija3()
{
    echo '<h1>Aš Esu Bebras Nr 3</h1>';
}
function new_event(){
    if(isset($_POST['event'])){
        $new_post = [
            'post_type' => 'event',
            'post_title' => $_POST['event_title'],
            'post_content' => '',
            'post_status' => 'publish',
            'post_author' => get_current_user_id(),
            'meta_input' => [
                'text' => $_POST['event_text'],
                'date' => $_POST['event_date'],
            ]
        ];
        wp_insert_post( $new_post );
    }
}

wp_enqueue_style( 'style', get_stylesheet_uri() . './../calendar.scss');
wp_enqueue_script( 'js-file', get_template_directory_uri() . './calendar.js');
wp_enqueue_script( 'js-file', get_template_directory_uri() . './script.js');
?>
<div class="wrapper">
    <div class="container-calendar">
        <div class="button-container-calendar">
            <button id="previous" onclick="previous()">&#8249;</button>
            <h3 id="monthAndYear"></h3>
            <button id="next" onclick="next()">&#8250;</button>
        </div>
        <table class="table-calendar" id="calendar" data-lang="en">
            <thead id="thead-month"></thead>
            <tbody id="calendar-body"></tbody>
        </table>
    </div>
    <div class="events-wrappers">
        <div class="previous-events">
            <h2>Nearest previous events</h2>
            <div class="data-time">DATE and TIME: 52258525</div>
            <span>Event:</span>
            <div class="event">ivykis</div>
        </div>
        <div class="today-events">
            <h2>Todays events</h2>
            <div class="data-time">DATE and TIME: 465456</div>
            <span>Event:</span>
            <div class="event">event</div>
        </div>
        <div class="nearest-events">
            <h2>Nearest events</h2>
            <div class="data-time">DATE and TIME: 7855</div>
            <span>Event:</span>
            <div class="event">wut</div>
        </div>
    </div>
</div>

<?php
}





    