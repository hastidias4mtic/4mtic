<?php

if ( post_password_required() ):
    return;
endif;

$is_closed = !comments_open() && get_comments_number() && post_type_supports( get_post_type() , 'comments' );
$classes   = 'dsn-comment-open';
if ( $is_closed ):
    $classes = 'dsn-comment-close';
endif;

?>

<div class="comment-btn">
    <div class="contact-btn-txt title-style"
         data-hover="<?php esc_attr_e( 'Comments' , 'alcy' ); ?>"><?php esc_html_e( 'Comments' , 'alcy' ) ?></div>
</div>

<div class="comment-modal">
    <div class="close-wind" data-dsn-close=".comment-modal"></div>
    <div class="comment-modal-container">


        <?php if ( have_comments() ) :

            ?>
            <div class="header-box">
                <div class="name-title">
                    <?php echo alcy_post_count_comment( false ) ?>
                </div>
            </div>
            <?php

            $comment_args = array(
                'callback' => 'alcy_custom_comment' ,
                'type'     => 'all' ,
            );

            echo '<div class="dsn-list-comment ' . esc_attr( $classes ) . '">';
            wp_list_comments( $comment_args );
            echo '</div>';
            alcy_comment_nav();
        endif;
        /* If comments are closed and there are comments, let's leave a little note, shall we? */
        if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type() , 'comments' ) ) :
            printf( '<div class="no-comments">%s</div>' , esc_html__( 'Comment Are Closed' , 'alcy' ) );
        endif;

        $commenter = wp_get_current_commenter();

        $rowstart    = ' <div class="input-row">';
        $rowend      = '</div>';
        $autor       = '<input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Name' , 'alcy' ) . '"  value="' . esc_attr( $commenter[ 'comment_author' ] ) . '" maxlength="245" required>';
        $email       = '<input id="email"  name="email" type="email" placeholder="' . esc_attr__( 'E-mail' , 'alcy' ) . '" value="' . esc_attr( $commenter[ 'comment_author_email' ] ) . '" maxlength="245" required>';
        $textComment = '<textarea id="comment" name="comment" placeholder="' . esc_attr__( 'Comment' , 'alcy' ) . '" required="required"></textarea>';


        $fields = array( 'author' => $rowstart . $autor . $rowend , 'email' => $rowstart . $email . $rowend );

        $commenter_args_form = array(
            'class_form'           => '' ,
            'label_submit'         => esc_html__( 'Post Comment' , 'alcy' ) ,
            'title_reply'          => esc_html__( 'Leave A Comment' , 'alcy' ) ,
            'title_reply_before'   => '<div class="header-box"><div class="name-title"><h3 class="title-style">' ,
            'title_reply_after'    => '</h3></div></div>' ,
            'cancel_reply_before'  => '' ,
            'cancel_reply_after'   => '' ,
            'title_reply_to'       => esc_html__( 'Leave a reply to' , 'alcy' ) . ' %s' ,
            'cancel_reply_link'    => '<span class="cancel-comment">' . esc_html__( 'Cancel Reply' , 'alcy' ) . '</span>' ,
            'class_submit'         => 'custom-btn' ,
            'fields'               => $fields ,
            'comment_field'        => $rowstart . $textComment . $rowend ,
            'comment_notes_before' => '' ,
            'comment_notes_after'  => '' ,
            'submit_field'         => '<div class="submit-div" data-parallex> %1$s %2$s</div>' ,
            'format'               => 'xhtml' ,
        );
        ?>

        <div class="clearfix"></div>

        <div class="comments-form">
            <?php comment_form( $commenter_args_form ) ?>
        </div>

    </div>
</div>