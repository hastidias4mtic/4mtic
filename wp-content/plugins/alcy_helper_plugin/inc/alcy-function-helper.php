<?php

if ( !function_exists( 'alcy_get_templete_render' ) ) :

    function alcy_get_templete_render( $slug , Array $param = array() , $is_render = true )
    {

        if ( count( $param ) ):
            foreach ( $param as $key => $value ):
                set_query_var( $key , $value );
            endforeach;
        endif;

        if ( $is_render ):
            ob_start();
        endif;
        extract( $param );
        include plugin_dir_path( __FILE__ ) . '/' . $slug . '.php';
        if ( $is_render ):
            return ob_get_clean();
        endif;

    }

endif;

if ( !function_exists( 'alcy_view' ) ) :

    function alcy_view( $slug , Array $param = array() , $is_render = true )
    {

        return alcy_get_templete_render( 'views/' . $slug , $param , $is_render );
    }

endif;


if ( !function_exists( 'alcy_resources' ) ) :

    function alcy_resources( $slug , Array $param = array() , $is_render = false )
    {

        alcy_get_templete_render( 'resources/' . $slug , $param , $is_render );
    }

endif;


if ( !function_exists( 'alcy_acf_option' ) ) :

    function alcy_acf_option( $id , $default = false , $post_id = false , $format_value = true )
    {

        $output = '';
        if ( class_exists( 'acf' ) ) {
            $output = get_field( $id , $post_id , $format_value );
        }

        if ( !$output ) {
            return $default;
        }

        return $output;

    }

endif;


/**
 *
 *  ============================
 *         Option
 *  ============================
 *
 *  - Retrieves an option value based on an option name.
 *
 */
if ( !function_exists( 'alcy_option' ) ) :

    function alcy_option( $action , $id , $default = false )
    {

        $output = $default;
        if ( $action !== null ) {
            $action = (Object) $action;
            if ( isset( $action->{$id} ) and !empty( $action->{$id} ) ) {
                $output = $action->{$id};
            }
        }

        if ( $action === null ) {
            $output = get_option( $id , $default );
        }


        return $output;

    }

endif;


/**
 *
 *  ============================
 *         Slug Project
 *  ============================
 *
 *  - Retrieves an option value based on an Slug Work name.
 *
 */
if ( !function_exists( 'alcy_project_slug' ) ) :

    function alcy_project_slug()
    {
        return get_theme_mod( 'alcy-project-slug' , 'alcy-projects' );
    }

endif;

if ( !function_exists( 'alcy_custom_project_slug' ) ) :

    function alcy_custom_project_slug()
    {
        return get_theme_mod( 'alcy-custom-project-slug' , alcy_project_slug() );

    }

endif;

/**
 *
 *  ============================
 *         Slug Project
 *  ============================
 *
 *  - Retrieves an option value based on an Slug Work name.
 *
 */
if ( !function_exists( 'alcy_category_slug' ) ) :

    function alcy_category_slug()
    {
        $dsn_projects = get_theme_mod( 'alcy-category-slug' , 'dsn-categories' );
        return $dsn_projects;

    }

endif;


if ( !function_exists( 'alcy_array_gallery' ) ) :

    function alcy_array_gallery( $key , $name = 'dsn-image' , $label = false , $required = 0 )
    {

        $label = ( $label ) ? esc_html__( 'Gallery' , 'lida' ) : $label;

        return array(
            'key'               => $key ,
            'label'             => $label ,
            'name'              => $name ,
            'type'              => 'gallery' ,
            'instructions'      => '' ,
            'required'          => $required ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'min'               => '' ,
            'max'               => '' ,
            'insert'            => 'append' ,
            'library'           => 'all' ,
            'min_width'         => '' ,
            'min_height'        => '' ,
            'min_size'          => '' ,
            'max_width'         => '' ,
            'max_height'        => '' ,
            'max_size'          => '' ,
            'mime_types'        => '' ,
        );

    }

endif;


if ( !function_exists( 'alcy_array_image' ) ) :

    function alcy_array_image( $key , $name = 'dsn-image' , $label = false , $required = 0 )
    {

        $label = ( $label ) ? esc_html__( 'Image' , 'alcy' ) : $label;

        return array(
            'key'               => $key ,
            'label'             => $label ,
            'name'              => $name ,
            'type'              => 'image' ,
            'instructions'      => '' ,
            'required'          => $required ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'return_format'     => 'id' ,
            'preview_size'      => 'thumbnail' ,
            'library'           => 'all' ,
            'min_width'         => '' ,
            'min_height'        => '' ,
            'min_size'          => '' ,
            'max_width'         => '' ,
            'max_height'        => '' ,
            'max_size'          => '' ,
            'mime_types'        => '' ,
        );


    }

endif;

if ( !function_exists( 'alcy_array_input' ) ) :

    function alcy_array_input( $key , $label , $name , $type , $default_value = '' )
    {
        return array(
            'key'               => $key ,
            'label'             => $label ,
            'name'              => $name ,
            'type'              => $type ,
            'instructions'      => '' ,
            'required'          => 1 ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'default_value'     => $default_value ,
            'placeholder'       => '' ,
        );
    }

endif;

if ( !function_exists( 'alcy_array_url' ) ) :

    function alcy_array_url( $key , $name = 'dsn-url' , $default_value = '' )
    {
        return alcy_array_input( $key , esc_html__( 'URL' ) , $name , 'url' , $default_value );
    }

endif;


if ( !function_exists( 'alcy_field_size_img' ) ) :

    function alcy_field_size_img( $key , $default_size = 'alcy-slider-img' , $name = 'size-image' , $label = false , $required = 0 )
    {

        $label = ( $label ) ? esc_html__( 'Size Image' , 'alcy' ) : $label;

        return array(
            'key'               => $key ,
            'label'             => $label ,
            'name'              => $name ,
            'type'              => 'select' ,
            'required'          => 0 ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'choices'           => array(
                'thumbnail'       => esc_html__( 'Thumbnail' , 'alcy' ) ,
                'medium'          => esc_html__( 'Medium' , 'alcy' ) ,
                'medium_large'    => esc_html__( 'Medium Large ' , 'alcy' ) ,
                'large'           => esc_html__( 'Large ' , 'alcy' ) ,
                'full'            => esc_html__( 'Original Size Img' , 'alcy' ) ,
                'alcy-slider-img' => esc_html__( 'Alcy Slider Img' , 'alcy' ) ,

            ) ,
            'default_value'     => $default_size ,
            'allow_null'        => 0 ,
            'multiple'          => 0 ,
            'ui'                => 0 ,
            'return_format'     => 'value' ,
            'ajax'              => 0 ,
            'placeholder'       => '' ,
        );

    }

endif;

/**
 *
 *  ============================
 *         Custom Filed
 *  ============================
 *
 *  - Replace title page custom Title.
 *
 */
if ( !function_exists( 'alcy_custom_title' ) ) :

    function alcy_custom_title( $default = '' , $post = 0 )
    {


        if ( is_home() ) {
            return get_theme_mod( 'home_custom_title' , 'Our <br/> Stories' );
        } elseif ( is_archive() || is_search() ) {
            return alcy_acf_option_array( alcy_get_archives() , 'name' );
        }

        if ( $default ) {
            if ( get_the_title( $post ) ) {
                return get_the_title( $post );
            }
            return $default;
        }

        $custom_title = alcy_acf_option( 'custom_title' , false , $post );
        if ( !$custom_title ):
            if ( get_the_title( $post ) ) {
                return get_the_title( $post );
            }
        endif;

        return $custom_title;

    }

endif;
/**
 * @return array [id , name , title , description]
 */
if ( !function_exists( 'alcy_get_archives' ) ) :

    function alcy_get_archives()
    {


        if ( is_category() ) {
            $cat = get_category( get_query_var( 'cat' ) );

            return array(
                'id'          => 'category' ,
                'name'        => esc_html__( 'Categories Archives' , 'alcy' ) ,
                'title'       => $cat->name ,
                'description' => $cat->category_description ,
            );
        } else if ( is_tag() ) {
            return array(
                'id'          => 'tag' ,
                'name'        => esc_html__( 'Tags Archives' , 'alcy' ) ,
                'title'       => single_tag_title( '' , false ) ,
                'description' => '' ,

            );
        } elseif ( is_search() ) {
            return array(
                'id'          => 'search' ,
                'name'        => esc_html__( 'Search' , 'alcy' ) ,
                'title'       => get_search_query() ,
                'description' => '' ,
            );
        } elseif ( is_author() ) {
            return array(
                'id'          => 'author' ,
                'name'        => esc_html__( 'Author Archives' , 'alcy' ) ,
                'title'       => alcy_author_full_name() ,
                'description' => get_the_author_meta( 'description' ) ,
            );
        } else if ( is_day() ) {
            return array(
                'id'          => 'day' ,
                'name'        => esc_html__( 'Daily Archives' , 'alcy' ) ,
                'title'       => get_the_date() ,
                'description' => '' ,
            );
        } else if ( is_month() ) {

            return array(
                'id'          => 'month' ,
                'name'        => esc_html__( 'Monthly Archives' , 'alcy' ) ,
                'title'       => get_the_date( 'F Y' ) ,
                'description' => '' ,
            );
        } else if ( is_year() ) {
            return array(
                'id'          => 'year' ,
                'name'        => esc_html__( 'Yearly Archives' , 'alcy' ) ,
                'title'       => get_the_date( 'Y' ) ,
                'description' => '' ,
            );
        } else if ( is_404() ) {
            return array(
                'id'          => 'error400' ,
                'name'        => esc_html__( '404' , 'alcy' ) ,
                'title'       => esc_html__( 'Oops! Not Found' , 'alcy' ) ,
                'description' => esc_html__( 'It looks like nothing was found at this location. Maybe try a search?' , 'alcy' ) ,
            );
        } else if ( is_archive() && get_queried_object() !== null && isset( get_queried_object()->taxonomy ) ) {
            $obj = get_queried_object();

            return array(
                'id'          => $obj->taxonomy ,
                'name'        => $obj->name ,
                'title'       => $obj->description ,
                'description' => ''
            );
        }


        return false;

    }

endif;

if ( !function_exists( 'alcy_author_full_name' ) ) :

    function alcy_author_full_name()
    {
        $first_name = get_the_author_meta( 'first_name' );
        $last_name  = get_the_author_meta( 'last_name' );

        if ( !empty( $first_name ) or !empty( $last_name ) ) {
            return esc_html( $first_name ) . ' ' . esc_html( $last_name );
        }


        return esc_html( get_the_author() );
    }

endif;


if ( !function_exists( 'alcy_array_editor' ) ) :

    function alcy_array_editor( $key , $name , $label = false , $required = 0 )
    {

        $label = ( $label ) ? esc_html__( 'Description' , 'lida' ) : $label;

        $editor = array(
            'key'               => $key ,
            'label'             => $label ,
            'name'              => $name ,
            'type'              => 'wysiwyg' ,
            'instructions'      => '' ,
            'required'          => $required ,
            'conditional_logic' => 0 ,
            'wrapper'           => array(
                'width' => '' ,
                'class' => '' ,
                'id'    => '' ,
            ) ,
            'default_value'     => '' ,
            'tabs'              => 'all' ,
            'media_upload'      => 0 ,
            'toolbar'           => 'basic' ,
            'delay'             => 0 ,
        );

        return $editor;

    }

endif;


if ( !function_exists( 'alcy_is_about' ) ) :

    function alcy_is_about()
    {
        return get_page_template_slug() === 'page-about.php';

    }

endif;


if ( !function_exists( 'alcy_get_content' ) ) :

    function alcy_get_content( $post_id )
    {
        $my_postid    = $post_id;//This is page id or post id
        $content_post = get_post( $my_postid );
        $content      = $content_post->post_content;
        $content      = apply_filters( 'the_content' , $content );
        $content      = str_replace( ']]>' , ']]&gt;' , $content );
        return $content;

    }

endif;


if ( !function_exists( 'alcy_check_block' ) ) :

    function alcy_check_block( $block , $is_preview , $condetion , $subMessage )
    {


        if ( $condetion ):
            if ( $is_preview ) {
                printf( '<h1 class="dsn-title">-- %s</h1>' , $block[ 'title' ] );
                printf( '<h2 class="dsn-description dsn-not-support">%s <span>%s</span></h2>' , esc_html__( 'Not Support In Page Template' , 'alcy' ) , $subMessage );
            }

            return true;
        endif;


        return false;
    }

endif;


if ( !function_exists( 'alcy_search_templete' ) ) :

    function alcy_search_templete( $meta_value )
    {

        $pages = get_pages( array(
            'meta_key'   => '_wp_page_template' ,
            'meta_value' => $meta_value
        ) );
        $out   = array( 0 => 'None' );
        foreach ( $pages as $page ) {
            $out[ $page->ID ] = $page->post_title;
        }

        return $out;

    }

endif;

if ( !function_exists( 'alcy_sanitize_minimal_decoration' ) ) :
    function alcy_sanitize_minimal_decoration( $input )
    {
        $allowed_html = array(
            'a'      => array(
                'href'  => array() ,
                'title' => array()
            ) ,
            'br'     => array() ,
            'em'     => array() ,
            'strong' => array() ,
            'img'    => array() ,
            'i'      => array() ,

        );

        return wp_kses( $input , $allowed_html );
    }

endif;


/**
 * @return string  - Share Blog in Social media
 */
if ( !function_exists( 'alcy_share_links' ) ) :

    function alcy_share_links( $befor = '' , $after = '' )
    {

        $share_link = get_theme_mod( 'share_link' );
        if ( !$share_link ) return '';

        $share_links = get_theme_mod( 'show_hide_share_link' , array(
            'facebook' ,
            'twitter' ,
            'google-plus' ,
            'pinterest' ,
        ) );

        $url = get_the_permalink();

        $share_buttons = array(
            'facebook'    => alcy_set_share_links( 'fab fa-facebook-f' , array( 'href' => 'https://www.facebook.com/sharer/sharer.php?u=' . esc_url( $url ) ) ) ,
            'twitter'     => alcy_set_share_links( 'fab fa-twitter' , array( 'href' => 'https://twitter.com/share?url=' . esc_url( $url ) ) ) ,
            'google-plus' => alcy_set_share_links( 'fab fa-google-plus-g' , array( 'href' => 'https://plus.google.com/share?url=' . esc_url( $url ) ) ) ,
            'pinterest'   => alcy_set_share_links( 'fab fa-pinterest-p' , array( 'href' => 'https://www.pinterest.com/pin/create/button/?url=' . esc_url( $url ) ) ) ,
            'get-pocket'  => alcy_set_share_links( 'fab fa-get-pocket' , array( 'href' => 'https://getpocket.com/save?url=' . esc_url( $url ) ) ) ,
            'telegram'    => alcy_set_share_links( 'fab fa-telegram' , array( 'href' => 'https://t.me/share/url?url=' . esc_url( $url ) ) ) ,
        );

        $out = '<div class="share-links "><h5>' . esc_html_e( 'Share This' , 'alcy' ) . '</h5>';
        foreach ( $share_links as $link ):
            $out .= $befor . $share_buttons[ $link ] . $after;
        endforeach;
        $out .= '</div>';


        return $out;
    }

endif;

if ( !function_exists( 'alcy_set_share_links' ) ) :

    function alcy_set_share_links( $icon , $att = array() )
    {

        $att = alcy_set_attr( $att , array(
            'rel'     => 'nofollow' ,
            'href'    => '' ,
            'onclick' => 'window.open(\'' . $att[ 'href' ] . '\' , \'share-dialog\', \'width=626,height=436\'); return false;' ,
        ) );

        $att = alcy_get_attr( $att );


        return '<a ' . $att . ' ><i class="' . esc_attr( $icon ) . '"></i></a>';
    }

endif;


