<?php
get_header();
?>
<?php

if ( have_posts() ) {
    the_post();

    $dsn_projects = alcy_project_slug();
    if ( $dsn_projects === get_post_type() ) {
        get_template_part( 'template-parts/single' , 'alcy-projects' );
    } else {
        get_template_part( 'template-parts/single' , get_post_type() );
    }

}
?>
<?php
get_footer();