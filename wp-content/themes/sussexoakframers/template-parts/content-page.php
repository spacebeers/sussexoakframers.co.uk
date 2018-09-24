<article id="post-<?php the_ID(); ?>" <?php post_class("page"); ?>>
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>

	<section class="contents">
        <div class="columns">
            <?php the_content(); ?>

            <?php edit_post_link( __( 'Edit', 'sussexoakframers' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
        </div>
	</section>
</article>