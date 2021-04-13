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

//check auth

if (!function_exists('lang_base_url')) {

    function lang_base_url()

    {

        // Get a reference to the controller object

        $ci =& get_instance();

        return $ci->lang_base_url;

    }

}

//generate tag url

if (!function_exists('generate_tag_url')) {

    function generate_tag_url($tag)

    {

        if (!empty($tag)) {

            return base_url() . 'filter?tag=' . $tag;

        }

    }

}

//generate tag url redaksi

if (!function_exists('generate_tag_url_redaksi')) {

    function generate_tag_url_redaksi($tag)

    {

        if (!empty($tag)) {

            return base_url() . 'redaksi?title=' . $tag;

        }

    }

}