<?php

namespace StellarCanna_Munchies;

define( 'SCC_PATH', plugin_dir_path( __FILE__ ) );
define( 'SCC_URL', plugin_dir_url( __FILE__ ) );

define( 'SCC_VERSION', '1.0.0' );
define( 'SCC_SLUG', 'stellarcanna_munchies' ); // snake_case

define( 'SCC_ADMIN_PATH', SCC_PATH . 'admin/' );
define( 'SCC_ADMIN_URL', SCC_URL . 'admin/' );

define( 'SCC_FRONT_ASSETS', SCC_URL . 'front/assets/dist/' );
define( 'SCC_IMG_ASSETS', SCC_URL . 'front/assets/img/' );
define( 'SCC_ADMIN_ASSETS', SCC_ADMIN_URL . 'assets/dist/' );
