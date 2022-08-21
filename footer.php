        <!-- ========== Footer Section Start ========== -->
        <footer class="footer center" style="background-image: url('<?php echo $footer_bg_img = onepagestudio_get_option( 'footer-bg-img' ); ?>');">
            <div class="container">
                <div>
                    <a href="index.html" class="logo">
                    <img src="<?php echo $footer_logo = onepagestudio_get_option( 'footer-logo-upload' ); ?>" alt="">
                    </a>
                </div>
                <div class="footer-links">

                    <ul class="menu-list">
                        <?php dynamic_sidebar( 'footer' ); ?>
                    </ul>
                </div>
                <div class="copyright">
                    <p class="text"><?php echo $copyright = onepagestudio_get_option( 'copyright' ); ?></p>
                </div>
            </div>
        </footer>
        <!-- ========== Footer Section End ========== -->
        <?php wp_footer(); ?>
    </body>
</html>