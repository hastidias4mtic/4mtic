<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );
$title   = $attr[ 'name' ];
$img     = $attr[ 'id_img' ];

?>


<?php if ( alcy_is_about() ): ?>
    <div class="logo-item">
        <a href="<?php echo esc_url( $content ) ?>" target="_blank" rel="nofollow">
            <?php echo wp_get_attachment_image( $img , 'full' ) ?>
        </a>
    </div>

<?php else: ?>

    <li>
        <a href="<?php echo esc_url( $content ) ?>" target="_blank" rel="nofollow">
            <?php echo wp_get_attachment_image( $img , 'full' ) ?>

        </a>
    </li>

<?php endif; ?>

