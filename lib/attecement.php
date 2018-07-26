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