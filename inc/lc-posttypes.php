<?php

function lc_register_post_types()
{
    /**
     * Post Type: Testimonials.
     */

    $labels = [
       "name" => esc_html__("Testimonials", "lc-ppi2023"),
       "singular_name" => esc_html__("Testimonial", "lc-ppi2023"),
    ];

    $args = [
        "label" => esc_html__("Testimonials", "lc-ppi2023"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => true,
        "rewrite" => false,
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type("testimonials", $args);
}

add_action('init', 'lc_register_post_types');
