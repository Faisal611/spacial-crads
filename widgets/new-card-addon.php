<?php
class Card_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'card_widget_name';
    }

    public function get_title() {
        return esc_html__( 'Spacial Card' );
    }

    public function get_icon() {
        return 'eicon-spinner';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    public function get_keywords() {
        return [ 'keyword', 'keyword' ];
    }

    protected function register_controls() {


        $this->start_controls_section(
            'icon_section',
            [
                'label' => esc_html__( 'Icons', 'spacial-material-cards' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
	    $this->add_control(
		    'open_icon',
		    [
			    'type' => \Elementor\Controls_Manager::ICONS,
			    'label' => esc_html__( 'Icon', 'spacial-material-cards' ),
			    'default' => [
				    'value' => 'fas fa-bars',
				    'library' => 'fa-solid',
			    ]
		    ]
	    );

	    $this->add_control(
		    'close_icon',
		    [
			    'type' => \Elementor\Controls_Manager::ICONS,
			    'label' => esc_html__( 'Icon', 'spacial-material-cards' ),
			    'default' => [
				    'value' => 'fas fa-angle-left',
				    'library' => 'fa-solid',
			    ]
		    ]
	    );

	    $this->end_controls_section();


	    $this->start_controls_section(
		    'content_section',
		    [
			    'label' => esc_html__( 'Content', 'spacial-material-cards' ),
			    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		    ]
	    );

	    $repeater = new \Elementor\Repeater();

	    $repeater->add_control(
		    'card_title',
		    [
			    'type' => \Elementor\Controls_Manager::TEXT,
			    'label' => esc_html__( 'Title', 'spacial-material-cards' ),
			    'placeholder' => esc_html__( 'Enter your title', 'spacial-material-cards' ),
				'default' => 'Christopher Walken',
			    'label_block' => false,
		    ]
	    );

	    $repeater->add_control(
		    'card_subtitle',
		    [
			    'type' => \Elementor\Controls_Manager::TEXT,
			    'label' => esc_html__( 'Sub Title', 'spacial-material-cards' ),
			    'placeholder' => esc_html__( 'Enter your sub title', 'spacial-material-cards' ),
			    'default' => 'The Deer Hunter',
			    'label_block' => false,
		    ]
	    );

	    $repeater->add_control(
		    'card_description',
		    [
			    'type' => \Elementor\Controls_Manager::TEXTAREA,
			    'label' => esc_html__( 'Description', 'spacial-material-cards' ),
			    'placeholder' => esc_html__( 'Enter your Description', 'spacial-material-cards' ),
			    'default' => 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...',
			    'label_block' => true,
		    ]
	    );

	    $repeater->add_control(
		    'card_image',
		    [
			    'label' => esc_html__( 'Choose Image', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::MEDIA,
			    'default' => [
				    'url' => \Elementor\Utils::get_placeholder_image_src(),
			    ],
		    ]
	    );
	    $repeater->add_control(
		    'hr',
		    [
			    'type' => \Elementor\Controls_Manager::DIVIDER,
		    ]
	    );
	    $repeater->add_control(
		    'card_color',
		    [
			    'label' => __( 'Card Color', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::SELECT,
			    'default' => 'Red',
			    'options' => [
				    'Red'  => __( 'Red', 'spacial-material-cards' ),
				    'Pink' => __( 'Pink', 'spacial-material-cards' ),
				    'Purple' => __( 'Purple', 'spacial-material-cards' ),
				    'Deep-Purple' => __( 'Deep-Purple', 'spacial-material-cards' ),
				    'Indigo' => __( 'Indigo', 'spacial-material-cards' ),
				    'Blue'  => __( 'Blue', 'spacial-material-cards' ),
				    'Light-Blue' => __( 'Light-Blue', 'spacial-material-cards' ),
				    'Cyan' => __( 'Cyan', 'spacial-material-cards' ),
				    'Teal' => __( 'Teal', 'spacial-material-cards' ),
				    'Green' => __( 'Green', 'spacial-material-cards' ),
				    'Light-Green'  => __( 'Light-Green', 'spacial-material-cards' ),
				    'Lime' => __( 'Lime', 'spacial-material-cards' ),
				    'Yellow' => __( 'Yellow', 'spacial-material-cards' ),
				    'Amber' => __( 'Amber', 'spacial-material-cards' ),
				    'Orange' => __( 'Orange', 'spacial-material-cards' ),
				    'Deep-Orange' => __( 'Deep-Orange', 'spacial-material-cards' ),
				    'Brown' => __( 'Brown', 'spacial-material-cards' ),
				    'Grey' => __( 'Grey', 'spacial-material-cards' ),
				    'Blue-Grey' => __( 'Blue-Grey', 'spacial-material-cards' ),
			    ],
		    ]
	    );

	    $this->add_control(
		    'Card_Repeater',
		    [
			    'label' => esc_html__( 'Repeater List', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::REPEATER,
			    'fields' => $repeater->get_controls(),
			    'default' => [
				    [
					    'card_title' => esc_html__( 'Title #1', 'spacial-material-cards' ),
					    'card_description' => esc_html__( 'He has appeared in more than 100 films and television shows, including The Deer Hunter, Annie Hall, The Prophecy trilogy, The Dogs of War ...', 'spacial-material-cards' ),
				    ]
			    ],
			    'title_field' => '{{{ card_title }}}',
		    ]
	    );

        $this->end_controls_section();

	    $this->start_controls_section(
		    'typography_section',
		    [
			    'label' => __( 'Typography Controls', 'plugin-name' ),
			    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		    ]
	    );
	    $this->add_group_control(
		    \Elementor\Group_Control_Typography::get_type(),
		    [
			    'name' => 'title_typo',
			    'label' => __( 'Title', 'spacial-material-cards' ),
			    'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
			    'selector' => '{{WRAPPER}} .material-card h2 .main-title',
		    ]
	    );
	    $this->add_control(
		    'text_color',
		    [
			    'label' => esc_html__( 'Text Color', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::COLOR,
			    'selectors' => [
				    '{{WRAPPER}}  .material-card h2 .main-title' => 'color: {{VALUE}}',
			    ],
		    ]
	    );

	    $this->add_responsive_control(
		    'card_align',
		    [
			    'label' => esc_html__( 'Alignment', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::CHOOSE,
			    'devices' => [ 'desktop', 'tablet', 'mobile' ],
			    'options' => [
				    'left' => [
					    'icon' => 'eicon-text-align-left',
				    ],
				    'center' => [
					    'icon' => 'eicon-text-align-center',
				    ],
				    'right' => [
					    'icon' => 'eicon-text-align-right',
				    ],
			    ],
			    'default' => 'center',
			    'toggle' => true,
			    'selectors' => [
				    '{{WRAPPER}} .material-card .card-alignment' => 'text-align: {{VALUE}};',
			    ],
		    ]
	    );

	    $this->add_control(
		    'hr',
		    [
			    'type' => \Elementor\Controls_Manager::DIVIDER,
		    ]
	    );

	    $this->add_group_control(
		    \Elementor\Group_Control_Typography::get_type(),
		    [
			    'name' => 'subtitle_typo',
			    'label' => __( 'Sub-Title', 'spacial-material-cards' ),
			    'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
			    'selector' => '{{WRAPPER}} .material-card h2 .sub-title',
		    ]
	    );
	    $this->add_control(
		    'Subtitle_color',
		    [
			    'label' => esc_html__( 'Subtitle Color', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::COLOR,
			    'selectors' => [
				    '{{WRAPPER}}  .material-card h2 .sub-title' => 'color: {{VALUE}}',
			    ],
		    ]
	    );

	    $this->add_control(
		    'hrr',
		    [
			    'type' => \Elementor\Controls_Manager::DIVIDER,
		    ]
	    );

	    $this->add_group_control(
		    \Elementor\Group_Control_Typography::get_type(),
		    [
			    'name' => 'description_typo',
			    'label' => __( 'Text', 'spacial-material-cards' ),
			    'scheme' => Elementor\Core\Schemes\Typography::TYPOGRAPHY_2,
			    'selector' => '{{WRAPPER}} .material-card.mc-description',
		    ]
	    );
	    $this->add_control(
		    'description_color',
		    [
			    'label' => esc_html__( 'Text Color', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::COLOR,
			    'selectors' => [
				    '{{WRAPPER}} .material-card .mc-description' => 'color: {{VALUE}}',
			    ],
		    ]
	    );

	    $this->add_responsive_control(
			    'card_columns',
		    [
			    'label' => esc_html__( 'Card Columns', 'spacial-material-cards' ),
			    'type' => \Elementor\Controls_Manager::SELECT,
			    'options' => [
				    'col-xs-12' => '1',
				    'col-sm-6'  => '2',
				    'col-md-4' => '3'
			    ],
//			    'prefix_class' => 'content-align-%s',
//			    'selectors' => [
//				    '{{WRAPPER}} .material-card .columns_class' => 'column-style: {{VALUE}};',
//			    ],
		    ]
	    );


	    $this->end_controls_section();
    }

    protected function render() {
        $setting = $this->get_settings_for_display();
		$card_Repeaters =  $this->get_settings('Card_Repeater');
		$card_columns =  $this->get_settings('card_columns');
		?>
		    <div class="row active-with-click">
			    <?php
			        if ($card_Repeaters ) {
				        foreach ($card_Repeaters as $card_Repeater){
							?>
					        <div class="<?php echo $card_columns ?> columns_class">
						        <article class="material-card <?php echo $card_Repeater['card_color']?>">
							        <h2 class="card-alignment">
								        <span class="main-title" ><?php echo $card_Repeater['card_title']?></span>
								        <span class="sub-title">
									        <i class="fa fa-fw fa-star"></i>
									        <?php echo $card_Repeater['card_subtitle']?>
								        </span>
							        </h2>
							        <div class="mc-content">
								        <div class="img-container">
									        <img class="img-responsive" src="<?php echo  $card_Repeater['card_image']['url']?>"  alt="Photo">
								        </div>
								        <div class="mc-description"> <?php echo  $card_Repeater['card_description']?></div>
							        </div>
							        <a class="mc-btn-action">
								        <i class="fa fa-bars"></i>
							        </a>
							        <div class="mc-footer">
								        <h4>
									        Social
								        </h4>
								        <a class="cmp_social_icon text-center"><i class="fa fa-facebook"></i></a>
								        <a class="cmp_social_icon text-center"><i class="fa fa-twitter"></i></a>
								        <a class="cmp_social_icon text-center"><i class="fa fa-linkedin"></i></a>
								        <a class="cmp_social_icon text-center"><i class="fa fa-google-plus"></i></a>
							        </div>
						        </article>
					        </div>
					        <?php
				        }
			        }
			    ?>
		    </div>
	    <script>
	        jQuery(function() {
	            jQuery('.material-card').materialCard({
	                icon_close: '<?php echo $setting['close_icon']['value'];?>',
	                icon_open: '<?php echo $setting['open_icon']['value'];?>',
	                icon_spin: 'fa-spin-fast',
	                card_activator: 'click'
	            });
	            jQuery('.material-card').on('shown.material-card show.material-card hide.material-card hidden.material-card', function (event) {
	                console.log(event.type, event.namespace, jQuery(this));
	            });
	        });
	    </script>
		<?php
//		print_r($setting['card_open_icon']);
    }

    protected function content_template() {

    }
}
