<?php get_header();

$space_type = alcy_acf_option( 'space_type' , 'page' );
if ( $space_type === 'project' ) {
    $space_type = 'about';
}
?>
    <section id="post-<?php the_ID(); ?>" <?php post_class() ?> >
        <div class="post-full-content single-<?php echo esc_attr( $space_type ) ?> post-content">

            <?php if ( have_posts() ) :
                the_post();
                the_content();

                wp_link_pages( array(
                                   'before'      => '<div class="clearfix"></div><div class="new-line dsn-pagination pagination-pages text-center"><nav class="navigation pagination mt-0"><div class="nav-links"><span class="page-numbers">' . esc_html__( 'Pages' , 'alcy' ) . '</span></div>' ,
                                   'after'       => '</nav></div>' ,
                                   'link_before' => '<div class="nav-links">' ,
                                   'link_after'  => '</div>' ,
                                   'pagelink'    => '<span class="page-numbers">%</span>'
                               ) );

            else:
                get_template_part( 'template-parts/posts/content' , 'none' );
            endif; ?>
        </div>
        <?php
        if ( comments_open() || get_comments_number() ):
            comments_template();
        endif;

        get_sidebar();
        ?>
    </section>

<?php get_footer(); ?>