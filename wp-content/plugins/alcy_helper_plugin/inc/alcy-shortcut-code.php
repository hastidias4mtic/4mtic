<?php

//remove_filter('the_content', 'wpautop');


add_shortcode( 'dsnSlider' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'ids'    => '' ,
                               'layout' => 'full' ,
                           ) , $att );

    return alcy_view( 'shortcode/dsnSlider' , array( 'attr' => $att , 'content' => $content ) );

}
);

add_shortcode( 'dsnGallery' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'ids' => '' ,
                           ) , $att );

    return alcy_view( 'shortcode/dsnGallery' , array( 'attr' => $att , 'content' => $content ) );

}
);

add_shortcode( 'embeddedVideo' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'id-img' => '' ,
                           ) , $att );

    return alcy_view( 'shortcode/embedded' , array( 'attr' => $att , 'content' => $content ) );

}
);

add_shortcode( 'parallaxImage' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'ids' => '' ,
                           ) , $att );

    return alcy_view( 'shortcode/parallaxImage' , array( 'attr' => $att , 'content' => $content ) );


} );

add_shortcode( 'dsnService' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'title' => '' ,
                           ) , $att );

    return alcy_view( 'shortcode/dsnService' , array( 'attr' => $att , 'content' => $content ) );


} );

add_shortcode( 'serviceItem' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'title'       => '' ,
                               'icon'        => '' ,
                               'description' => '' ,
                           ) , $att );

    return alcy_view( 'shortcode/serviceItem' , array( 'attr' => $att , 'content' => $content ) );


} );


add_shortcode( 'dsnBrand' , function ( $att , $content = null ) {
    $att = shortcode_atts( array(
                               'title' => ''
                           ) , $att );

    return alcy_view( 'shortcode/dsnBrand' , array( 'attr' => $att , 'content' => $content ) );
} );


add_shortcode( 'brandItem' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'name'   => '' ,
                               'id_img' => ''
                           ) , $att );

    return alcy_view( 'shortcode/brandItem' , array( 'attr' => $att , 'content' => $content ) );

}
);

add_shortcode( 'box-about-start' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'title'  => '' ,
                               'id_img' => ''
                           ) , $att );

    return alcy_view( 'shortcode/box-about-start' , array( 'attr' => $att , 'content' => $content ) );

}
);


add_shortcode( 'box-about-end' , function ( $att , $content = null ) {

    $att = shortcode_atts( array() , $att );

    return alcy_view( 'shortcode/box-about-end' , array( 'attr' => $att , 'content' => $content ) );

}
);


add_shortcode( 'dsn-experience' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'title' => '' ,
                               'items' => array(
                                   array( 'year' => '' , 'description' => '' )
                               )
                           ) , $att );

    return alcy_view( 'shortcode/experience' , array( 'attr' => $att , 'content' => $content ) );

}
);

add_shortcode( 'dsn-skill' , function ( $att , $content = null ) {

    $att = shortcode_atts( array(
                               'title' => '' ,
                               'items' => array(
                                   array( 'title' => '' , 'num' => '' )
                               )
                           ) , $att );

    return alcy_view( 'shortcode/skill' , array( 'attr' => $att , 'content' => $content ) );

}
);


