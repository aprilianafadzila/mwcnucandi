<?php
//generate tag slug

if (!function_exists('tag_slug')) {

    function tag_slug()

    {

        $ci =& get_instance();

        return $ci->m_lknu->get_all_tag();

    }

}

//generate slug

if (!function_exists('generate_slug')) {

    function generate_slug($slug)

    {

        $slug = strtolower(str_replace(" ", "-", $slug));

        return $slug;

    }

}