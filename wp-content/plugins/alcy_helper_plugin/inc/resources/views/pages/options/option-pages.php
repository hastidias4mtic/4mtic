<?php


if ( function_exists( 'acf_add_local_field_group' ) ):
    add_action( 'after_setup_theme' , function () {


        //--> register Options options all pages
        alcy_resources( 'views/pages/options/pages/options-pages' );

        //--> register Options post
        alcy_resources( 'views/pages/options/pages/posts' );

        //--> register Options page
        alcy_resources( 'views/pages/options/pages/pages' );

        //--> register Options page
        alcy_resources( 'views/pages/options/pages/projects' );

        //--> register Options Slider
        alcy_resources( 'views/pages/options/pages/slider' );

         //--> register Options personal
        alcy_resources( 'views/pages/options/pages/personal' );

         //--> register Options about
        alcy_resources( 'views/pages/options/pages/about' );

         //--> register Options contact
        alcy_resources( 'views/pages/options/pages/contact' );

        
    } );


endif;