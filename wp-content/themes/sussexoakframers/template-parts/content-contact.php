<article id="post-<?php the_ID(); ?>" <?php post_class("page"); ?>>
	<section class="container">
        <div class="constrainer main-content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php edit_post_link( __( 'Edit', 'sussexoakframers' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

            <ul class="contact-list">
                <li>
                    <a href="tel:<?php echo do_shortcode("[contact_phone]"); ?>">
                        <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Icon-Set" transform="translate(-256.000000, -307.000000)" fill="currentColor">
                                    <path d="M285.635,315.737 C283.935,318.967 280.16,323.939 277,327.218 C273.357,331.158 264.769,336.546 264.769,336.546 C264.106,336.894 262.266,336.92 261.76,336.415 L259.929,334.589 C259.551,333.957 259.381,333.225 259.929,332.763 L263.592,330.023 C264.212,329.604 264.917,329.519 265.423,330.023 L267.68,332.273 C268.211,331.9 276.689,326.344 281.405,318.695 L279.094,316.39 C278.588,315.886 278.674,315.182 279.094,314.563 L281.841,310.911 C282.347,310.236 283.167,310.406 283.672,310.911 L285.504,312.737 C286.222,313.411 286.014,314.982 285.635,315.737 L285.635,315.737 Z M287.073,311.433 L284.195,308.563 C283.401,307.77 282.112,307.77 281.317,308.563 L277,314.303 C276.341,315.274 276.206,316.38 277,317.173 L278.762,318.93 C277.456,320.68 275.888,322.588 274.123,324.348 C272.127,326.338 269.907,328.147 267.911,329.633 L266.208,327.936 C265.414,327.143 264.305,327.277 263.33,327.936 L257.574,332.241 C256.609,332.906 256.779,334.318 257.574,335.111 L260.452,337.98 C262.042,339.566 264.109,339.058 266.208,337.98 C266.208,337.98 272.561,334.424 278,329 C283.116,323.898 287.073,317.173 287.073,317.173 C287.898,314.91 288.663,313.018 287.073,311.433 L287.073,311.433 Z" id="Fill-179"></path>
                                </g>
                            </g>
                        </svg>
                        <?php echo do_shortcode("[contact_phone]"); ?>
                    </a>
                </li>
                <li>
                    <a href="tel:<?php echo do_shortcode("[contact_mobile]"); ?>">
                        <svg width="32px" height="32px" viewBox="0 0 23 32" version="1.1">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Icon-Set" transform="translate(-520.000000, -463.000000)" fill="currentColor">
                                    <path d="M531.5,492 C532.328,492 533,491.328 533,490.5 C533,489.672 532.328,489 531.5,489 C530.672,489 530,489.672 530,490.5 C530,491.328 530.672,492 531.5,492 L531.5,492 Z M541,468 L522,468 L522,467 C522,465.896 522.896,465 524,465 L539,465 C540.104,465 541,465.896 541,467 L541,468 L541,468 Z M522,470 L541,470 L541,486 L522,486 L522,470 Z M541,491 C541,492.104 540.104,493 539,493 L524,493 C522.896,493 522,492.104 522,491 L522,488 L541,488 L541,491 L541,491 Z M539,463 L524,463 C521.791,463 520,464.791 520,467 L520,491 C520,493.209 521.791,495 524,495 L539,495 C541.209,495 543,493.209 543,491 L543,467 C543,464.791 541.209,463 539,463 L539,463 Z" id="Fill-144"></path>
                                </g>
                            </g>
                        </svg>
                        <?php echo do_shortcode("[contact_mobile]"); ?>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?php echo do_shortcode("[contact_email]"); ?>">
                        <svg width="32px" height="32px" viewBox="0 0 32 24" version="1.1">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Icon-Set" transform="translate(-412.000000, -259.000000)" fill="currentColor">
                                    <path d="M442,279 C442,279.203 441.961,279.395 441.905,279.578 L433,270 L442,263 L442,279 L442,279 Z M415.556,280.946 L424.58,271.33 L428,273.915 L431.272,271.314 L440.444,280.946 C440.301,280.979 415.699,280.979 415.556,280.946 L415.556,280.946 Z M414,279 L414,263 L423,270 L414.095,279.578 C414.039,279.395 414,279.203 414,279 L414,279 Z M441,261 L428,271 L415,261 L441,261 L441,261 Z M440,259 L416,259 C413.791,259 412,260.791 412,263 L412,279 C412,281.209 413.791,283 416,283 L440,283 C442.209,283 444,281.209 444,279 L444,263 C444,260.791 442.209,259 440,259 L440,259 Z" id="Fill-186"></path>
                                </g>
                            </g>
                        </svg>
                        <?php echo do_shortcode("[contact_email]"); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo do_shortcode("[contact_facebook]"); ?>" target="_black">
                        <svg width="32px" height="32px" viewBox="0 0 32 32">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group" transform="translate(-1.000000, 0.000000)" fill="currentColor">
                                    <path d="M31.6667,0 L2.3337,0 C1.5967,0 0.9997,0.597 0.9997,1.333 L0.9997,30.667 C0.9997,31.403 1.5967,32 2.3337,32 L17.9997,32 L17.9997,20 L13.9997,20 L13.9997,15 L17.9997,15 L17.9997,11 C17.9997,6.867 20.6167,4.833 24.3037,4.833 C26.0697,4.833 27.5877,4.965 28.0297,5.023 L28.0297,9.343 L25.4727,9.344 C23.4677,9.344 22.9997,10.297 22.9997,11.695 L22.9997,15 L27.9997,15 L26.9997,20 L22.9997,20 L23.0797,32 L31.6667,32 C32.4027,32 32.9997,31.403 32.9997,30.667 L32.9997,1.333 C32.9997,0.597 32.4027,0 31.6667,0" id="Fill-3"></path>
                                </g>
                            </g>
                        </svg>
                        Find us on Facebook
                    </a>
                </li>
                <li>
                    <a href="<?php echo do_shortcode("[contact_instagram]"); ?>" target="_black">
                        <svg version="1.1" id="Layer_1" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <path fill="currentColor" d="M28.2,0H3.8C1.7,0,0,1.7,0,3.8v24.4C0,30.3,1.7,32,3.8,32h24.4c2.1,0,3.8-1.7,3.8-3.8V3.8
                            C32,1.7,30.3,0,28.2,0z M24,4h3c0.6,0,1,0.4,1,1v3c0,0.6-0.4,1-1,1h-3c-0.6,0-1-0.4-1-1V5C23,4.4,23.4,4,24,4z M16,9.9
                            c3.4,0,6.2,2.7,6.2,6.1c0,3.4-2.8,6.1-6.2,6.1c-3.4,0-6.2-2.7-6.2-6.1C9.9,12.6,12.6,9.9,16,9.9z M28,29H4c-0.6,0-1-0.4-1-1V13h4
                            c-0.5,0.8-0.7,2.1-0.7,3c0,5.4,4.4,9.7,9.7,9.7c5.4,0,9.7-4.4,9.7-9.7c0-0.9-0.1-2.3-0.8-3h4v15C29,28.6,28.6,29,28,29z"/>
                        </svg>
                        Follow us on Instagram
                    </a>
                </li>
                <li class="text-left">
                    <?php echo do_shortcode("[contact_address]"); ?>
                </li>
            </ul>

        </div>

        <div class="gallery">
            <?php

                $images = get_field('gallery');

                if( $images ): ?>
                    <ul>
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>" data-lightbox="roadtrip">
                                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                </a>
                                <p><?php echo $image['caption']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
        </div>
	</section>
</article>