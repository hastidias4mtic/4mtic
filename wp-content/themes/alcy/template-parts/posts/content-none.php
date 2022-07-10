<section class="dsn-no-results dsn-no-results section-padding text-center">
    <header class="mb-20">
        <h1><?php esc_html_e( 'Nothing Found' , 'alcy' ); ?></h1>
    </header>

    <div class="container sidebar-single">

        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p class="mb-20"><?php printf( esc_html__( 'Ready to publish your first post? %1$s.' , 'alcy' ) , '<a href="' . esc_url( admin_url( 'post-new.php' ) ) . '">' . esc_html__( 'Get started here' , 'alcy' ) . '</a>' ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p class="mb-20"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' , 'alcy' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p class="mb-20"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.' , 'alcy' ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>

    </div>
</section>