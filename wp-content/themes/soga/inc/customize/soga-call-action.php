<?php
function soga_call_action_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Call Action Section Panel
	=========================================*/
	
	// Button Icon // 
	$wp_customize->add_setting(
    	'call_action_button2_icon',
    	array(
	        'default'			=> __('fa-bell','soga'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button2_icon',
		array(
		    'label'   => __('Icon','soga'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 9
		)  
	);
	
	// Button Title
	$wp_customize->add_setting(
    	'call_action_button_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_title',
		array(
		    'label'   => __('Button Title','soga'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 9
		)  
	);
	
	
	
	// Content options
	$wp_customize->add_setting(
		'cta_btn_third_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'cta_btn_third_head',
		array(
			'type' => 'hidden',
			'label' => __('Button Third','soga'),
			'section' => 'call_action_content',
			'priority'  => 11
		)
	);
	
	
	// Button Icon // 
	$wp_customize->add_setting(
    	'call_action_button3_icon',
    	array(
	        'default'			=> 'fa-phone',
			'sanitize_callback' => 'specia_sanitize_html',
			'capability' => 'edit_theme_options',

		)
	);	

	$wp_customize->add_control(
		'call_action_button3_icon',
		array(
		    'label'   		=> __('Icon','soga'),
			'type' => 'text',
		    'section' 		=> 'call_action_content',
			'priority'      => 12,
		)  
	);

	// Button Title
	
	$wp_customize->add_setting(
    	'call_action_button3_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button3_title',
		array(
		    'label'   => __('Button Title','soga'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 13
		)  
	);
	
	// Call Button Label // 
	$wp_customize->add_setting(
    	'call_action_button_label3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_label3',
		array(
		    'label'   => __('Button Text 3','soga'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 14
		)  
	);
	
	// Call Button link // 
	$wp_customize->add_setting(
    	'call_action_button_link3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_link3',
		array(
		    'label'   => __('Button Link 3','soga'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 15
		)  
	);
	
	
	// Review ttl// 
	$wp_customize->add_setting(
    	'call_action_review_ttl',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_review_ttl',
		array(
		    'label'   => __('Review title','soga'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 5
		)  
	);
	
	
	// Call Action Page 1 //
	$wp_customize->add_setting(
	'call_action_page1',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page1',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 1','soga'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page1',
			'priority'  => 1
		)
	);
	
	// Call Action Page 2 //
	$wp_customize->add_setting(
	'call_action_page2',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page2',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 2','soga'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page2',
			'priority'  => 1
		)
	);
	
	// Call Action Page 3 //
	$wp_customize->add_setting(
	'call_action_page3',
		array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'specia_sanitize_integer',
		)
	);
			
	$wp_customize->add_control(
	'call_action_page3',
		array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select Page for Info 3','soga'),
			'section'	=> 'call_action_content',
			'settings'        => 'call_action_page3',
			'priority'  => 1
		)
	);
	
	// Background Color // 
	$wp_customize->add_setting(
	'call_action_overlay', 
	array(	
		'default' => '#D61523',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control
		($wp_customize, 
			'call_action_overlay', 
			array(
				'label'      => __( 'Background Color', 'soga' ),
				'section'    => 'call_action_content',
				'settings'   => 'call_action_overlay',
				'priority'  => 17
			) 
		) 
	);
}
add_action( 'customize_register', 'soga_call_action_setting' );



// Call to action selective refresh
function soga_home_cta_section_partials( $wp_customize ){
	
	//call_action_button_title
	$wp_customize->selective_refresh->add_partial( 'call_action_button_title', array(
		'selector'            => '.call-to-action-soga .cta-info .call-title',
		'settings'            => 'call_action_button_title',
		'render_callback'  => 'soga_call_action_button_title_render_callback',
	) );
	
	//call_action_button3_title
	$wp_customize->selective_refresh->add_partial( 'call_action_button3_title', array(
		'selector'            => '.call-to-action-soga .call-wrapper2 .cta-info .call-title',
		'settings'            => 'call_action_button3_title',
		'render_callback'  => 'soga_call_action_button3_title_render_callback',
	) );
	
	//call_action_button_label3
	$wp_customize->selective_refresh->add_partial( 'call_action_button_label3', array(
		'selector'            => '.call-to-action-soga .call-wrapper2 .call-phone a',
		'settings'            => 'call_action_button_label3',
		'render_callback'  => 'soga_call_action_button_label3_render_callback',
	) );
	
	//call_action_review_ttl
	$wp_customize->selective_refresh->add_partial( 'call_action_review_ttl', array(
		'selector'            => '.call-to-action-soga .ttl',
		'settings'            => 'call_action_review_ttl',
		'render_callback'  => 'soga_call_action_review_ttl_render_callback',
	) );
	}

add_action( 'customize_register', 'soga_home_cta_section_partials' );

// call_action_button_title
function soga_call_action_button_title_render_callback() {
	return get_theme_mod( 'call_action_button_title' );
}


// call_action_button3_title
function soga_call_action_button3_title_render_callback() {
	return get_theme_mod( 'call_action_button3_title' );
}

// call_action_button_label3
function soga_call_action_button_label3_render_callback() {
	return get_theme_mod( 'call_action_button_label3' );
}

// call_action_button_label3
function soga_call_action_review_ttl_render_callback() {
	return get_theme_mod( 'call_action_review_ttl' );
}