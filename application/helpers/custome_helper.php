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

//get kanal name

if (!function_exists('get_kanal')) {



    function get_kanal() {

        // ambil data kanal di database

        $ci =& get_instance();

        $id = 1;


        return $ci->m_header->get_data_kanal($id);
    }

}
//get tentang
if (!function_exists('get_tentang')) {



    function get_tentang() {

        // ambil data kanal di database

        $ci =& get_instance();

        $id = 5;


        return $ci->m_header->get_data_kanal($id);
    }

}

//get lembaga

if (!function_exists('get_lembaga')) {



    function get_lembaga() {

        // ambil data kanal di database

        $ci =& get_instance();

        $id = 2;


        return $ci->m_header->get_data_kanal($id);
    }

}

//get Badanotonom
if (!function_exists('get_badanotonom')) {



    function get_badanotonom() {

        // ambil data kanal di database

        $ci =& get_instance();

        $id = 3;


        return $ci->m_header->get_data_kanal($id);
    }

}
//get ranting
if (!function_exists('get_ranting')) {



    function get_ranting() {

        // ambil data kanal di database

        $ci =& get_instance();

        $id = 4;


        return $ci->m_header->get_data_kanal($id);
    }

}
//get ranting
if (!function_exists('get_redaksi')) {



    function get_redaksi() {

        // ambil data kanal di database

        $ci =& get_instance();

        $id = 6;


        return $ci->m_header->get_data_kanal($id);
    }

}

//generate kanal url

if (!function_exists('generate_url')) {

    function generate_url($depan,$tag)

    {

        if (!empty($tag)) {

            $depan = strtolower(str_replace(" ", "", $depan));
            $tag = strtolower(str_replace(" ", "-", $tag));

            return base_url() . $depan.'?menu=' . $tag;

        }

    }

}

//generate kanal url

if (!function_exists('generate_url_route')) {

    function generate_url_route($depan,$tengah,$belakang)

    {

        if (!empty($depan) AND !empty($tengah) AND !empty($belakang)) {

             $depan = strtolower(str_replace(" ", "", $depan));
             $tengah = strtolower(str_replace(" ", "-", $tengah));
            return base_url() . $depan.'?menu=' . $tengah .'&slug='. $belakang;

        }

    }

}

//generate  url detail

if (!function_exists('generate_url_detail')) {

    function generate_url_detail($depan,$ranting,$slug)

    {
        $depan = strtolower(str_replace(" ", "", $depan));
        $ranting = strtolower(str_replace(" ", "-", $ranting));
        return base_url() . $depan.'?menu=' . $ranting .'&slug='. $slug;


    }

}
