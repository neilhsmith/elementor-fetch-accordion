<?php

class Elementor_EFaq_Dynamic_FAQ extends \Elementor\Widget_Base {

	public function get_name() {
		return 'efaq-dynamic-faq';
	}

	public function get_title() {
		return esc_html__( 'EFaq Dynamic FAQ', 'elementor-fetch-accordion' );
	}

	public function get_icon() {
		return 'eicon-accordion';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'efaq', 'accordion' ];
	}

	private function register_content_controls() {
		// API SECTION
		$this->start_controls_section(
			'section_api',
			[
				'label' => esc_html( 'API Settings', 'elementor-fetch-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'api_fetch_url',
			[
				'label' => esc_html__( 'API Fetch URL', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'The URL to fetch from', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_control(
			'hr',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'api_key_is_active',
			[
				'label' => esc_html__( 'Is Active Key', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'isActive', 'elementor-fetch-accordion' ),
				'placeholder' => esc_html__( 'Is Active property key', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_control(
			'api_key_sort_order',
			[
				'label' => esc_html__( 'Sort Order Key', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'sortOrder', 'elementor-fetch-accordion' ),
				'placeholder' => esc_html__( 'Sort Order property key', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_control(
			'api_key_category',
			[
				'label' => esc_html__( 'Category Key', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'categoryName', 'elementor-fetch-accordion' ),
				'placeholder' => esc_html__( 'Category property key', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_control(
			'api_key_question',
			[
				'label' => esc_html__( 'Question Key', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'questionText', 'elementor-fetch-accordion' ),
				'placeholder' => esc_html__( 'Question property key', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_control(
			'api_key_answer',
			[
				'label' => esc_html__( 'Answer Key', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'answerText', 'elementor-fetch-accordion' ),
				'placeholder' => esc_html__( 'Answer Property Key', 'elementor-fetch-accordion' ),
			]
		);

		$this->end_controls_section();

		// CATEGORY SECTION
		$this->start_controls_section(
			'section_category',
			[
				'label' => esc_html( 'Category Settings', 'elementor-fetch-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'category_html_tag',
			[
				'label' => esc_html__( 'Category HTML Tag', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'span',
				'options' => [
					'span' => esc_html__( 'span', 'elementor-fetch-accordion' ),
					'div'  => esc_html__( 'div', 'elementor-fetch-accordion' ),
					'p' => esc_html__( 'p', 'elementor-fetch-accordion' ),
					'h1' => esc_html__( 'h1', 'elementor-fetch-accordion' ),
					'h2' => esc_html__( 'h2', 'elementor-fetch-accordion' ),
					'h3' => esc_html__( 'h3', 'elementor-fetch-accordion' ),
					'h4' => esc_html__( 'h4', 'elementor-fetch-accordion' ),
					'h5' => esc_html__( 'h5', 'elementor-fetch-accordion' ),
					'h6' => esc_html__( 'h6', 'elementor-fetch-accordion' ),
				],
			]
		);

		$this->add_control(
			'category_sort',
			[
				'label' => esc_html__( 'Sort Categories', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'elementor-fetch-accordion' ),
				'label_off' => esc_html__( 'No', 'elementor-fetch-accordion' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->end_controls_section();

		// ACCORDION SECTION
		$this->start_controls_section(
			'section_accordion',
			[
				'label' => esc_html( 'Accordion Settings', 'elementor-fetch-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'question_html_tag',
			[
				'label' => esc_html__( 'Question HTML Tag', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'span',
				'options' => [
					'span' => esc_html__( 'Span', 'elementor-fetch-accordion' ),
					'div'  => esc_html__( 'Div', 'elementor-fetch-accordion' ),
					'p' => esc_html__( 'P', 'elementor-fetch-accordion' ),
					'h1' => esc_html__( 'H1', 'elementor-fetch-accordion' ),
					'h2' => esc_html__( 'H2', 'elementor-fetch-accordion' ),
					'h3' => esc_html__( 'H3', 'elementor-fetch-accordion' ),
					'h4' => esc_html__( 'H4', 'elementor-fetch-accordion' ),
					'h5' => esc_html__( 'H5', 'elementor-fetch-accordion' ),
					'h6' => esc_html__( 'H6', 'elementor-fetch-accordion' ),
				],
			]
		);

		$this->add_control(
			'answer_html_tag',
			[
				'label' => esc_html__( 'Answer HTML Tag', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'div',
				'options' => [
					'span' => esc_html__( 'Span', 'elementor-fetch-accordion' ),
					'div'  => esc_html__( 'Div', 'elementor-fetch-accordion' ),
					'p' => esc_html__( 'P', 'elementor-fetch-accordion' ),
					'h1' => esc_html__( 'H1', 'elementor-fetch-accordion' ),
					'h2' => esc_html__( 'H2', 'elementor-fetch-accordion' ),
					'h3' => esc_html__( 'H3', 'elementor-fetch-accordion' ),
					'h4' => esc_html__( 'H4', 'elementor-fetch-accordion' ),
					'h5' => esc_html__( 'H5', 'elementor-fetch-accordion' ),
					'h6' => esc_html__( 'H6', 'elementor-fetch-accordion' ),
				],
			]
		);

		$this->add_control(
			'accordion_toggle_speed',
			[
				'label' => esc_html__( 'Toggle Speed (ms)', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 0,
				'step' => 1,
				'default' => 300,
				'selectors' => [
					'{{WRAPPER}} .efaq-answer-row' => 'transition-duration: {{VALUE}}ms',
				],
			]
		);

		$this->add_control(
			'accordion_enable_icon',
			[
				'label' => esc_html__( 'Enable Icon', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'elementor-fetch-accordion' ),
				'label_off' => esc_html__( 'Hide', 'elementor-fetch-accordion' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'accordion_icon_position',
			[
				'label' => esc_html__( 'Icon Position', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Right', 'elementor-fetch-accordion' ),
				'label_off' => esc_html__( 'Left', 'elementor-fetch-accordion' ),
				'return_value' => 'right',
				'default' => 'left',
				'condition' => [
					'accordion_enable_icon' => 'yes'
				]
			]
		);

		$this->add_control(
			'accordion_closed_icon',
			[
				'label' => esc_html__( 'Closed Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-alt-circle-right',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle-right',
						'arrow-right',
						'chevron-right'
					],
				],
				'condition' => [
					'accordion_enable_icon' => 'yes'
				]
			]
		);

		$this->add_control(
			'accordion_opened_icon',
			[
				'label' => esc_html__( 'Opened Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-minus',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'arrow-alt-circle-down',
						'circle-down',
						'arrow-down',
						'chevron-down'
					],
				],
				'condition' => [
					'accordion_enable_icon' => 'yes'
				]
			]
		);

		$this->end_controls_section();
	}

	private function register_style_controls() {
		// CATEGORY STYLES SECTION
		$this->start_controls_section(
			'section_category_style',
			[
				'label' => esc_html__( 'Category Styles', 'elementor-fetch-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'category_text_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-category' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'category_typography',
				'selector' => '{{WRAPPER}} .efaq-category',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'category_text_stroke',
				'selector' => '{{WRAPPER}} .efaq-category',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'category_text_shadow',
				'selector' => '{{WRAPPER}} .efaq-category',
			]
		);

		$this->add_control(
			'category_gap',
			[
				'label' => esc_html__( 'Gap (px)', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [
					'.efaq-sections' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'hr1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'category_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .efaq-category',
			]
		);

		$this->add_control(
			'hr2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'category_margin',
			[
				'label' => esc_html__( 'Margin', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .efaq-category' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'category_padding',
			[
				'label' => esc_html__( 'Padding', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .efaq-category' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'hr3',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'category_border',
				'selector' => '{{WRAPPER}} .efaq-category',
			]
		);

		$this->end_controls_section();

		// QUESTION STYLES SECTION
		$this->start_controls_section(
			'section_question_style',
			[
				'label' => esc_html__( 'Question Styles', 'elementor-fetch-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'question_typography',
				'selector' => '{{WRAPPER}} .efaq-question',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'question_text_stroke',
				'selector' => '{{WRAPPER}} .efaq-question',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'question_text_shadow',
				'selector' => '{{WRAPPER}} .efaq-question',
			]
		);

		$this->add_control(
			'question_icon_size',
			[
				'label' => esc_html__( 'Icon Size (px)', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [
					'{{WRAPPER}} .efaq-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'question_icon_gap',
			[
				'label' => esc_html__( 'Icon Gap (px)', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [
					'{{WRAPPER}} .efaq-question-row' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'question_distance',
			[
				'label' => esc_html__( 'Distance (px)', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [
					'{{WRAPPER}} .efaq-list' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'hr4',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'question_margin',
			[
				'label' => esc_html__( 'Margin', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .efaq-question-row' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'question_padding',
			[
				'label' => esc_html__( 'Padding', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .efaq-question-row' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'hr5',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->start_controls_tabs(
			'question_style_tabs'
		);

		$this->start_controls_tab(
			'question_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'question_normal_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .efaq-question-row',
			]
		);

		$this->add_control(
			'question_normal_text_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-question' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_normal_color',
			[
				'label' => esc_html__( 'Icon Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-icon' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'question_normal_border',
				'selector' => '{{WRAPPER}} .efaq-question-row',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'question_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'question_hover_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .efaq-question-row:hover',
			]
		);

		$this->add_control(
			'question_hover_text_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-question-row:hover .efaq-question' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_hover_color',
			[
				'label' => esc_html__( 'Icon Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-question-row:hover .efaq-icon' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'question_hover_border',
				'selector' => '{{WRAPPER}} .efaq-question-row:hover',
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'question_active_tab',
			[
				'label' => esc_html__( 'Active', 'elementor-fetch-accordion' ),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'question_active_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .efaq-faq[data-active] .efaq-question-row',
			]
		);

		$this->add_control(
			'question_active_text_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-faq[data-active] .efaq-question' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_active_color',
			[
				'label' => esc_html__( 'Icon Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-faq[data-active] .efaq-icon' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'question_active_border',
				'selector' => '{{WRAPPER}} .efaq-faq[data-active] .efaq-question-row',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

		// ANSWER STYLES SECTION
		$this->start_controls_section(
			'section_answer_style',
			[
				'label' => esc_html__( 'Answer Styles', 'elementor-fetch-accordion' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'answer_text_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .efaq-answer' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'answer_typography',
				'selector' => '{{WRAPPER}} .efaq-answer',
			]
		);

		$this->add_control(
			'hr6',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'answer_margin',
			[
				'label' => esc_html__( 'Margin', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .efaq-answer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'answer_padding',
			[
				'label' => esc_html__( 'Padding', 'elementor-fetch-accordion' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}} .efaq-answer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'hr7',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'answer_background',
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .efaq-answer',
			]
		);

		$this->add_control(
			'hr8',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'answer_border',
				'selector' => '{{WRAPPER}} .efaq-answer',
			]
		);

		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->register_content_controls();
		$this->register_style_controls();
	}

	protected function render() {
		$settings  = $this->get_settings_for_display();
		$fetch_url = $settings['api_fetch_url'];
		$key_category   = $settings['api_key_category'];
		$key_sort_order = $settings['api_key_sort_order'];

		$response  = wp_remote_get( $fetch_url );
		$http_code = wp_remote_retrieve_response_code( $response );

		if ( $http_code >= 200 && $http_code < 300 ) {
			$body = wp_remote_retrieve_body( $response );
			$json = json_decode( $body, true );
			$faqs = $this->sort_faqs( $json['data'], $settings );

			$this->render_faqs( $faqs, $settings );
		} else {
			$this->render_error();
		}
	}

	private function render_faqs( $categorized_faqs, $settings ) {
		$category_tag = $settings['category_html_tag'];

		echo '<div class="efaq-sections">';
		foreach ( $categorized_faqs as $key => $faqs ) {
			echo '<div class="efaq-section">';
			echo sprintf( '<%1$s class="efaq-category">%2$s</%1$s>', $category_tag, $key );
			echo '<ul class="efaq-list">';
			foreach ( $faqs as $faq ) {
				echo '<li class="efaq-item">';
				$this->render_faq( $faq, $settings );
				echo '</li>';
			}
			echo '</ul>';
			echo '</div>';
		}
		echo '</div>';
	}

	private function render_faq( $faq, $settings ) {
		$question_tag = $settings['question_html_tag'];
		$answer_tag = $settings['answer_html_tag'];
		$enable_icon = $settings['accordion_enable_icon'];
		$icon_position = $settings['accordion_icon_position'];
		$toggle_speed = $settings['accordion_toggle_speed'];
		$closed_icon = $settings['accordion_closed_icon'];
		$opened_icon = $settings['accordion_opened_icon'];
		$transition_duration = $settings['accordion_toggle_speed'];

		$question_text = $faq[$settings['api_key_question']];
		$answer_text = $faq[$settings['api_key_answer']];

		$question_markup = sprintf( '<%1$s class="efaq-question">%2$s</%1$s>', $question_tag, $question_text );

		echo '<div class="efaq-faq" data-duration="' . $transition_duration . '" data-opened-icon="' . $opened_icon['value'] . '" data-closed-icon="' . $closed_icon['value'] . '">';
		echo '<div class="efaq-question-row" id="' . $faq['id'] . '-tab" tabindex="0" aria-controls="' . $faq['id'] . '-panel" aria-expanded="false">';
		if ( $enable_icon == 'yes' ) {
			if ( $icon_position == 'right' ) {
				echo $question_markup;
				\Elementor\Icons_Manager::render_icon( $closed_icon, [ 'aria-hidden' => 'true', 'class' => 'efaq-icon fa-fw' ] );
			} else {
				\Elementor\Icons_Manager::render_icon( $closed_icon, [ 'aria-hidden' => 'true', 'class' => 'efaq-icon fa-fw' ] );
				echo $question_markup;
			}
		} else {
			echo $question_markup;
		}
		echo '</div>';
		echo '<div class="efaq-answer-row" id="' . $faq['id'] . '-panel" aria-labelledby="' . $faq['id'] . '-tab">';
		echo sprintf( '<%1$s class="efaq-answer">%2$s</%1$s>', $answer_tag, $answer_text );
		echo '</div>';
		echo '</div>';
	}

	private function render_error() {
		?>

		<p>todo: error</p>

		<?php
	}

	private function sort_faqs( $faqs, $settings ) {
		$should_sort_categories = $settings['category_sort'];
		$key_is_active = $settings['api_key_is_active'];
		$key_category = $settings['api_key_category'];

		$result = [];
		foreach ( $faqs as $item ) {
			if ( $item[$key_is_active] == false ) {
				continue;
			}

			$categoryName = $item[$key_category];

			if ( !isset( $result[$categoryName] ) ) {
				$result[$categoryName] = [];
			}

			$result[$categoryName][] = $item;
		}

		if ( $should_sort_categories == true ) {
			ksort( $result );
		}

		foreach ( $result as $category => &$items ) {
			usort( $items, function( $a, $b ) {
				return $a['sortOrder'] - $b['sortOrder'];
			});
		}

		return $result;
	}
}