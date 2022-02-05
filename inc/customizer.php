<?php

function sakal_customize_register($wp_customize)
{
	$largeWidth = 1940;
	$largeHeight = 500;

	$mobileWidth = 412;
	$mobileHeight = 500;

	/*



		for large screens
		the section in the left side-bar
	*/
	$wp_customize->add_section('sakal_carousel_section', array(
		'title'    => __('Carousel', 'sakal'),
		'priority' => 30
	));

	/*




		first carousel
	*/
	$wp_customize->add_setting('sakal_carousel_first_image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'sakal_carousel_first_image', array(
		'label'    => __('First Image', 'sakal'),
		'section'  => 'sakal_carousel_section',
		'width' => $largeWidth,
		'height' => $largeHeight
	)));

	$wp_customize->add_setting('sakal_carousel_first_product', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		'sakal_carousel_first_product',
		array(
			'type' => 'text',
			'label'    => __('First Product', 'sakal'),
			'section'  => 'sakal_carousel_section',
		)
	);

	/*




		second carousel
	*/
	$wp_customize->add_setting('sakal_carousel_second_image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'sakal_carousel_second_image', array(
		'label'    => __('Second Image', 'sakal'),
		'section'  => 'sakal_carousel_section',
		'width' => $largeWidth,
		'height' => $largeHeight
	)));

	$wp_customize->add_setting('sakal_carousel_second_product', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		'sakal_carousel_second_product',
		array(
			'type' => 'text',
			'label'    => __('Second Product', 'sakal'),
			'section'  => 'sakal_carousel_section',
		)
	);

	/*




		third carousel
	*/
	$wp_customize->add_setting('sakal_carousel_third_image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'sakal_carousel_third_image', array(
		'label'    => __('Third Image', 'sakal'),
		'section'  => 'sakal_carousel_section',
		'width' => $largeWidth,
		'height' => $largeHeight
	)));

	$wp_customize->add_setting('sakal_carousel_third_product', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		'sakal_carousel_third_product',
		array(
			'type' => 'text',
			'label'    => __('Third Product', 'sakal'),
			'section'  => 'sakal_carousel_section',
		)
	);

	/*



		for mobile screens
		the section in the left side-bar
	*/
	$wp_customize->add_section('sakal_mobile_carousel_section', array(
		'title'    => __('Mobile Carousel', 'sakal'),
		'priority' => 40
	));

	/*




		first carousel
	*/
	$wp_customize->add_setting('sakal_mobile_carousel_first_image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'sakal_mobile_carousel_first_image', array(
		'label'    => __('First Image', 'sakal'),
		'section'  => 'sakal_mobile_carousel_section',
		'width' => $mobileWidth,
		'height' => $mobileHeight
	)));

	$wp_customize->add_setting('sakal_mobile_carousel_first_product', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		'sakal_mobile_carousel_first_product',
		array(
			'type' => 'text',
			'label'    => __('First Product', 'sakal'),
			'section'  => 'sakal_mobile_carousel_section',
		)
	);

	/*




		second carousel
	*/
	$wp_customize->add_setting('sakal_mobile_carousel_second_image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'sakal_mobile_carousel_second_image', array(
		'label'    => __('Second Image', 'sakal'),
		'section'  => 'sakal_mobile_carousel_section',
		'width' => $mobileWidth,
		'height' => $mobileHeight
	)));

	$wp_customize->add_setting('sakal_mobile_carousel_second_product', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		'sakal_mobile_carousel_second_product',
		array(
			'type' => 'text',
			'label'    => __('Second Product', 'sakal'),
			'section'  => 'sakal_mobile_carousel_section',
		)
	);

	/*




		third carousel
	*/
	$wp_customize->add_setting('sakal_mobile_carousel_third_image', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'sakal_mobile_carousel_third_image', array(
		'label'    => __('Third Image', 'sakal'),
		'section'  => 'sakal_mobile_carousel_section',
		'width' => $mobileWidth,
		'height' => $mobileHeight
	)));

	$wp_customize->add_setting('sakal_mobile_carousel_third_product', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		'sakal_mobile_carousel_third_product',
		array(
			'type' => 'text',
			'label'    => __('Third Product', 'sakal'),
			'section'  => 'sakal_mobile_carousel_section',
		)
	);
}
add_action('customize_register', 'sakal_customize_register');
