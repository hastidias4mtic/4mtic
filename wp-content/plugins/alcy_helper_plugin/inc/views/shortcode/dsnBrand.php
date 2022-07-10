<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );


?>

<?php if ( alcy_is_about() ): ?>
    <div class="box-about-client">
        <h4><?php echo alcy_acf_option_array( $attr , 'title' ) ?></h4>
        <div class="box-logo">
            <?php echo do_shortcode( $content ); ?>
        </div>
    </div>

<?php else: ?>
    <div class="clients-list">
        <div class="title-t">
            <h3><?php echo alcy_acf_option_array( $attr , 'title' ) ?></h3>
        </div>
        <ul>
            <?php echo do_shortcode( $content ); ?>
        </ul>
    </div>

<?php endif; ?>
