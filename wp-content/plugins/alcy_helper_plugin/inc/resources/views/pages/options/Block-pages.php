<?php

add_filter( 'block_categories' , function ( $categories , $post ) {

    return array_merge(
        $categories ,
        array(
            array(
                'slug'  => 'dsn-grid' ,
                'title' => __( 'Design Grid' , 'alcy' ) ,
                'icon'  => 'wordpress' ,
            ) ,
        )
    );
} , 10 , 2 );


add_action( 'acf/init' , function () {


    // check function exists.
    if ( function_exists( 'acf_register_block' ) and function_exists( 'acf_add_local_field_group' ) ) :


        // register a lidaSlider block.
        alcy_resources( 'views/pages/options/blocks/slider' );

        // register a gallery block.
        alcy_resources( 'views/pages/options/blocks/gallery' );

        // register a embeddedVideo block.
        alcy_resources( 'views/pages/options/blocks/embeddedVideo' );

        // register a parallaxImage block.
        alcy_resources( 'views/pages/options/blocks/parallaxImage' );


        // register a Service block.
        alcy_resources( 'views/pages/options/blocks/service' );

        // register a lidaBrand block.
        alcy_resources( 'views/pages/options/blocks/Brand' );

        // register a Box block.
        alcy_resources( 'views/pages/options/blocks/box-about-start' );
        alcy_resources( 'views/pages/options/blocks/box-about-end' );

        // register a experience block.
        alcy_resources( 'views/pages/options/blocks/experience' );

        // register a skill block.
        alcy_resources( 'views/pages/options/blocks/skill' );


    endif;
}


);
