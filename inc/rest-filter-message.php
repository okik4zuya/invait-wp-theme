<?php

add_action('rest_api_init', 'restFilterMessage');

function restFilterMessage()
{
    register_rest_route('invait/v1', 'filter', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'invaitFilterMessageResults'
    ));

}

function invaitFilterMessageResults($data)
{
    $args = array(
        'posts_per_page' => -1,
        'paged' => isset($data['paged'])? $data['paged'] : 1,
        'post_type' => 'message',
        'meta_key' => 'invitation_id',
        'meta_value' => sanitize_text_field($data['invitation_id']),

    );
    $messages = new WP_Query($args);
    $messageResults = array();

    while ($messages->have_posts()) {
        $messages->the_post();
        array_push($messageResults, array(
            'date' => get_post_datetime(),
            'title' => get_the_title(),
            'content' => get_field('message_content'),
            'invitation_id' => get_field('invitation_id')
        ));
    }
    return $messageResults;
}