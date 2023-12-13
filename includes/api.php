<?php 

add_action("rest_api_init", "create_rest_endpoint");



function  create_rest_endpoint(){
    register_rest_route('vsai/v1', '/createRender', array(
        'methods' => 'POST',
        'callback' => 'createRender',
        'permission_callback' => '__return_true'
    ));

    register_rest_route('vsai/v1', '/getRender', array(
        'methods' => 'POST',
        'callback' => 'createRender',
        'permission_callback' => '__return_true'
    ));
}

function createRender($request){

}