<?php
class mmpga_frontend extends mmpga_controller {

	public function __construct() {

		$this->options_name = 'mmpg_options';
		$mode_on = $this->get_options('enabled_mmpm');
		if(!empty($mode_on))
			add_action('get_header', array($this,'wp_maintenance_mode') );
	}

	public function wp_maintenance_mode(){

		$this->view('front/maintenance', $this->get_options());
		exit;

	}

}