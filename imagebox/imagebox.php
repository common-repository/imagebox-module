<?php
/**
 * @class FDPictureBoxModule
 */
class FDPictureBoxModule extends FLBuilderModule {

    /** 
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */  
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Image Box', 'FD_BBM'),
            'description'   => __('Create imagebox module for beaver builder ', 'FD_BBM'),
            'category'		=> __('Imagebox Modules', 'FD_BBM'),
            'dir'           => FD_BB_MODULES_DIR . 'imagebox/',
            'url'           => FD_BB_MODULES_URL . 'imagebox/',			
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }   
}
/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FDPictureBoxModule', array(
	'general'       => array( // General Tab
		'title'         => __( 'General', 'FD_BBM' ), // Tab title
		'sections'      => array( // Tab Sections
			'general'       => array( // Section
				'title'         => '',  // Section Title
				'fields'        => array(  // Section Fields
				    'front_bg_image' => array(
                        'type'          => 'photo',
                        'label'         => __('Background Image', 'FD_BBM'),
                        'show_remove'   => true,
                    ),
                    
				),
			),
		),
	),   // End of general tab section
	'title'       => array(  // Title Tab
		'title'         => __('Title', 'FD_BBM'), // Tab title  
		'sections'      => array( // Tab Sections
			'general'       => array(
				'title'         => '',
				'fields'        => array(   // Sections Fields
					'title1'          => array(
						'type'          => 'text',
						'label'         => __('Title-1', 'FD_BBM'),
						'default'       => __('Parents', 'FD_BBM'),
						
					),
					'title2'          => array(
						'type'          => 'text',
						'label'         => __('Title-2', 'FD_BBM'),
						'default'       => __('Next Steps', 'FD_BBM'),
					),

				)
			),
			'colors1'        => array(  // Title Style Sections 
				'title'         => __('Title-1 Options', 'FD_BBM'),  // Title Style Section Name
				'fields'        => array(   // Title style fields
				    'title_font_size'   => array(         
						'type'          => 'text',
						'label'         => __('Font Size', 'FD_BBM'),
						'default'    => '32',
						'description'   => 'px',
						'maxlength'     => '3',
						'size'          => '5',
						'placeholder'   => '2',
						'preview'         => array(
                            'type'        => 'css',
                            'selector'    => '.fd-bb-imagebox h4',
							'property'  => 'font-size',
                            'unit'      => 'px'
                        )
					),
					'title_color'        => array( 
						'type'       => 'color',
                        'label'         => __('Text Color', 'FD_BBM'),
						'default'    => '#ffffff',
						'show_reset' => true,
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h4',
							'property'        => 'color'
                        )
					),
					'title_hover_color'   => array( 
						'type'       => 'color',
                        'label'         => __('Text Hover Color', 'FD_BBM'),
						'default'    => '',
						'show_reset' => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h4:hover',
							'property'        => 'color'
                        )
					),

				)
			),
			'colors2'        => array(  // Title Style Sections 
				'title'         => __('Title-2 Options', 'FD_BBM'),  // Title Style Section Name
				'fields'        => array(   // Title style fields
				    'title_font_size2'   => array(         
						'type'          => 'text',
						'label'         => __('Font Size', 'FD_BBM'),
						'default'    => '32',
						'description'   => 'px',
						'maxlength'     => '3',
						'size'          => '5',
						'placeholder'   => '2',
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h4 strong',
							'property'  => 'font-size',
                            'unit'      => 'px'
                        )
					),
					'title_color2'        => array( 
						'type'       => 'color',
                        'label'         => __('Text Color', 'FD_BBM'),
						'default'    => '#ffffff',
						'show_reset' => true,
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h4 strong',
							'property'        => 'color'
                        )
					),
					'title_hover_color2'   => array( 
						'type'       => 'color',
                        'label'         => __('Text Hover Color', 'FD_BBM'),
						'default'    => '',
						'show_reset' => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox:hover h4 strong',
							'property'        => 'color'
                        )
					),

				)
			),
			
		)

	),  // End of Title Tab
	'button'       => array(   // Start Button Tab
		'title'         => __('Button', 'FD_BBM'),   // Tab Name
		'sections'      => array(   // Start Section 
			'general'       => array(
				'title'         => '',
				'fields'        => array(   // Button fields
					'text'          => array(
						'type'          => 'text',
						'label'         => __('Text', 'FD_BBM'),
						'default'       => __('Click Here', 'FD_BBM'),
					),

				)
			),
			'link'          => array(   // Button Link Section 
				'title'         => __('Link', 'FD_BBM'), // Button Section Name 
				'fields'        => array(  // Button Link fields
					'link'          => array(
						'type'          => 'link',
						'label'         => __('Link', 'FD_BBM'),
						'placeholder'   => 'http://www.example.com',
						'default'		=> '#',
						'preview'       => array(
							'type'          => 'none'
						),
						'connections'	=> array( 'url' )
					),
					'link_target'   => array(
						'type'          => 'select',
						'label'         => __('Link Target', 'FD_BBM'),
						'default'       => '_self',
						'options'       => array(
							'_self'         => __('Same Window', 'FD_BBM'),
							'_blank'        => __('New Window', 'FD_BBM')
						),
						'preview'       => array(
							'type'          => 'none'
						)
					)
				)
			),
			'btn_colors'        => array(  // Button Style Section 
				'title'         => __('Options', 'FD_BBM'), // Button Style Section Name 
				'fields'        => array(        // Button Style fields
				    'btn_font_size'   => array(
						'type'          => 'text',
						'label'         => __('Font Size', 'FD_BBM'),
						'default'    => '18',
						'description'   => 'px',
						'maxlength'     => '3',
						'size'          => '5',
						'placeholder'   => '2',
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5',
							'property'  => 'font-size',
                            'unit'      => 'px'
                        )
					),
					'btn_text_color'        => array( 
						'type'       => 'color',
                        'label'         => __('Text Color', 'FD_BBM'),
						'default'    => '#737373',
						'show_reset' => true,
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5',
							'property'        => 'color'
                        )
					),
					'btn_text_hover_color'   => array( 
						'type'       => 'color',
                        'label'         => __('Text Hover Color', 'FD_BBM'),
						'default'    => '',
						'show_reset' => true,
                        'preview'       => array(
							'type'          => 'none'
						)
					),
					'btn_bg_color'        => array( 
						'type'       => 'color',
                        'label'         => __('Background Color', 'FD_BBM'),
						'default'    => '#ffffff',
						'show_reset' => true,
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5',
							'property'        => 'background-color'
                        )
					),
                    'btn_bg_hover_color'   => array( 
						'type'       => 'color',
                        'label'         => __('Background Hover Color', 'FD_BBM'),
						'default'    => '',
						'show_reset' => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5:hover',
							'property'        => 'background-color'
                        )
					),
					'btn_border_size'   => array(
						'type'          => 'text',
						'label'         => __('Border Size', 'FD_BBM'),
						'description'   => 'px',
						'maxlength'     => '3',
						'size'          => '5',
						'placeholder'   => '2'
					),
					'btn_border_radius'   => array(
						'type'          => 'text',
						'label'         => __('Border Radius', 'FD_BBM'),
						'description'   => 'px',
						'default'    => '16',
						'maxlength'     => '3',
						'size'          => '5',
						'placeholder'   => '2',
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5',
							'property'        => 'border-radius'
                        )
					),
					'btn_border_color'        => array( 
						'type'       => 'color',
                        'label'         => __('Border Color', 'FD_BBM'),
						'default'    => '',
						'show_reset' => true,
						'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5',
							'property'        => 'border-color'
                        )
					),
					'btn_border_hover_color'   => array( 
						'type'       => 'color',
                        'label'         => __('Border Hover Color', 'FD_BBM'),
						'default'    => '',
						'show_reset' => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.fd-bb-imagebox h5:hover',
							'property'        => 'border-color'
                        )
					),
				)
			),
		)
	),  // End of button Tab 
));

?>