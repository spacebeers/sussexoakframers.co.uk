<article id="post-<?php the_ID(); ?>" <?php post_class("home-page"); ?>>
    <div class="hero">
        <div class="hero-content">
            <h1><?php the_title(); ?></h1>
            <p><?php the_field('sub_title'); ?></p>
        </div>
        <div class="hero-slider">
            <?php
                $images = get_field('gallery');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <div class="slide">
                            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </div>


	<section class="container">
        <div class="constrainer main-content">

            <?php the_content(); ?>
            <?php edit_post_link( __( 'Edit', 'sussexoakframers' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
        </div>
	</section>
</article>