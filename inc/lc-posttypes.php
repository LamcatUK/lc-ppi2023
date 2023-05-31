<?php

function cb_register_post_types()
{
    /**
     * Post Type: Case Studies.
     */

    $labels = [
       "name" => esc_html__("Sponsors", "lc-rbg2023"),
       "singular_name" => esc_html__("Sponsor", "lc-rbg2023"),
    ];

    $args = [
        "label" => esc_html__("Sponsors", "lc-rbg2023"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => true,
        "rewrite" => [ "slug" => "sponsors", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail" ],
        "show_in_graphql" => false,
    ];

    register_post_type("sponsors", $args);

    /**
     * Post Type: People.
     */

    $labels = [
       "name" => esc_html__("People", "lc-rbg2023"),
       "singular_name" => esc_html__("Person", "lc-rbg2023"),
    ];

    $args = [
        "label" => esc_html__("People", "lc-rbg2023"),
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

    register_post_type("people", $args);

    /**
     * Post Type: Sponsors.
     */

    $labels = [
        "name" => esc_html__("Charities", "lc-rbg2023"),
        "singular_name" => esc_html__("Charity", "lc-rbg2023"),
    ];

    $args = [
        "label" => esc_html__("Charities", "lc-rbg2023"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => false,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => true,
        "rewrite" => [ "slug" => "charities", "with_front" => false ],
        "query_var" => true,
        "supports" => [ "title", "editor" ],
        "show_in_graphql" => false,
    ];

    register_post_type("charities", $args);
}

add_action('init', 'cb_register_post_types');
