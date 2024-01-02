<?php

add_action('rest_api_init', 'restRegisterPostMessage');

function restRegisterPostMessage(){
    register_rest_route('invait/v1', 'create_message', array(
        'methods' => 'POST',
        'callback' => 'createMessage'
    ));

}

function createMessage($data){

    
    wp_insert_post(array(
        'post_type' => 'message',
        'post_status' => 'publish',
        'post_title' => $data['title'],
        'meta_input' => array(
            'invitation_id' => $data['invitation_id'],
            'message_content' => $data['content']
        )
    ));
    $response = new WP_REST_Response(array(
        'status' => 201
    ));
    return $response;
    
}