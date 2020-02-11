    </section>

    <footer class="site-footer">
        <nav>
            <div class="container">
                <?php wp_nav_menu(array(
                    'theme_location'  => 'footer_menu',
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

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="662324390521292"
    theme_color="#67b868">
    </div>
    <?php wp_footer(); ?>
</body>
</html>