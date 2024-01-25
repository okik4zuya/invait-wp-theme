<?php

add_action('rest_api_init', 'restRegisterGetInvitationBySlug');

function restRegisterGetInvitationBySlug()
{
    register_rest_route('invait/v1', 'get_invitation_by_slug', array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'getInvitationBySlug'
    )
    );

}

function getInvitationBySlug($data)
{
    $args = array(
        'posts_per_page' => 1,
        'post_type' => 'post',
        'name' => $data['slug']

    );
    $invitation = new WP_Query($args);

    return array(
        'post'=> $invitation->posts[0],
        'cf' => get_fields($invitation->posts[0]->ID),
    );
}