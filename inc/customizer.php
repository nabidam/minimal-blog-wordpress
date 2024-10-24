<?php
/**
 * Minimal Blog Theme Customizer
 *
 * @package Minimal_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function minilog_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector' => '.site-title a',
				'render_callback' => 'minilog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector' => '.site-description',
				'render_callback' => 'minilog_customize_partial_blogdescription',
			)
		);
	}

	// show title near logo in header or not
	$wp_customize->add_setting('display_site_title', array(
		'default' => false,  // Show title by default
		'transport' => 'refresh',
	));

	$wp_customize->add_control('display_site_title_control', array(
		'label' => __('Display Site Title', 'minilog'),
		'section' => 'title_tagline',  // The "Site Identity" section in the Customizer
		'settings' => 'display_site_title',
		'type' => 'checkbox',
	));
}
add_action('customize_register', 'minilog_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function minilog_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function minilog_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function minilog_customize_preview_js()
{
	wp_enqueue_script('minilog-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'minilog_customize_preview_js');
