<?php

add_action( 'wp_ajax_scc_validate_address', 'scc_validate_address' );

function scc_validate_address() {

	check_ajax_referer( 'scc_save_settings', 'nonce' );

	$address = sanitize_text_field( $_POST['address'] );


	if ( 56 !== strlen( $address ) ) {
		wp_send_json_error(__('StellarCanna Munchies address is not valid. It should have exactly 56 characters.', 'stellarcanna-munchies'));
	}


	if ( 0 !== strpos( $address, 'G' ) ) {
		wp_send_json_error(__('StellarCanna Munchies address is not valid. It should start with <code>G</code>.', 'stellarcanna-munchies'));
	}

	scc_update_option( '_stellarcanna_munchies_address', $address );

	wp_send_json_success(__('Saved!', 'stellarcanna-munchies'));
}
