<?php


/**
 * @return string links of category
 */
if ( !function_exists( 'alcy_post_category' ) ) :

    function alcy_post_category( $seperate = ', ', $terms = 'category', $link = true, $current_post = false )
    {
        $categores = get_the_terms( $current_post, $terms );


        $outPut = '';
        $i = 0;

        if ( !empty( $categores ) ) {
            foreach ( $categores as $cat ) {
                $cat_link = get_category_link( $cat->term_id );
                $alt = esc_attr__( 'View All Posts in', 'alcy' ) . ' ' . $cat->description;
                $cat_name = $cat->name;

                if ( $i > 0 ) {
                    $outPut .= $seperate;
                }

                if ( $link ) {
                    $outPut .= '<a href="' . esc_url( $cat_link ) . '" title="' . esc_attr( $alt ) . '" class="dsn-ajax-theme effect-ajax"><span>' . esc_html( $cat_name ) . '</span></a>';
                } else {
                    $outPut .= esc_html( $cat_name );
                }

                $i++;
            }

        }

        return $outPut;
    }

endif;

/**
 * @return string links of category
 */
if ( !function_exists( 'alcy_post_category_slug' ) ) :

    function alcy_post_category_slug( $seperate = ' ', $terms = 'category', $current_post = false )
    {
        $categores = get_the_terms( $current_post, $terms );


        $outPut = '';
        $i = 0;

        if ( !empty( $categores ) ) {
            foreach ( $categores as $cat ) {
                $cat_name = $cat->slug;

                if ( $i > 0 ) {
                    $outPut .= $seperate;
                }
                $outPut .= esc_attr( $cat_name );
                $i++;
            }

        }

        return $outPut;
    }

endif;


/**
 * @return string The permalink for the specified day, month, and year archive.
 */
if ( !function_exists( 'alcy_date_link' ) ) :

    function alcy_date_link()
    {
        $archive_year = get_the_time( 'Y' );
        $archive_month = get_the_time( 'm' );
        $archive_day = get_the_time( 'd' );

        return esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) );
    }

endif;

/**
 * @return string The permalink for the specified day, month, and year archive.
 */
if ( !function_exists( 'alcy_header' ) ) :
    function alcy_header()
    {
        ?>
        <header class="post-header">
            <div class="text-center mb-40">
                <div class="cat">
                    <?php
                    if ( get_post_type() === alcy_project_slug() ):
                        echo alcy_post_category( '', alcy_category_slug() );
                    else:
                        echo alcy_post_category( '' );

                    endif;
                    ?>
                </div>
                <h3><?php echo alcy_custom_title() ?></h3>

                <?php if ( is_page() || alcy_is_work() ):
                    if ( alcy_description_head() ):
                        printf( '<div class="meta-date"><span>%s</span></div>', alcy_description_head() );
                    endif;
                else: ?>
                    <div class="meta-date">
                        <a href="<?php echo alcy_date_link() ?>" class="effect-ajax"
                           title="<?php the_time( 'F d, Y' ) ?>"><span
                                    class="published "><?php echo esc_html( get_the_date() ) ?></span> </a>
                    </div>
                <?php endif; ?>


            </div>
            <?php
            if ( has_post_thumbnail() ): ?>
                <div class="post-img mb-40">
                    <?php $img = get_the_post_thumbnail_url() ?>
                    <div class="img-fullscreen " data-dsn-grid="move-up">
                        <div class="cover-bg p-relative" data-image-src="<?php echo esc_url( $img ) ?>"
                             data-dsn-ajax="img">
                            <div class="dsn-box-shadow"></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </header>
        <?php
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
if ( !function_exists( 'alcy_acf_option' ) ) :

    function alcy_acf_option( $id, $default = false, $post_id = false, $format_value = true )
    {

        $output = '';
        if ( class_exists( 'acf' ) ) {
            $output = get_field( $id, $post_id, $format_value );
        }

        if ( !$output ) {
            return $default;
        }

        return $output;

    }

endif;


if ( !function_exists( 'alcy_acf_option_array' ) ) :

    function alcy_acf_option_array( $options, $id, $default = false )
    {


        $options = (object)$options;

        if ( isset( $options->{$id} ) and $options->{$id} ) {
            return $options->{$id};
        }

        return $default;
    }

endif;


if ( !function_exists( 'alcy_normal_header' ) ) :
    function alcy_normal_header()
    {
        $class = alcy_description_head();

        if ( !empty( $class ) ):
            $class = 'title-style pb-15 mb-15';
        else :
            $class = '';
        endif;
        ?>
        <header class="header-blog">
            <h3 class="<?php echo esc_attr( $class ) ?>"><?php echo alcy_custom_title() ?></h3>
            <?php if ( !empty( $class ) ) : ?>
                <p class="pt-15"><?php echo alcy_description_head() ?></p>
            <?php endif; ?>
        </header>
        <?php
    }
endif;


/**
 * @return string links of tag
 */
if ( !function_exists( 'alcy_post_tag' ) ) :

    function alcy_post_tag( $seperate = ', ' )
    {

        $tags = get_the_tags();

        $outPut = '';
        $i = 0;

        if ( !empty( $tags ) ) {
            $outPut .= '<div class="post-tags tagcloud">';
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );
                $alt = esc_attr__( 'View All Posts in Tag', 'alcy' ) . ' ' . $tag->description;
                $tag_name = $tag->name;
                $post_meta = $tag->taxonomy;

                if ( $i > 0 ) {
                    $outPut .= $seperate;
                }


                $outPut .= '<a href="' . esc_url( $tag_link ) . '" title="' . esc_attr( $alt ) . '" rel="tag"><span class="' . esc_attr( $post_meta ) . '">' . esc_html( $tag_name ) . '</span></a>';
                $i++;
            }
            $outPut .= '</div>';

        } else {
            $outPut = '<div class="" ></div>';
        }

        return $outPut;
    }

endif;


if ( !function_exists( 'alcy_get_next' ) ) :

    function alcy_get_next( $post_id = false )
    {

        if ( $post_id ) {
            $next_post = $post_id;
        } else {
            $next_post = get_Next_post();
            $description_header = esc_html__( 'Next Post', 'alcy' );
        }


        if ( !$next_post && !isset( $next_post->ID ) ) {
            global $post;
            $args = array(
                'post_type' => $post->post_type,
                'order'     => 'ASC'
            );

            $recent = wp_get_recent_posts( $args, OBJECT );
            if ( !empty( $recent ) && isset( $recent[ 0 ] ) ) {
                $next_post = $recent[ 0 ];
            } else {
                return false;
            }
        }


        return $next_post;


    }

endif;


if ( !function_exists( 'alcy_get_next_posts' ) ) :

    function alcy_get_next_posts( $post_id = false )
    {

        $next_post = alcy_get_next();
        $next_type = 'sticky';
        if ( get_post_type() === 'post' ) {
            $next_type = 'post';
        }

        if ( $next_type === 'post' ):
            ?>
            <div class="nav-single">
                <div class="nav-next">

                    <div class="nav-desc">
                        <h4><?php esc_html_e( 'Next Post', 'alcy' ) ?></h4>
                        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ) ?>" class="effect-ajax"
                           data-dsn-ajax="next">

                            <?php
                            if ( get_the_title( $next_post->ID ) ):
                                echo get_the_title( $next_post->ID );
                            else:
                                esc_html_e( 'Next Post', 'alcy' );
                            endif;

                            ?>


                            <?php
                            if ( has_post_thumbnail( $next_post ) ) :
                                echo get_the_post_thumbnail( $next_post, 'post-thumbnail', array(
                                    'class' => 'dsn-imgs'
                                ) );
                            endif;
                            ?>

                        </a>
                    </div>
                </div>
            </div>
        <?php
        else:
            ?>
            <div class="next-post-navigation">
                <div class="nav-next">
                    <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ) ?>" class="effect-ajax"
                       data-dsn-ajax="next">
                        <span class="nav-subtitle"><?php esc_html_e( 'Next', 'alcy' ) ?></span>
                        <span class="nav-title"><?php echo get_the_title( $next_post->ID ) ?></span>
                        <span class="nav-title-icon-wrapper"></span>
                        <?php
                        if ( has_post_thumbnail( $next_post ) ) :
                            echo get_the_post_thumbnail( $next_post, 'post-thumbnail', array(
                                'class' => 'dsn-imgs'
                            ) );
                        endif;
                        ?>
                    </a>
                </div>
            </div>
        <?php
        endif;


    }

endif;


/**
 * @return string (section comment)
 */


if ( !function_exists( 'alcy_custom_comment' ) ) :

    function alcy_custom_comment( $comment, $args, $depth )
    {
        $GLOBALS[ 'comment' ] = $comment;
        global $post;
        $comment_class = $depth === 1 ? 'comment-list' : 'comment-list blog_comments-rep';
        echo '<div class="comments-area">';
        switch ( $comment->comment_type ) :
            case 'pingback':
            case 'trackback':
                ?>
                <ul id="comment-<?php comment_ID(); ?>" class="comment-pingback comment-list">
                    <li class="comment">
                        <div class="pingback comment-body">
                            <div class="pingback ms-author-name "><?php comment_author_link(); ?></div>
                            <div class="comment-meta">
                                <?php edit_comment_link( '<i class="fas fa-pencil-alt"></i> ' . esc_html__( 'Edit', 'alcy' ), '<span class="edit-link">', '</span>' ); ?>

                            </div>
                        </div>

                    </li>
                </ul>
                <?php break;
            default:
                ?>
                <ul id="comment-<?php comment_ID(); ?>" <?php comment_class( esc_attr( $comment_class ) ); ?> >
                    <li class="comment">
                        <div class="comment-body">
                            <div class="comment-author">
                                <?php echo get_avatar( $comment, 50, $default = '' ); ?>
                            </div>
                            <a href="<?php comment_author_link() ?>" class="author-name"><?php comment_author(); ?></a>
                            <div class="comment-meta mb-20">
                                <?php echo get_comment_date( 'F d, Y' ) . esc_html__( ' at ', 'alcy' ) . get_comment_time(); ?>
                                <?php edit_comment_link( '<i class="fas fa-pencil-alt"></i> ' . esc_html__( 'Edit', 'alcy' ), ' ', '' ); ?>
                            </div>
                            <div class="post-full-content single-post"><?php comment_text(); ?></div>

                            <?php
                            comment_reply_link( array_merge( $args, array(
                                'depth'      => $depth,
                                'max_depth'  => $args[ 'max_depth' ],
                                'reply_text' => '<i class="fas fa-reply"></i> ' . esc_html__( 'Reply', 'alcy' ),
                                'before'     => '<div class="reply">',
                                'after'      => '</div>'
                            ) ) );
                            ?>

                            <?php if ( $comment->comment_approved == '0' ): ?>
                                <i class="moderate">
                                    <?php esc_html_e( 'Your comment is awaiting moderation.', 'alcy' ); ?>
                                </i>
                            <?php endif; ?>
                        </div>
                    </li>

                </ul>


            <?php endswitch;
        echo '</div>';
    }

endif;

/**
 * -Retrieves the amount of comments a post has.
 * @return string  - the numeric string representing the number of comments  the post has
 */
if ( !function_exists( 'alcy_post_count_comment' ) ) :

    function alcy_post_count_comment( $link = true, $in_h3 = '' )
    {
        $comment_num = get_comments_number();
        $s_link_open = '<a href="' . esc_url( get_comments_link() ) . '">';
        $s_link_close = '</a>';
        $comment = '';
        $s_title = '<h3>' . $in_h3;
        $e_title = '</h3>';
        $s_number = '<span>';
        $e_number = '</span>';

        // comment link
        if ( $comment_num == 0 ):
            $comment = $s_title . esc_html__( 'Comment', 'alcy' ) . $e_title . $s_number . '0' . $e_number;
            $s_link_open = '';
            $s_link_close = '';
        elseif ( $comment_num > 1 ) :
            $comment = $s_title . esc_html__( 'Comments', 'alcy' ) . $e_title . $s_number . esc_html( $comment_num ) . $e_number;
        else:
            $comment = $s_title . esc_html__( 'Comment', 'alcy' ) . $e_title . $s_number . esc_html( $comment_num ) . $e_number;
        endif;
        if ( $link ):
            $comments = $s_link_open . $comment . $s_link_close;
        else:
            $comments = $comment;
        endif;


        return $comments;
    }

endif;


if ( !function_exists( 'alcy_comment_nav' ) ) :
    function alcy_comment_nav()
    {
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
            ?>
            <nav class="navigation comment-navigation clearfix" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'alcy' ); ?></h2>
                <div class="nav-links">
                    <?php
                    if ( $prev_link = get_previous_comments_link( esc_html__( 'Older Comments', 'alcy' ) ) ) :
                        printf( '<div class="comment-nav nav-previous">%s</div>', $prev_link );
                    endif;

                    if ( $next_link = get_next_comments_link( esc_html__( 'Newer Comments', 'alcy' ) ) ) :
                        printf( '<div class="comment-nav nav-next">%s</div>', $next_link );
                    endif;
                    ?>
                </div><!-- .nav-links -->
            </nav><!-- .comment-navigation -->
        <?php
        endif;
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
        return get_theme_mod( 'alcy-project-slug', 'alcy-projects' );
    }

endif;

if ( !function_exists( 'alcy_custom_project_slug' ) ) :

    function alcy_custom_project_slug()
    {
        return get_theme_mod( 'alcy-custom-project-slug', alcy_project_slug() );

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
        $dsn_projects = get_theme_mod( 'alcy-category-slug', 'dsn-categories' );
        return $dsn_projects;

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
if ( !function_exists( 'alcy_get_size_image_src' ) ) :

    function alcy_get_size_image_src( $size = 'post-thumbnail' )
    {

        return 'post-thumbnail';

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
if ( !function_exists( 'alcy_header_sticky' ) ) :

    function alcy_header_sticky( $post_thumbnail = false, $dir = 'right', $classes = '' )
    {
        $about_sidebar = '';
        if ( !$post_thumbnail ) {
            $about_sidebar = 'dsn-about-imgs';
        }
        if ( $dir === 'right' ):
            $dir = 'dsn-right';
        endif;
        ?>
        <aside class="page-sidebar col-small <?php echo esc_attr( 'sidebar-' . $dir . ' ' . $classes ) ?>">
            <div class="page-sidebar-media h-100 w-100 <?php echo esc_attr( $about_sidebar ) ?>">
                <?php
                if ( $post_thumbnail ) {
                    printf( '<div class="cover-bg h-100 w-100" data-image-src="%s" data-dsn-ajax="img"></div>', get_the_post_thumbnail_url() );
                }
                ?>

            </div>
        </aside>
        <?php
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

    function alcy_custom_title( $default = '', $post = 0 )
    {


        if ( is_home() ) {
            return get_theme_mod( 'home_custom_title', 'Our <br/> Stories' );
        } elseif ( is_archive() || is_search() ) {
            return alcy_acf_option_array( alcy_get_archives(), 'name' );
        }

        if ( $default ) {
            if ( get_the_title( $post ) ) {
                return get_the_title( $post );
            }
            return $default;
        }

        $custom_title = alcy_acf_option( 'custom_title', false, $post );
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
                'id'          => 'category',
                'name'        => esc_html__( 'Categories Archives', 'alcy' ),
                'title'       => $cat->name,
                'description' => $cat->category_description,
            );
        } else if ( is_tag() ) {
            return array(
                'id'          => 'tag',
                'name'        => esc_html__( 'Tags Archives', 'alcy' ),
                'title'       => single_tag_title( '', false ),
                'description' => '',

            );
        } elseif ( is_search() ) {
            return array(
                'id'          => 'search',
                'name'        => esc_html__( 'Search', 'alcy' ),
                'title'       => get_search_query(),
                'description' => '',
            );
        } elseif ( is_author() ) {
            return array(
                'id'          => 'author',
                'name'        => esc_html__( 'Author Archives', 'alcy' ),
                'title'       => alcy_author_full_name(),
                'description' => get_the_author_meta( 'description' ),
            );
        } else if ( is_day() ) {
            return array(
                'id'          => 'day',
                'name'        => esc_html__( 'Daily Archives', 'alcy' ),
                'title'       => get_the_date(),
                'description' => '',
            );
        } else if ( is_month() ) {

            return array(
                'id'          => 'month',
                'name'        => esc_html__( 'Monthly Archives', 'alcy' ),
                'title'       => get_the_date( 'F Y' ),
                'description' => '',
            );
        } else if ( is_year() ) {
            return array(
                'id'          => 'year',
                'name'        => esc_html__( 'Yearly Archives', 'alcy' ),
                'title'       => get_the_date( 'Y' ),
                'description' => '',
            );
        } else if ( is_404() ) {
            return array(
                'id'          => 'error400',
                'name'        => esc_html__( '404', 'alcy' ),
                'title'       => esc_html__( 'Oops! Not Found', 'alcy' ),
                'description' => esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'alcy' ),
            );
        } else if ( is_archive() && get_queried_object() !== null && isset( get_queried_object()->taxonomy ) ) {
            $obj = get_queried_object();

            return array(
                'id'          => $obj->taxonomy,
                'name'        => $obj->name,
                'title'       => $obj->description,
                'description' => ''
            );
        }


        return false;

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
if ( !function_exists( 'alcy_description_head' ) ) :

    function alcy_description_head( $default = '' )
    {
        if ( is_home() ) {
            return get_theme_mod( 'home_custom_desc' );
        } elseif ( is_archive() || is_search() ) {
            return alcy_acf_option_array( alcy_get_archives(), 'title' );
        }
        return alcy_acf_option( 'description_header', $default );
    }

endif;


/**
 *
 *  ============================
 *         Custom Filed
 *  ============================
 *
 *  - Get type Header Options.
 *
 */
if ( !function_exists( 'alcy_type_header' ) ) :

    function alcy_type_header( $default = 'post' )
    {

        $type_header = alcy_acf_option( 'header_type', $default );
        if ( is_home() ) {
            $type_header = get_theme_mod( 'home_header_type', 'normal' );
        } elseif ( is_archive() || is_search() ) {
            $type_header = get_theme_mod( 'archive_header_type', 'normal' );
        } elseif ( get_post_type() === 'post' ) {
            $type_header = 'post';
        } elseif ( in_array( get_page_template_slug(), array( 'page-slider.php', 'page-personal.php', 'page-alcy-contact.php', 'page-about.php' ) ) || is_404() ) {
            $type_header = 'none';
        }

        return $type_header;

    }

endif;


if ( !function_exists( 'alcy_author_full_name' ) ) :

    function alcy_author_full_name()
    {
        $first_name = get_the_author_meta( 'first_name' );
        $last_name = get_the_author_meta( 'last_name' );

        if ( !empty( $first_name ) or !empty( $last_name ) ) {
            return esc_html( $first_name ) . ' ' . esc_html( $last_name );
        }


        return esc_html( get_the_author() );
    }

endif;


/**
 *
 *  ============================
 *         Custom Filed
 *  ============================
 *
 *  - Get type Header Options.
 *
 */
if ( !function_exists( 'alcy_sidebar' ) ) :

    function alcy_sidebar( $default = true )
    {

        $type_header = alcy_acf_option( 'header_type', $default );
        if ( get_post_type() === 'post' ) {
            $type_header = 'post';
        }

        return $type_header;

    }

endif;

if ( !function_exists( 'alcy_is_work' ) ) :

    function alcy_is_work( $post = null )
    {
        return get_post_type( $post ) === alcy_project_slug();
    }

endif;


if ( !function_exists( 'alcy_list_info' ) ) :

    function alcy_list_info()
    {
        $list = alcy_acf_option( 'list_information' );
        $out = '';
        if ( $list ):
            foreach ( $list as $info ):
                $title = alcy_acf_option_array( $info, 'title' );
                $description = alcy_acf_option_array( $info, 'description' );
                $out .= '<div class="meta-item">';
                $out .= '<h4>' . $title . '</h4>';
                $out .= '<span>' . $description . '</span>';
                $out .= '</div>';
            endforeach;
        endif;

        return $out;
    }

endif;

/**
 * @return string  links pagination
 */
if ( !function_exists( 'alcy_pagination' ) ) :

    function alcy_pagination( $args = '', $is_post = false )
    {
        global $wp_query;

        $num = alcy_acf_option_array( $args, 'total', 0 );
        $sec_pa = 'mt-25 mb-100';
        if ( $is_post ) {
            $sec_pa = 'pb-100';

        }


        if ( $wp_query->max_num_pages > 1 || $num > 1 ) {
            $out = '<div class="dsn-pagination  text-center">';
            $out .= '<div class="container">';
            $out .= paginate_links( $args );
            $out .= '</div>';
            $out .= '</div>';
        }

        echo isset( $out ) ? $out : '';

    }

endif;


/**
 * @return string  Buttons pagination
 */
if ( !function_exists( 'alcy_buttons_pagination' ) ) :

    function alcy_buttons_pagination( $label = '', $class = '' )
    {

        $out = '<span class="button-next ' . esc_attr( $class ) . '">';
        $out .= '<svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">';
        $out .= '<path d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z"></path>';
        $out .= '</svg>';
        $out .= '<span>' . $label . '</span>';
        $out .= '</span>';

        return $out;

    }

endif;


if ( !function_exists( 'alcy_social_setting' ) ) :
    function alcy_social_setting( $display = 'name' )
    {
        $so = get_theme_mod( 'alcy_social', array() );
        $output = '';

        foreach ( $so as $s ):
            $link = alcy_acf_option_array( $s, 'link', '' );
            $name = alcy_acf_option_array( $s, 'name' );
            $type = alcy_acf_option_array( $s, $display );


            $output .= '<a href="' . esc_url( $link ) . '" class="box-text right"   target="_blank" title="' . esc_attr( $name ) . '" rel="nofollow"><span class="text" data-hover="' . esc_attr( $type ) . '">' . esc_html( $type ) . '</span></a>';


        endforeach;


        return $output;
    }
endif;


if ( !function_exists( 'alcy_sanitize_minimal_decoration' ) ) :
    function alcy_sanitize_minimal_decoration( $input )
    {
        $allowed_html = array(
            'a'      => array(
                'href'  => array(),
                'title' => array()
            ),
            'br'     => array(),
            'em'     => array(),
            'strong' => array(),
            'img'    => array(),
            'i'      => array(),

        );

        return wp_kses( $input, $allowed_html );
    }

endif;

/**
 *
 * you can fill in defaults when needed.
 *
 * @param array $pairs The list of supported attributes and their defaults.
 * @param array $att User defined attributes .
 *
 * @return array .
 */
if ( !function_exists( 'alcy_set_attr' ) ) :

    function alcy_set_attr( array $pairs, array $att )
    {

        foreach ( $att as $key => $value ) {

            if ( !array_key_exists( $key, $pairs ) ) {

                $pairs[ $key ] = $value;

            }

        }

        return $pairs;
    }

endif;

/**
 *
 * you can fill in defaults when needed.
 *
 * @param array $pairs The list of supported attributes and their defaults.
 * @param array $att User defined attributes .
 *
 * @return string .
 */
if ( !function_exists( 'alcy_get_attr' ) ) :

    function alcy_get_attr( $att )
    {

        $out = '';

        if ( empty( $att ) ) {

            return $out;

        } elseif ( !is_array( $att ) ) {

            return $att;

        } elseif ( count( $att ) ) {

            foreach ( $att as $key => $value ) {
                $out .= $key . '="' . $value . '" ';
            }

        }

        return $out;
    }

endif;


if ( !function_exists( 'alcy_get_num_slug' ) ) :

    function alcy_get_num_slug( $num )
    {
        if ( $num <= 9 ) {
            return '0' . $num;
        }
        return $num;
    }

endif;