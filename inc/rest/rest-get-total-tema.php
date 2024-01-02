<?php

add_action('rest_api_init', 'restRegisterGetTotalTema');

function restRegisterGetTotalTema()
{
    register_rest_route('invait/v1', 'get_total_tema', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'getTotalTema'
    )
    );

}

function getTotalTema($data)
{
    $kategori_tema = get_categories(array('taxonomy' => 'kategori-tema'));

    $kategori_tema_results = array();

    foreach($kategori_tema as $kat){
        array_push($kategori_tema_results, array(
            'term_id' => $kat->term_id,
            'name' => $kat->name,
            'slug' => $kat->slug,
            'count' => $kat->count
        ));
    }
    return $kategori_tema;

}