<?php

function admin_css() {
  echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('template_directory') . '/assets/css/admin.css" />';
}
// add_action('admin_head', 'admin_css');


// style login form
function login_stylesheet() { ?>
    <link rel="stylesheet" id="login_css"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/assets/css/login.css'; ?>" type="text/css" media="all" />
<?php }
// add_action( 'login_enqueue_scripts', 'login_stylesheet' );


// function custom_menu_order($menu_ord) {
//     if (!$menu_ord) return true;

//     return array(
//         'index.php', // Dashboard
//         'separator1', // First separator
//         'edit.php?post_type=page', // Pages
//         'edit.php', // Posts
//         'edit.php?post_type=projects', // Projects
//         'edit.php?post_type=team', // Team Members
//         'separator2', // Second separator
//         'upload.php', // Media
//     );
// }
// add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
// add_filter('menu_order', 'custom_menu_order');




// function revcon_change_post_label() {
//     global $menu;
//     global $submenu;
//     $menu[5][0] = 'News';
//     $submenu['edit.php'][5][0] = 'News';
//     $submenu['edit.php'][10][0] = 'Add News';
//     $submenu['edit.php'][16][0] = 'News Tags';
//     echo '';
// }
// function revcon_change_post_object() {
//     global $wp_post_types;
//     $labels = &$wp_post_types['post']->labels;
//     $labels->name = 'News';
//     $labels->singular_name = 'News';
//     $labels->add_new = 'Add News';
//     $labels->add_new_item = 'Add News';
//     $labels->edit_item = 'Edit News';
//     $labels->new_item = 'News';
//     $labels->view_item = 'View News';
//     $labels->search_items = 'Search News';
//     $labels->not_found = 'No News found';
//     $labels->not_found_in_trash = 'No News found in Trash';
//     $labels->all_items = 'All News';
//     $labels->menu_name = 'News';
//     $labels->name_admin_bar = 'News';
// }

// add_action( 'admin_menu', 'revcon_change_post_label' );
// add_action( 'init', 'revcon_change_post_object' );
