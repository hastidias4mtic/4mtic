<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );
$title   = $attr[ 'title' ];
$items   = $attr[ 'items' ];


?>


<?php printf( '<h4>%s</h4>' , $title ) ?>

<div class="box-about-work">
    <ul class="tabl-list">

        <?php foreach ( $items as $item ): ?>
            <li class="table-list-item">
                <div class="td item-date"><?php echo alcy_acf_option_array( $item , 'year' ) ?></div>
                <div class="td">
                    <?php echo alcy_acf_option_array( $item , 'description' ) ?>
                </div>
            </li>
        <?php endforeach; ?>

    </ul>
</div>