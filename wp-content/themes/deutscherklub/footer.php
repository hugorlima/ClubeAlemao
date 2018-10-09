		<footer>
			<div class="highlight">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-4">
							<img src="<?php bloginfo('url') ?>/wp-content/uploads/2018/08/logo-footer.png" alt="Logo Clube Alemão Rodapé">
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-4">
							<address>Estrada do Encanamento, 216, Parnamirim • 52.060-210 • Recife • Brasil</address>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-2">
							<div class="info">
								<p>ola@clubelaemao.com.br</p>
								<p>81 3441-0044</p>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-2">
							<ul class="social">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-5">
						<p class="rights">&copy; <?php echo get_the_date('Y'); ?> | Deutscher Klub Pernambuco. Todos os direitos reservados.</p>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-5 offset-lg-2">
						<div class="wrap-newsletter">
							<p>receba nossa newsletter</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
		<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/custom.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script>
			jQuery(document).ready(function(){
				jQuery('.news-slider').bxSlider({
					pager: false,
					slideWidth: 390,
					minSlides: 2,
					maxSlides: 2,
					slideSelector: "slide"
				});
			});
		</script>
    </body>
</html>