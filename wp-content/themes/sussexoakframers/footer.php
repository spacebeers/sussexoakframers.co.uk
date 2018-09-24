        </section>

        <footer class="site-footer">
            <div class="row">
                <div class="col-sm-3 hidden-xs">
                    <?php dynamic_sidebar('footer-area-one-sidebar'); ?>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <?php dynamic_sidebar('footer-area-two-sidebar'); ?>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <?php dynamic_sidebar('footer-area-three-sidebar'); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar('footer-area-four-sidebar'); ?>
                </div>
            </div>
            <div class="information-area">
                <?php dynamic_sidebar('footer-information-area-sidebar'); ?>
            </div>
            <div class="row sub-footer">
                <div class="col-sm-6">
                    <?php wp_nav_menu(array(
                            'theme_location' => 'sub_menu',
                            'container'       => 'ul'
                    )); ?>
                </div>
                <div class="col-sm-6 copy">
                    &copy; <?php echo date("Y"); ?> Mortgage Studio All Rights Reserved
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115325990-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-115325990-1');
    </script>
</body>
</html>