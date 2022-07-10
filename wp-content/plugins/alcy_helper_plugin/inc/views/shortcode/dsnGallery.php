<?php
$attr = get_query_var( 'attr' );
$content = get_query_var( 'content' );
$ids = explode( ',' , $attr[ 'ids' ] );


?>


<?php
if ( count( $ids ) ): ?>
    <div id="gallery-portfolio">
        <?php foreach ( $ids as $id ): if ( $id && $img = wp_get_attachment_image_src( $id , 'full' ) ): ?>
            <a class="link-pop" href="<?php echo esc_url( $img[ 0 ] ) ?>"
               data-source="<?php echo esc_url( $img[ 0 ] ) ?>">
                <?php echo wp_get_attachment_image( $id , 'full' ) ?>
            </a>
        <?php endif; endforeach; ?>
        
    </div>
<?php endif; ?>


