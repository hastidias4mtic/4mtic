<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );
$title   = $attr[ 'title' ];
$id_img  = $attr[ 'id_img' ];

$class_title =   sanitize_file_name($title) ;
$img         = wp_get_attachment_image_src( $id_img , 'post-thumbnail' );
if ( isset( $img[ 0 ] ) ):
    $img = $img[ 0 ];
else:
    $img = '';
endif;


?>

<div class="box-about-item post-full-content" data-dsn-box-title="<?php echo esc_attr( $title ) ?>"
     data-dsn-box-class="box-about<?php echo esc_attr( $class_title ) ?>"
     data-dsn-box-img="<?php echo esc_url( $img ); ?>"
>
