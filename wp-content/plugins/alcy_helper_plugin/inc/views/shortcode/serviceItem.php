<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );

?>


<?php if ( alcy_is_about() ): ?>
    <div class="services-item">
        <div class="block">
            <?php echo alcy_acf_option_array( $attr , 'icon' ); ?>
            <div class="content">
                <h5><?php echo alcy_acf_option_array( $attr , 'title' ); ?></h5>
                <p>
                    <?php echo alcy_acf_option_array( $attr , 'description' ); ?>
                </p>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="col-lg-4 col-md-6">
        <div class="services-item">
            <h4 class="subtitle">
                <?php echo alcy_acf_option_array( $attr , 'icon' ); ?>
                <?php echo alcy_acf_option_array( $attr , 'title' ); ?>
            </h4>
            <p class="services-text"> <?php echo alcy_acf_option_array( $attr , 'description' ); ?> </p>
        </div>
    </div>
<?php endif; ?>


