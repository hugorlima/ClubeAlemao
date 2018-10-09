<?php

	if (!function_exists("pretty_dump")) {
	    function pretty_dump($s, $return=false) {
	        $x = "<pre>";
	        $x .= print_r($s, 1);
	        $x .= "</pre>";
	        if ($return) return $x;
	        else print $x;
	    }
	}

	function my_excerpt_length( $length ) {
	    return 20;
	}
	add_filter( 'excerpt_length', 'my_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
	    return '[...]';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// THUMBNAILS
	add_theme_support( 'post-thumbnails' );

	// add_image_size( 'resumo-rodape', 177, 177, true );
	// add_image_size( 'destaque-noticias', 880, 317, true );
	// add_image_size( 'banner-home', 280, 315, true );
	// add_image_size( 'noticias', 280, 208, true );
	// add_image_size( 'noticia-grande', 580, 209, true );
	// add_image_size( 'video', 580, 417, true );
	
	// REGISTERING NAV MENUS
	register_nav_menus(
	    array(
	        'menu-principal' => 'Menu Principal',
	        'menu-rodape' => 'Menu Rodapé'
	    )
	);

	function get_cat_slug($cat_id) {
		$cat_id = (int) $cat_id;
		$category = &get_category($cat_id);
		return $category->slug;
	}

	if ( function_exists('register_sidebar') )
	register_sidebar();

	function my_custom_sidebar() {
	    register_sidebar(
	        array (
	            'name' => __( 'Previsão do tempo', 'clube-alemao' ),
	            'id' => 'custom-side-bar',
	            'description' => __( 'Previsão do tempo', 'clube-alemao' ),
	            'before_widget' => '<div class="widget-content">',
	            'after_widget' => "</div>",
	            'before_title' => '<h3 class="widget-title">',
	            'after_title' => '</h3>',
	        )
	    );
	}
	add_action( 'widgets_init', 'my_custom_sidebar' );

	// Vídeo Youtube

	function video_add_meta_box() {
	    add_meta_box(
	        'video_sectionid',
	        __( 'URL Vídeo do Youtube', 'video_textdomain' ),
	        'video_meta_box_callback',
	        'post'
	    );
	}
	add_action( 'add_meta_boxes', 'video_add_meta_box' );

	function video_meta_box_callback( $post ) {

	    wp_nonce_field( 'video_meta_box', 'video_meta_box_nonce' );

	    $video_value = get_post_meta( $post->ID, '_my_meta_video_value_key', true );

	    // icorp_remove_metafield('video-youtube');

	    echo '<label for="video_new_field">';
	    _e( 'Insira a URL do vídeo: &nbsp;', 'video_textdomain' );
	    echo '</label> ';
	    echo '<input type="text" id="video_new_field" name="video_new_field" value="' . esc_attr( $video_value ) . '" size="25" />';
	}

	function save_meta_box_data( $post_id ) {

	    if ( ! isset( $_POST['video_meta_box_nonce'] ) && ! isset( $_POST['jornal_meta_box_nonce'] ) ) {
	        return;
	    }

	    if ( ! wp_verify_nonce( $_POST['video_meta_box_nonce'], 'video_meta_box' ) && ! wp_verify_nonce( $_POST['jornal_meta_box_nonce'], 'jornal_meta_box' )) {
	        return;
	    }


	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
	        return;
	    }

	    if ( isset( $_POST['post_type'] ) && $_POST['post_type'] == 'post' ) {

	        if ( ! current_user_can( 'edit_post', $post_id ) ) {

	            return;

	        } else {

	            if ( !empty( $_POST['video_new_field'] ) ) {

	                $my_data = sanitize_text_field( $_POST['video_new_field'] );
	                update_post_meta( $post_id, '_my_meta_video_value_key', $my_data );

	            } else {

	                delete_post_meta( $post_id, '_my_meta_video_value_key');

	            }


	            if ( !empty( $_POST['jornal_new_field'] ) ) {

	                $my_data = sanitize_text_field( $_POST['jornal_new_field'] );
	                update_post_meta( $post_id, '_my_meta_jornal_value_key', $my_data );

	            } else {

	                delete_post_meta( $post_id, '_my_meta_jornal_value_key');

	            }
	        }
	    }

	}
	add_action( 'save_post', 'save_meta_box_data' );


	function icorp_get_video_id($post_ID = null) {

	    global $post;

	    if($post_ID == null):

	        $post_ID = $post->ID;

	    endif;

	    $urlYoutube = get_post_meta($post_ID, '_my_meta_video_value_key', true);

	    if ($urlYoutube):

	        $replace = array(
	            "https://www.youtube.com/watch?v=",
	            "http://www.youtube.com/watch?v=",
	        );

	        $idVideo = str_replace($replace, "", $urlYoutube);

	        if (strpos($idVideo, "&")):

	            $idVideo = substr($idVideo, 0, strpos($idVideo, "&") );

	        endif;

	        return $idVideo;

	    else:

	        return false;

	    endif;
	}

	// Scripts
	include('func-scripts.php');

	// Templates
	include('func-templates.php');