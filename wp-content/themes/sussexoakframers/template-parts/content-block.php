<?php
    $banner_image_primary = get_field('banner_image_primary');
    $banner_image_secondary = get_field('banner_image_secondary');
    $testimonial_image = get_field('testimonial_image');
    $testimonials_link = get_theme_mod('mortgagestudio_pages_testimonials_link');
    $blocks = get_field('blocks');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class("page home_page"); ?>>
    <section class="home-banner" role="presentation">
        <div class="banner-wide banner-image" style="background-image: url(<?php echo $banner_image_primary['url']; ?>);"></div>
        <div class="banner-small banner-image"  style="background-image: url(<?php echo $banner_image_secondary['url']; ?>);"></div>
    </section>

    <section class="home-banner blocks">
        <div class="banner-wide">
            <div class="block-list">
                <?php if( have_rows('blocks') ): ?>
                    <?php while ( have_rows('blocks') ) : the_row(); ?>
                        <?php $post_object = get_sub_field('block'); ?>
                        <?php if( $post_object ): ?>
                            <?php $post = $post_object; setup_postdata( $post ); ?>
                            <div class="block">
                                <div class="block-content">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="block-text">
                                        <div>
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="on-link">Find out more</a>
                                    </div>
                                </div>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="banner-small banner-text">
            <?php the_content(); ?>

            <?php edit_post_link( __( 'Edit', 'mortgagestudio' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
        </div>
    </section>
</article>