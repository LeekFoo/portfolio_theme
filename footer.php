<footer id="footer" class="footer teal lighten-3">
  <div class="footer-inner">
    <div class="footer-nav-wrap">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => ''
        ));
    ?>
    <div id="contact" class="section valign-wrapper center-align">
			<div class="container">
				<h3>お問い合わせ</h3>
				<p class="email-wrapper">
                    何かございましたら下記メールアドレス、もしくはお問い合わせフォームからご連絡ください。<br>
					<span class="email-addr">negi.44193&nbsp;<i class="fas fa-at"></i>&nbsp;gmail.com</span>
				</p>
				<?php echo do_shortcode( '[contact-form-7 id="21" title="contact"]' ); ?>
			</div>
		</div>
        <div class="copyright">
            <small>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> All Rights Reserved.</small>
        </div>
    </div>
  </div><!--end footer-inner-->
</footer>
<div class="scroll_button">
    <a href="#"><i class="scroll_top fas fa-chevron-up"></i></a>
</div>
<?php wp_footer(); ?>
</body>
</html>
