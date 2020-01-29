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
				<h3>連絡先</h3>
				<p>
                    何かございましたらメールからご連絡ください。<br>
					negi.44193&nbsp;<i class="fas fa-at"></i>&nbsp;gmail.com
				</p>

<!--
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s12 m6">
								<input id="name" type="text" class="validate">
								<label for="name">お名前</label>
							</div>
                            <div class="input-field col s12 m6">
								<input id="email" type="email" class="validate">
								<label for="email">E-mail</label>
							</div>
						</div>
                        <div class="row">
							<div class="input-field col s12">
								<textarea id="content" class="materialize-textarea"></textarea>
								<label for="content">内容</label>
							</div>
						</div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="far fa-paper-plane"></i>
                        </button>
					</form>
				</div>
-->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</html>
