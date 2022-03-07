<?php

namespace StellarCanna_Munchies\Includes;

class Monkey_Treat_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'stellarcanna-munchies';
	}

	public function get_title() {
		return __( 'StellarCanna Munchies', 'stellarcanna-munchies' );
	}

	public function get_icon() {
		return 'eicon-play';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function _register_controls() {}

	protected function render() {
		echo scc_get_QR_code();
	}

}
