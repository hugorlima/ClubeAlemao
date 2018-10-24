<?php get_header(); ?>
<?php

	if(is_home() || is_front_page()):

		get_template_part('inc', 'home');

	elseif(is_page('painel-do-usuario')):

		the_post();
		
		get_template_part('content', 'dashboard');

	elseif(is_page()):

		the_post();
		
		get_template_part('inc', 'page');

	elseif(is_single()):

		the_post();
		
		get_template_part('inc', 'single');

	elseif(is_archive() || is_category() || is_search()):

		the_post();
		
		get_template_part('inc', 'common');

	endif;

?>
<?php get_footer(); ?>