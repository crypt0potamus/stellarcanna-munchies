<?php

function scc_get_option( string $option, $default = null ) {
	$options = get_option( 'scc_config_scc', array() );
	return $options[ $option ] ?? $default;
}

function scc_update_option( $option, $new_value ) {
	$config            = get_option( 'scc_config_scc', array() );
	$config[ $option ] = $new_value;
	return update_option( 'scc_config_scc', $config );
}
