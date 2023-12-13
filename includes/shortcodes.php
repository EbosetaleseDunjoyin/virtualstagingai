<?php 

add_shortcode("virtual_staging","show_virtual_form");


function show_virtual_form() {
    include_once VIRTUAL_PATH . '/templates/virtual-staging-form.php';
}