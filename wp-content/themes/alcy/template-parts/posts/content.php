<?php $class = 'dsn-not-img' ?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ) ?> data-aos="fade-up">

    <?php
    if ( has_post_thumbnail() ):
        $class = 'dsn-has-img';
        ?>
        <a href="<?php echo esc_url( get_the_permalink() ) ?>"
           class="post-image cover-bg effect-ajax p-relative"
           data-image-srcs="<?php echo esc_url( get_the_post_thumbnail_url() ) ?>">
            <?php the_post_thumbnail(); ?>
            <div class="crop-left"></div>
            <div class="crop-right"></div>
        </a>
    <?php endif; ?>
    <div class="post-content <?php echo esc_attr( $class ); ?>">
        <ul class="post-meta">
            <li class="meta-date">
                <a href="<?php echo alcy_date_link() ?>" class="effect-ajax"
                   title="<?php the_time( 'F d, Y' ) ?>">
                    <span class="published"><?php echo esc_html( get_the_date() ) ?></span>
                </a>

            </li>
            <li class="meta-author">
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"
                   class="effect-ajax"
                   title="<?php the_author() ?>">
                    <?php echo alcy_author_full_name() ?>
                </a>
            </li>
        </ul>

        <h4>
            <a href="<?php the_permalink() ?>" class="effect-ajax">
                <?php the_title() ?>
                <?php if ( is_sticky() ) : ?>
                    <span class="sticky-post"><?php esc_html_e( 'Featured' , 'alcy' ); ?></span>
                <?php endif; ?>
            </a>
        </h4>
        <?php if ( !empty( str_split( get_the_excerpt() ) ) ): ?>
            <div class="">
                <?php the_excerpt(); ?>
            </div>
        <?php endif; ?>

        <a href="<?php the_permalink() ?>" class="read-more effect-ajax">
            <img src="<?php echo esc_url( ALCY_THEME_DIRECTORY . 'assets/img/blog_arrow-light.png' ) ?>"
                 alt="<?php esc_attr_e( 'Read More' , 'alcy' ) ?>" />
        </a>
    </div>
</article>

