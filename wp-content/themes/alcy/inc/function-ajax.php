<?php


add_action( 'wp_ajax_nopriv_alcy_post_query' , 'alcy_ajax_post_query' );
add_action( 'wp_ajax_alcy_post_query' , 'alcy_ajax_post_query' );


function alcy_ajax_post_query()
{

    if ( isset( $_POST[ 'type' ] ) && isset( $_POST[ 'page' ] ) && isset( $_POST[ 'layout' ] ) && is_numeric( $_POST[ 'page' ] ) && defined( 'DOING_AJAX' ) && DOING_AJAX ) {
        global $post;

        $type = wp_strip_all_tags( $_POST[ 'type' ] );
        $page = wp_strip_all_tags( $_POST[ 'page' ] );
        $dsn_projects = alcy_project_slug();

        $layout = ( $type === 'projects' ) ? 'work' : '';
        $type = ( $type === 'projects' ) ? $dsn_projects : '';


        $numPage = get_option( 'posts_per_page' );

        $myposts = get_posts( array( 'post_type' => $type , 'paged' => $page , 'posts_per_page' => $numPage ) );
        $html = '';


        if ( count( $myposts ) ):
            foreach ( $myposts as $post ) :
                setup_postdata( $post );
                ob_start();
                get_template_part( 'template-parts/posts/content' , $layout );
                $html .= ob_get_clean();
            endforeach;
        endif;


        $encoded = array(
            'status' => true ,
            'html' => $html ,
            'has_next' => ( $numPage <= count( $myposts ) )
        );

        header( 'Content-Type: application/json' );

        echo json_encode( $encoded );
        wp_reset_postdata();

    }

    die();
}