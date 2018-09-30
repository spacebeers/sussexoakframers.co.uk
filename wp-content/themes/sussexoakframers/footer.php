    </section>

    <footer class="site-footer">
        <nav>
            <div class="container">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'main_menu',
                    'container'       => 'ul',
                    'depth'           => 1
                )); ?>
            </div>
        </nav>
        <div class="container">
            <div class="grid">
                <div class="column text-left">
                    &copy; <?php echo date("Y"); ?> Sussex Oak Framers Ltd
                </div>
                <div class="column text-right">
                    Website by <a href="//atomichorse.agency" target="_blank">Atomic Horse</a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>