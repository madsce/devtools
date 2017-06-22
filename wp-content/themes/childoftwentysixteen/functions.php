<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentysixteen'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* where parent-style is the same $handle used in the 
/* parent theme when it registers its stylesheet. 
/* For example, if the parent theme is twentyfifteen, 
/* by looking in its functions.php for its 
/* wp_enqueue_style() call, you can see the tag it uses 
/* there is 'twentyfifteen-style'. In your child code, 
/* replace the instance of 'parent-style' with 'twentyfifteen-style', 
/* like so: $parent_style = 'twentyfifteen-style';
