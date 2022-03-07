<?php

function scc_shortcode(){
	return scc_get_QR_code();
}

add_shortcode('stellarcanna_munchies', 'scc_shortcode');
