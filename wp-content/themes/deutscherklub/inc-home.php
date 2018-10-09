<?php if (is_home() || is_front_page()) : ?>
	<?php echo do_shortcode('[rev_slider alias="home"]'); ?>
	<section class="section_the-club">
		<div class="wrap-section-title type-a">
			<h2>Clube Alemão</h2>
			<h3>Sinta-se em casa.</h3>
			<div class="weather">
				<h6>Previsão do tempo</h6>
				<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
				    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-8">
					<div class="wrap-culinary row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-6">
							<img class="dish-img" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/exemplo-culinaria01.png" alt="">
							<div class="mask-circle">&nbsp;</div>
							<div class="chef">
								<img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/exemplo-chef.png" alt="">
							</div>
							<p class="dish-info">prato misto com linguiça Nürnberger Bavaria, linguiça picante e almôndegas</p>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-6">
							<div class="wrap-section-title type-b">
								<h2>O melhor da cozinha alemã e brasileira, você tem aqui.</h2>
								<span>&nbsp;</span>
							</div>
							<p class="text">Aqui no Clube, temos o melhor da gastronomia alemã, com o cardápio assinando pelo premiado chef, fulano de tal, E ainda temos uma enorme variedade da culinária brasileira.</p>
							<a href="#" class="more">+ conheça nossos cardápios</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-4">
					<div class="wrap-section-title type-c">
						<h2>Alemão news</h2>
					</div>
					<ul class="list_news">
						<li>
							<a href="#">
								<p class="date">22/06/2018</p>
								<p class="title">Arraial do Alemão</p>
								<p class="excerpt">Non nonoo nonono non oo no  onn n on ono n nno no nonononono o no no Non nonoo nonono non oo no  onn n on ono n nno no nonononono o no no.</p>
							</a>
						</li>
						<li>
							<a href="#">
								<p class="date">22/06/2018</p>
								<p class="title">reforma da quadra de tênis é concluída e aprovada por todos.</p>
								<p class="excerpt">Non nonoo nonono non oo no  onn n on ono n nno no nonononono o no no Non nonoo nonono non oo no  onn n on ono n nno no nonononono o no no.</p>
							</a>
						</li>
					</ul>
					<a href="#" class="see_more">Veja todas as novidades</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section_highlights">
		<div class="col-12 col-sm-8 col-md-8 col-lg-4">
			<div class="wrap-section-title type-d">
				<h2>Destaques</h2>
			</div>
		</div>
		<?php echo do_shortcode('[rev_slider alias="highlights-slider-home"]'); ?>
	</section>
	<section class="section_slider-services">
		<div class="col-12 col-sm-6 col-md-4 col-lg-4">
			<div class="wrap-section-title type-h">
				<h2>Serviços</h2>
			</div>
		</div>
		<?php echo do_shortcode('[rev_slider alias="services-home"]'); ?>
	</section>
	<section class="section_next-events">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4">
				<div class="wrap-section-title type-f">
					<h2>Próximos<br>Eventos</h2>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-8">
				<ul class="events_list">
					<li>
						<a href="#">
							<p class="event_date"><span class="date"><i class="far fa-calendar-alt"></i> 22/05 - sex</span> <span class="hour"><i class="far fa-clock"></i> 22h</span></p>
							<p class="title">Projeto Clube de Salão com <strong>Maestro Spok e Gafieira de Salão</strong></p>
						</a>
					</li>
					<li>
						<a href="#">
							<p class="event_date"><span class="date"><i class="far fa-calendar-alt"></i> 22/05 - sex</span> <span class="hour"><i class="far fa-clock"></i> 22h</span></p>
							<p class="title">tributo ao downtown <strong>downtown band, dick e os vigaristas e bola gato</strong></p>
						</a>
					</li>
					<li>
						<a href="#">
							<p class="event_date"><span class="date"><i class="far fa-calendar-alt"></i> 22/05 - sex</span> <span class="hour"><i class="far fa-clock"></i> 22h</span></p>
							<p class="title">tradição e cultura alemã - bate papo com mediação do nosso chef <strong>Andreas schaller</strong></p>
						</a>
					</li>
					<a href="#" class="link_more"><i class="fas fa-plus"></i> <span>Veja todos os eventos</span></a>
				</ul>
			</div>
		</div>
	</section>
	<section class="section_slider-photos">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<div class="wrap-section-title type-g">
				<h2>#ClubeAlemão</h2>
				<h3>Quer ver a sua foto aqui? Publique com a nossa hashtag</h3>
			</div>
		</div>
		<?php echo do_shortcode('[rev_slider alias="photos-slider-home"]'); ?>
	</section>
<?php endif; ?>