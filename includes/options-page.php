<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action("after_setup_theme","load_carbon_fields");
add_action("carbon_fields_register_fields", "create_options_page");

function load_carbon_fields(){

    \Carbon_Fields\Carbon_Fields::boot();

}

function create_options_page() : void {
    Container::make('theme_options', __('Virtual Staging'))->set_icon('dashicons-open-folder')
        ->add_fields(array(
            Field::make('text', 'virtual_staging_ai_shortcode', __('Shortcode - [virtual_staging]'))
            ->set_attribute( 'readOnly', '[virtual_staging]')
            ->set_attribute( 'placeholder', '[virtual_staging]' )
        ));
}