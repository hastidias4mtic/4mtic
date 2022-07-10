<?php
$attr    = get_query_var( 'attr' );
$content = get_query_var( 'content' );

$id_post = alcy_acf_option_array( $attr , 'post_id' , 0 );


?>


<div class="contact-container">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-box">
                <div class="name-title">
                    <h3><?php echo alcy_custom_title( '' , $id_post ) ?></h3>
                    <h5 class="project-type"><?php echo alcy_acf_option( 'subtitle' , false , $id_post ) ?></h5>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <?php
            $address = alcy_acf_option( 'address' , false , $id_post );
            $mobile  = alcy_acf_option( 'mobile' , false , $id_post );
            $email   = sanitize_email( alcy_acf_option( 'e-mail' , false , $id_post ) );
            ?>
            <div class="contact-details">
                <div class="title-box">
                </div>
                <?php if ( $email ): ?>
                    <div class="details-item">
                        <i class="fa fa-paper-plane"></i>
                        <h5><?php esc_html_e( 'E-mail' , 'alcy' ) ?></h5>
                        <p>
                            <a class="c-button c-button--text c-button--bordered c-button--small"
                               href="mailto:<?php echo antispambot( $email , 1 ) ?>"
                               rel="nofollow"><?php echo antispambot( $email ) ?></a>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if ( $address ): ?>
                    <div class="details-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h5><?php esc_html_e( 'Address' , 'alcy' ) ?></h5>
                        <p>
                            <?php echo esc_html( $address ) ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if ( $mobile ): ?>
                    <div class="details-item">
                        <i class="fas fa-phone-volume"></i>
                        <h5><?php esc_html_e( 'Phone' , 'alcy' ) ?></h5>
                        <p>
                            <?php echo esc_html( $mobile ) ?>
                        </p>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <div class="col-lg-8">
            <div class="form-box">
                <?php
                echo alcy_get_content( $id_post );
                ?>
            </div>
        </div>
    </div>
</div>