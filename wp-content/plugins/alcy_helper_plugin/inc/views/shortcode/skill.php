<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );
$title   = $attr[ 'title' ];
$items   = $attr[ 'items' ];


?>


<?php printf( '<h4>%s</h4>' , $title ) ?>

<div class="box-about-work">
    <?php foreach ( $items as $item ): ?>
        <div class="skills-item">
            <h5><?php echo alcy_acf_option_array( $item , 'title' ) ?></h5>
            <div class="bar">
                <span class="fill" data-width="<?php echo alcy_acf_option_array( $item , 'num' ) ?>%"></span>
            </div>
            <div class="tip"></div>
        </div>
    <?php endforeach; ?>
</div>