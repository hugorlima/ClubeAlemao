<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	/*
	// URL YOUTUBE
	$meta_boxes['url_redirecionamento'] = array(
		'id'         => 'url_redirecionamento',
		'title'      => __( 'URL Redirecionamento', 'cmb' ),
		'pages'      => array( 'post', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name'       => __( 'URL', 'cmb' ),
				'id'         => $prefix . 'url_redirecionamento',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb',
			),
		),
	);
	
	// URL FACEBOOK
	$meta_boxes['nome_fotografo'] = array(
		'id'         => 'nome_fotografo',
		'title'      => __( 'Nome do Fotógrafo', 'cmb' ),
		'pages'      => array( 'page', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name'       => __( 'Nome', 'cmb' ),
				'id'         => $prefix . 'nome_fotografo',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb',
			),
		),
	);

	// URL INSTAGRAM
	$meta_boxes['url_instagram'] = array(
		'id'         => 'url_instagram',
		'title'      => __( 'URL do Instagram', 'cmb' ),
		'pages'      => array( 'post', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name'       => __( 'URL', 'cmb' ),
				'id'         => $prefix . 'url_instagram',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb',
			),
		),
	);

	$meta_boxes['contactzap'] = array(
		'id'         => 'contactzap',
		'title'      => __( 'Informações Contactzap', 'cmb' ),
		'pages'      => array( 'post', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name'       => __( 'Número do Telegram', 'cmb' ),
				'id'         => $prefix . 'nro_telegram',
				'type'       => 'text',
				'show_on_cb' => 'cmb_test_text_show_on_cb',
			),
			array(
				'id'          => $prefix . 'repeat_group',
				'type'        => 'group',
				'options'     => array(
					'group_title'   => __( 'Whatsapp Número {#}', 'cmb' ), // {#} gets replaced by row number
					'add_button'    => __( 'Adicionar', 'cmb' ),
					'remove_button' => __( 'Remover', 'cmb' ),
					'sortable'      => true, // beta
				),
				// Fields array works the same, except id's only need to be unique for this group. Prefix is not needed.
				'fields'      => array(
					array(
						'name' => 'Número:',
						'id'   => $prefix . 'numero',
						'type' => 'text',
					),
				),
			),
		),
	);

	*/

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
