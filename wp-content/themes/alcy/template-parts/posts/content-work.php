<?php
$index = get_query_var( 'num' );
?>
<li id="post-<?php the_ID(); ?>" <?php post_class( array( alcy_post_category_slug( ' ', alcy_category_slug() ) ) ) ?>>
    <div class="name-title">
        <h3><?php the_title() ?></h3>
        <span><?php echo esc_html( alcy_get_num_slug( $index ) ) ?></span>
    </div>
    <a href="<?php echo esc_url( get_the_permalink() ) ?>" class="effect-ajax work-effect" data-dsn-ajax="work"></a>
    <?php
    if ( has_post_thumbnail() ):
        the_post_thumbnail();
    endif;
    ?>
    <div class="line"></div>
    <div class="project-enter">
        <a href="#"><?php esc_html_e( 'Veiw Project', 'alcy' ) ?></a>
    </div>
</li>

