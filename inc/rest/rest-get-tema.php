<?php

add_action('rest_api_init', 'restRegisterGetTema');

function restRegisterGetTema()
{
    register_rest_route('invait/v1', 'get_tema', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'getTema'
    )
    );

}

function getTema($data)
{
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'tema',
        'paged' => isset($data['paged']) ? $data['paged'] : 1,

    );
    if (isset($data['filter'])) {
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'tema',
            'paged' => isset($data['paged']) ? $data['paged'] : 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'kategori-tema',
                    'field' => 'slug',
                    'terms' => $data['filter'],
                )
            ),
        );
    }
    $tema = new WP_Query($args);
    $temaResults = array();

    while ($tema->have_posts()) {
        $tema->the_post();
        array_push($temaResults, array(
            'id' => get_the_ID(),
            //'date' => get_post_datetime(),
            'title' => get_the_title(),
            'slug' => get_post_field('post_name', get_post()),
            'thumbnail' => get_field('thumbnail'),
            'tags' => get_the_terms(get_the_ID(), 'kategori-tema')
        )
        );
    }

    return $temaResults;



}