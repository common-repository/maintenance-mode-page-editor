<?php

class mmpga_admin extends mmpga_controller {

	public function __construct() {
		parent::__construct();

		$this->options_name = 'mmpg_options';

		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_enqueue_scripts', array($this,'plugin_style') );

		if (!get_option($this->options_name))
			$this->on_install();

	}

	function plugin_style() {

		wp_register_style( 'mdpg-style', plugins_url('/assets/css/style.css?no-cache=' . time(), MMPGA_CORE_DIR) );
		wp_enqueue_style( 'mdpg-style' );
		wp_enqueue_script( 'media-upload');
		wp_enqueue_media();
		wp_enqueue_script( 'plugin-js',  plugins_url('/assets/js/main.js?no-cache=' . time(), MMPGA_CORE_DIR));
	}

	/**
	 * Add options page
	 */
	public function add_plugin_page()
	{
		add_options_page(
			'Settings Admin',
			'Maintenance settings',
			'manage_options',
			'maintenance-settings',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page()
	{
		if(!empty($_POST)) {

			$clean_options = [];
			foreach($_POST['plugin_options'] as $key=>$option) {
				$option = sanitize_text_field($option);
				$option = esc_js($option);
				$clean_options[$key] = $option;
			}
			$this->set_options($clean_options);
		}

		$this->view('back/options', $this->get_options());
	}

	public function on_install() {
		update_option($this->options_name, json_encode(
			[
				'background'  => plugins_url('/assets/img/background.jpg', MMPGA_CORE_DIR),
				'title'       => 'Under Maintenance',
				'description' => 'Sorry for the inconvenience we will come with a new experience',
				'twitter'     => 'http://twitter.com',
				'facebook'    => 'http://facebook.com',
				'instagram'   => 'http://instagram.com',
			]
		));
	}

}
