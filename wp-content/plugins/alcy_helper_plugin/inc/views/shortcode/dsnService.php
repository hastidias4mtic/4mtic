<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );


?>

<?php if ( alcy_is_about() ): ?>
    <div class="box-about-services">
        <h4><?php echo alcy_acf_option_array( $attr , 'title' ) ?></h4>
        <?php echo do_shortcode( $content ); ?>
    </div>


<?php else: ?>
    <section class="services">
        <div class="title-t">
            <h3><?php echo alcy_acf_option_array( $attr , 'title' ) ?></h3>
        </div>

        <div class="row">
            <?php echo do_shortcode( $content ); ?>
        </div>
    </section>

<?php endif; ?>
