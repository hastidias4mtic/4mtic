<section id="post-<?php the_ID(); ?>" <?php post_class() ?> >
    <div class="post-full-content single-post post-content pb-80">
        <?php
        the_content();

        wp_link_pages( array(
                           'before'      => '<div class="dsn-pagination"><nav class="navigation pagination"><div class="nav-links"><span class="page-numbers">' . esc_html__( 'Pages' , 'alcy' ) . '</span></div>' ,
                           'after'       => '</nav></div>' ,
                           'link_before' => '<div class="nav-links">' ,
                           'link_after'  => '</div>' ,
                           'pagelink'    => '<span class="page-numbers">%</span>'
                       ) );
        ?>
    </div>

    <div class="post-content-bottom">

        <?php
        echo alcy_post_tag( '' );
        if ( function_exists( 'alcy_share_links' ) ) :
            echo alcy_share_links();
        endif;
        alcy_get_next_posts();
        ?>

    </div>


    <?php
    if ( comments_open() || get_comments_number() ):
        comments_template();
    endif; ?>


</section>


<?php
get_sidebar();