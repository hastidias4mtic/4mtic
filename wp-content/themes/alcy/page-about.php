<?php /* Template Name: About Template */ ?>

<?php
get_header();
if ( have_posts() ):
    the_post()
    ?>
    <section id="post-<?php the_ID(); ?>" <?php post_class() ?> >
        <div class="main-box col-large p-relative ">
            <header class="header-about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <h3><?php echo alcy_custom_title() ?></h3>
                        </div>
                    </div>
                </div>
            </header>

            <div class="page-body">
                <div class="page-section p-relative section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="box-sticky">
                                    <div class="nav-pills" data-dsn-grid="move-tabs">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="box-info post-full-content">

                                    <?php the_content(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php alcy_header_sticky( false , 'right' , 'dsn-demo-personal' ); ?>

    </section>

<?php endif;
get_footer(); ?>