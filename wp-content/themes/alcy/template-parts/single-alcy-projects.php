<div id="post-<?php the_ID(); ?>" <?php post_class() ?> >

    <div class="page-project">
        <?php
        if ( alcy_type_header() === 'sticky' ):
            ?>
            <div class="header-box">
                <div class="name-title">
                    <h3><?php echo alcy_custom_title() ?></h3>
                    <span><?php echo alcy_acf_option( 'subtitle' ) ?></span>
                </div>

                <h5 class="project-type">
                    <?php
                    if ( alcy_description_head() ):
                        echo alcy_description_head();
                    else:
                        echo alcy_post_category( ', ' , alcy_category_slug() );
                    endif;

                    ?>

                </h5>
            </div>
        <?php endif; ?>
        <div class="main-box p-relative ">
            <div class="page-work-content post-full-content single-project post-content">

                <?php
                if ( $info = alcy_list_info() ):
                    printf( '<div class="meta-box">%s</div>' , $info );
                endif;
                ?>
                <?php the_content() ?>
            </div>
        </div>

        <?php alcy_get_next_posts(); ?>
    </div>


</div>