<?php

function loud_post_types()
{
    // Works Post Type
    register_post_type("works", array(
        "supports" => array(
            "title",
            "editor",
            "excerpt"
        ),
        "rewrite" => array(
            "slug" => "campuses"
        ),
        "has_archive" => true,
        "public" => true,
        "labels" => array(
            "name" => "Campuses",
            "add_new_item" => "Add New Campus",
            "edit_item" => "Edit Campus",
            "all_items" => "All Campuses",
            "singular_name" => "Campus"
        ),
        "menu_icon" => "dashicons-location-alt"
    ));
}

add_action("init", "loud_post_types");

?>