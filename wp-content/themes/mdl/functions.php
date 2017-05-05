<?php

add_filter('wp_list_pages', create_function('$t', 'return str_replace("<a ", "<a class=\"mdl-navigation__link\" ", $t);'));

function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
      <?php
      settings_fields( 'section' );
      do_settings_sections( 'theme-options' );
      submit_button();
      ?>
    </form>
  </div>
<?php
}

function setting_field($name) {
  $value = get_option($name);
  echo "<input type='text' name='{$name}' id='{$name}' value='{$value}' />";
}

function setting_twitter() {
  setting_field('twitter');
}

function setting_github() {
  setting_field('github');
}

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'github', 'Github URL', 'setting_github', 'theme-options', 'section' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

  register_setting('section', 'twitter');
  register_setting('section', 'github');
}

add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

function custom_header_widget_init() {
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action('widgets_init', 'custom_header_widget_init');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

