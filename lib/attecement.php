<?php
define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function alpha_attechment($attachments){
    $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    ),
);
     $args = array(
    'label'         => 'My Attachments',
    'post_type'     => array( 'post'),
    'note'          => 'Add slider',
    'button_text'   => 'Attach files',
    'filetype'      => array('image'),
    'fields'        =>$fields  
);
 $attachments->register( 'alpha_a', $args );
}
add_action("attachments_register","alpha_attechment");

function alpha_testimonial_attachments($attachments){
    $fields = array(
        array(
            'name'      => 'name',
            'type'      => 'text',
            'label'     => __( 'Name', 'alpha' ),
        ),
        array(
            'name'      => 'position',
            'type'      => 'text',
            'label'     => __( 'Position', 'alpha' ),
        ),
        array(
            'name'      => 'company',
            'type'      => 'text',
            'label'     => __( 'Company', 'alpha' ),
        ),
        array(
            'name'      => 'testimonial',
            'type'      => 'textarea',
            'label'     => __( 'Testimonial', 'alpha' ),
        ),
    );

    $args = array(

        'label'         => 'Testimonials',
        'post_type'     => array( 'page'),
        'filetype'      => array("image"),
        'note'          => 'Add testimonial',
        'button_text'   => __( 'Attach Files', 'alpha' ),
        'fields'        => $fields,
    );

    $attachments->register( 'testimonials', $args );
}
add_action( 'attachments_register', 'alpha_testimonial_attachments' );
function alpha_team_attachments($attachments){
    $fields = array(
        array(
            'name'      => 'tname',
            'type'      => 'text',
            'label'     => __( 'Name', 'alpha' ),
        ),
        array(
            'name'      => 'tposition',
            'type'      => 'text',
            'label'     => __( 'Position', 'alpha' ),
        ),
        array(
            'name'      => 'tcompany',
            'type'      => 'text',
            'label'     => __( 'Company', 'alpha' ),
        ),
        array(
            'name'      => 'ttestimonial',
            'type'      => 'textarea',
            'label'     => __( 'Testimonial', 'alpha' ),
        ),
    );

    $args = array(

        'label'         => 'Testimonials',
        'post_type'     => array('post'),
        'filetype'      => array("image"),
        'note'          => 'Add testimonial',
        'button_text'   => __( 'Attach Files', 'alpha' ),
        'fields'        => $fields,
    );

    $attachments->register( 'team', $args );
}
add_action( 'attachments_register', 'alpha_team_attachments' );
