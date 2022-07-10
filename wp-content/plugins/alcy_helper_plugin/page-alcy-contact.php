<?php /* Template Name: Lida Contact Template */ ?>
<?php get_header(); ?>


    <div class="contact-w">
        <?php
        if ( have_posts() ): the_post();
            echo alcy_view( 'shortcode/contactModel' , array( 'attr' => array( 'post_id' => get_the_ID() ) , 'content' => '' ) );
        endif;
        ?>
    </div>

<?php get_footer() ?>