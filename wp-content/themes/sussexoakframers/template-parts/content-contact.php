<article id="post-<?php the_ID(); ?>" <?php post_class("page"); ?>>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>

	<section class="contents">
        <div class="row">
            <div class="col-md-4">
                <?php the_content(); ?>

                <?php edit_post_link( __( 'Edit', 'mortgagestudio' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
            </div>
            <div class="col-md-8">
                <?php echo do_shortcode(get_field('form_shortcode')); ?>
            </div>
        </div>
	</section>
</article>