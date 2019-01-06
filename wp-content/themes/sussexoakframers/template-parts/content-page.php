<article id="post-<?php the_ID(); ?>" <?php post_class("page"); ?>>
	<section class="container">
        <div class="constrainer main-content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php edit_post_link( __( 'Edit', 'sussexoakframers' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
        </div>

        <div class="gallery">
            <?php

                $images = get_field('gallery');

                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>" data-lightbox="gallery" title="<?php echo $image['title']; ?>">
                                    <?php if ($image['description']): ?>
                                        <span class="hover">
                                            <span class="hover-content">
                                                <?php echo $image['description']; ?>
                                            </span>
                                        </span>
                                    <?php endif; ?>
                                    <img class="lazy" data-src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
        </div>
	</section>
</article>