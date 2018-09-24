    </section>

    <footer class="site-footer">
        <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'sub_menu',
                'container'       => 'ul'
            )); ?>
        </nav>
        <div class="container">
            <div class="grid">
                <div class="column">
                    &copy; <?php echo date("Y"); ?> Sussex Oak Framers Ltd
                </div>
                <div class="column">
                    <?php dynamic_sidebar('footer-area-sidebar'); ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>