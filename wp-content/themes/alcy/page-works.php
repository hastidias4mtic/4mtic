<?php /* Template Name: Works Template */ ?>

<?php
$numPage     = get_option( 'posts_per_page' );
$CurrentPage = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$dsn_projects = alcy_project_slug();

$myposts = new WP_Query( array(
                             'paged'          => $CurrentPage ,
                             'posts_per_page' => $numPage ,
                             'post_type'      => $dsn_projects
                         ) );

?>

<?php get_header(); ?>


    <div class="page-work">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="box-sticky box-work">
                        <div class="nav-pills filtering" data-dsn-grid="move-tabs">


                            <?php
                            $terms = get_terms( alcy_category_slug() );
                            if ( !empty( $terms ) ): ?>
                                <div class="title-tab dsn-active" data-filter='*'>
                                    <a href="#"></a>
                                    <h4><?php esc_attr_e( 'All' , 'alcy' ) ?></h4>
                                    <div class="number"><?php echo esc_html( alcy_get_num_slug( count( $terms ) ) ) ?></div>
                                </div>
                                <?php foreach ( $terms as $term ): ?>

                                    <div class="title-tab" data-filter='.<?php echo esc_attr( $term->slug ); ?>'>
                                        <a href="#"></a>
                                        <h4><?php echo esc_html( $term->name ); ?></h4>
                                        <div class="number"><?php echo esc_html( alcy_get_num_slug( $term->count ) ); ?></div>
                                    </div>
                                <?php endforeach; endif; ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <ul class="project-lest">
                        <?php if ( $myposts->have_posts() ) :
                            $index = 1;
                            while ( $myposts->have_posts() ) :
                                $myposts->the_post();
                                set_query_var( 'num' , $index );
                                $index++;
                                get_template_part( 'template-parts/posts/content' , 'work' );
                            endwhile;
                        else:
                            get_template_part( 'template-parts/posts/content' , 'none' );
                        endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php wp_reset_postdata();
get_footer(); ?>