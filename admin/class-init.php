<?php

namespace StellarCanna_Munchies\Admin;

use StellarCanna_Munchies\Includes\Functions;

class Init {

	private static $instance = null;

	private function __construct() {
		$this->init();
	}

	public static function instance() {
		if ( null === self::$instance ) {
			self::$instance = new Init();
		}

		return self::$instance;
	}

	public function init() {
		add_action( 'admin_enqueue_scripts', array( $this, 'assets' ) );
		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
	}

	public function assets( $hook ) {
		if ( 'settings_page_stellarcanna-munchies' === $hook ) {
			wp_enqueue_style( 'scc-admin' );
			wp_enqueue_script( 'scc-admin' );
		}
	}

	public function add_menu_page() {
		add_submenu_page(
			'options-general.php',
			__( 'StellarCanna Munchies', 'stellarcanna-munchies' ),
			__( 'StellarCanna Munchies', 'stellarcanna-munchies' ),
			'manage_options',
			'stellarcanna-munchies',
			array( $this, 'renbder_settings_page' ),
		);
	}

	public function renbder_settings_page() {
		?>
		<div class="scc-admin-wrapper">
			<div class="scc-admin-header">
				<span class="scc-logo">
<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256">
<path style="fill:#1d1d1b; stroke:none;" d="M0 0L0 256L256 256L256 0L0 0z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M123 1L123 2L130 2L123 1M110 2L110 3L117 3L110 2z"/>
<path style="fill:#ce9411; stroke:none;" d="M117 2L117 3L136 3L117 2z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M136 2L136 3L143 3L136 2M104 3L104 4L108 4L104 3z"/>
<path style="fill:#ce9411; stroke:none;" d="M108 3L108 4L115 4L108 3z"/>
<path style="fill:#f5d947; stroke:none;" d="M14 83L24 65L27 66C11.2681 102.509 4.10217 137.136 21.8897 175C26.896 185.657 34.4309 194.391 41 204C32.2049 205.217 50.0543 218.415 53 220L44 207C79.4222 233.891 120.654 249.082 165 233.302C178.922 228.348 189.854 220.027 202 212C193.066 220.934 183.036 228.783 171.196 233.579C165.381 235.935 157.733 234.876 154 241L150 240C145.862 243.877 140.358 243 135 243C138.787 245.855 143.516 244.431 148 243.841C159.562 242.32 171.801 239.465 181 232.1C190.934 224.145 202.95 218.889 212.545 210.329C228.183 196.376 240.809 174.143 245.13 153.715C258.424 90.8764 224.57 25.5682 161 7.42746C114.035 -5.97479 59.9116 9.9847 30.8495 50C23.7951 59.7132 15.7909 70.8732 14 83z"/>
<path style="fill:#ce9411; stroke:none;" d="M141 3L141 4L145 4L141 3z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M145 3L145 4L149 4L145 3M99 4L99 5L102 5L99 4z"/>
<path style="fill:#ce9411; stroke:none;" d="M102 4L102 5L106 5L102 4z"/>
<path style="fill:#fbf18c; stroke:none;" d="M134 10L139 5C134.975 4.38406 134.295 6.20108 134 10z"/>
<path style="fill:#ce9411; stroke:none;" d="M148 4L148 5L151 5L148 4z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M151 4L151 5L154 5L151 4M95 5L95 6L98 6L95 5z"/>
<path style="fill:#ce9411; stroke:none;" d="M98 5L98 6L101 6L98 5z"/>
<path style="fill:#fbf18c; stroke:none;" d="M144 5L143 11L184 20C177.758 10.4713 154.703 6.38219 144 5z"/>
<path style="fill:#ce9411; stroke:none;" d="M153.667 5.33333L154.333 5.66667L153.667 5.33333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M155 5L155 6L158 6L155 5M91 6L91 7L94 7L91 6z"/>
<path style="fill:#ce9411; stroke:none;" d="M94 6L94 7L97 7L94 6M157.667 6.33333L158.333 6.66667L157.667 6.33333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M159 6L159 7L162 7L159 6M88.6667 7.33333L89.3333 7.66667L88.6667 7.33333z"/>
<path style="fill:#ce9411; stroke:none;" d="M90 7L90 8L93 8L90 7M161.667 7.33333L162.333 7.66667L161.667 7.33333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M163.667 7.33333L164.333 7.66667L163.667 7.33333M85.6667 8.33333L86.3333 8.66667L85.6667 8.33333z"/>
<path style="fill:#ce9411; stroke:none;" d="M87 8L87 9L90 9L87 8M164.667 8.33333L165.333 8.66667L164.667 8.33333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M166.667 8.33333L167.333 8.66667L166.667 8.33333M80 10L80 11L84 10L80 10z"/>
<path style="fill:#ce9411; stroke:none;" d="M84 9L84 10L87 10L84 9M167.667 9.33333L168.333 9.66667L167.667 9.33333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M169.667 9.33333L170.333 9.66667L169.667 9.33333z"/>
<path style="fill:#ce9411; stroke:none;" d="M82.6667 10.3333L83.3333 10.6667L82.6667 10.3333M95 14L95 15L133 11C123.124 6.85602 104.6 10.3897 95 14M170 10L170 11L174 12L174 11L170 10z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M172 10L173 11L172 10M73 13L73 14L79 12L73 13z"/>
<path style="fill:#ce9411; stroke:none;" d="M79.6667 11.3333L80.3333 11.6667L79.6667 11.3333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M174 11L174 12L180 14L180 13L174 11z"/>
<path style="fill:#ce9411; stroke:none;" d="M77.6667 12.3333L78.3333 12.6667L77.6667 12.3333z"/>
<path style="fill:#f5d947; stroke:none;" d="M98 14L98 15L117 13L98 14z"/>
<path style="fill:#fbf18c; stroke:none;" d="M48 49L49 42L48 42L44 53L38 52L35 69L40 69L40 72L34 71L30 73L31 78L33 78L35 75C35.9965 79.1693 44.8428 94.7291 36 93L36 99L38 96L58 100L57 108L54 108L60 109L58 114L65 111L64 121L59 115L56 116L51 112L44 110L45 105L41 112L44 113L42 120C37.5964 116.923 29.6698 113.392 32 107L25 108C24.1271 102.874 15.856 112.449 15 115L19 115L23 108C25.6583 115.2 24.3136 119.545 16 120L17 117L13 116L12 128L15 127L13 124L24 126C24.7851 121.077 27.2747 120.154 32 120L31 127C36.4758 126.072 41.4436 127.713 45 132L54 123L58 132L62 130L61 133C64.7023 132.109 66.3864 132.101 69 135L66 133L65 133L52 139L43 139C43.863 144.792 37.3355 147.978 38.527 153.981C39.9389 161.095 50.0162 161.254 54.8673 164.818C58.2019 167.268 59.2275 171.028 63 173L62 176C65.6545 176.063 66.265 174.446 67 171L62 168L62 171L61 171L45 149C55.5826 149 76.3933 156.358 84 149L83 154L92 158L78 136L73 137L74 134L77 135L75 131L73 131L72 135L71 135C71.6747 121.797 68.5391 101.54 61 90L60 90L60 93L48 84C49.2119 80.0939 51.0931 79.7975 55 80L60 89L61 89C59.2852 81.8446 66.5992 78.4584 67 85L69 83L70 83L74 88L66 91L71 95L74 91L72 95L72 96C86.7888 107.738 103.223 121.208 111 139L112 139L109 116L113 92L109 91L108 82L114 85C115.544 79.0342 123.4 61.0854 118 57L119 55L117 49L118 49L121 57L123 57L126 49L128 49C132.081 63.921 138.633 77.447 140.869 93C141.719 98.9159 140.626 108.318 146 112C144.885 105.145 149.697 102.205 156 102L154 120C161.503 114.584 163.677 103.833 165 95C176.321 99.9431 178.348 97.9302 189 92L189 91L171 92C174.554 86.8169 181.534 78.0059 188.946 80.7569C194.348 82.7619 196.419 88.5352 203 88.8488C209.879 89.1765 220.018 82.0911 224.681 77.3912C230.682 71.343 219.539 59.8233 215.87 55C202.596 37.5517 181.635 22.0075 160 17L161 21L157 21L159 17C129.024 4.10291 86.9005 13.8928 61 31.5193C53.7865 36.4284 55.016 45.0753 48 49z"/>
<path style="fill:#ce9411; stroke:none;" d="M175 12L176 13L175 12M75.6667 13.3333L76.3333 13.6667L75.6667 13.3333M177 13L178 14L177 13z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M71 14L72 15L71 14z"/>
<path style="fill:#ce9411; stroke:none;" d="M72.6667 14.3333L73.3333 14.6667L72.6667 14.3333M179 14L179 15L186 18L186 17L179 14z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M181 14L182 15L181 14M69 15L64 18L64 19L70 16L69 15z"/>
<path style="fill:#ce9411; stroke:none;" d="M70.6667 15.3333L71.3333 15.6667L70.6667 15.3333M91 15L91 16L94 16L91 15z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M183 15L184 16L183 15z"/>
<path style="fill:#ce9411; stroke:none;" d="M69 16L70 17L69 16z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M185 16L186 17L185 16z"/>
<path style="fill:#ce9411; stroke:none;" d="M67.6667 17.3333L68.3333 17.6667L67.6667 17.3333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M186 17L186 18L189 19L186 17z"/>
<path style="fill:#ce9411; stroke:none;" d="M65.6667 18.3333L66.3333 18.6667L65.6667 18.3333M187 18L188 19L187 18z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M62 19L59 21L59 22L63 20L62 19z"/>
<path style="fill:#ce9411; stroke:none;" d="M63.6667 19.3333L64.3333 19.6667L63.6667 19.3333M188 19L188 20L191 21L188 19z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M190 19L191 20L190 19z"/>
<path style="fill:#ce9411; stroke:none;" d="M62 20L63 21L62 20z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M191 20L191 21L194 22L191 20z"/>
<path style="fill:#ce9411; stroke:none;" d="M60 21L61 22L60 21M192 21L193 22L192 21z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M57 22L56 24L57 22z"/>
<path style="fill:#ce9411; stroke:none;" d="M58.6667 22.3333L59.3333 22.6667L58.6667 22.3333M193 22L193 23L197 25L193 22z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M195 22L196 23L195 22z"/>
<path style="fill:#ce9411; stroke:none;" d="M57 23L58 24L57 23z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M196 23L197 24L196 23M54 24L52 27L54 24z"/>
<path style="fill:#ce9411; stroke:none;" d="M54 26L57 24L54 26z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M197 24L198 25L197 24z"/>
<path style="fill:#f5d947; stroke:none;" d="M123 25L122 26L127 30L127 29L124 29L127 26L123 25z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M124.667 25.3333L125.333 25.6667L124.667 25.3333z"/>
<path style="fill:#ce9411; stroke:none;" d="M198 25L211.715 38.0147L231 60C223.456 46.4622 211.51 32.7719 198 25z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M199 25L200 26L199 25z"/>
<path style="fill:#ce9411; stroke:none;" d="M53 26L54 27L53 26z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M123 26L124 27L123 26z"/>
<path style="fill:#ce9411; stroke:none;" d="M126 26L127 27L126 26z"/>
<path style="fill:#f5d947; stroke:none;" d="M144 26L146 28L144 26z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M200 26L201 27L200 26M50 27L47 31L50 27z"/>
<path style="fill:#ce9411; stroke:none;" d="M48 31L53 27L48 31z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M122 27L127 31L127 30L122 27z"/>
<path style="fill:#ce9411; stroke:none;" d="M143 27L144 28L143 27z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M144 27L141 32L145 33L146 33L144 27M202 27L203 28L202 27z"/>
<path style="fill:#ce9411; stroke:none;" d="M47 42L65 29C58.0136 27.8582 50.5945 36.8978 47 42z"/>
<path style="fill:#f5d947; stroke:none;" d="M79 37L83 28C77.8639 29.1208 77.6447 32.3727 79 37M142 28L143 29L142 28z"/>
<path style="fill:#ce9411; stroke:none;" d="M145 28L146 29L145 28z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M203 28L204 29L203 28z"/>
<path style="fill:#f5d947; stroke:none;" d="M63.6667 29.3333L64.3333 29.6667L63.6667 29.3333M107 29C105.89 34.8686 103.976 50.2894 112 52L110 57L116 59L113 30L111 30L108 47L110 29L107 29z"/>
<path style="fill:#ce9411; stroke:none;" d="M144 29L145 30L144 29z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M204 29L205 30L204 29z"/>
<path style="fill:#f5d947; stroke:none;" d="M62 30L63 31L62 30M122 30L123 31L122 30M141 30L142 31L141 30z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M205 30L206 31L205 30M45 31L33 44L45 31z"/>
<path style="fill:#ce9411; stroke:none;" d="M242 167L241 167C232.255 181.986 225.709 197.643 212.545 209.634C203.422 217.945 192.051 223.584 182 230.545C169.668 239.086 150.631 247.399 135 244L135 243C139.915 243 146.866 244.436 150 240L154 241C158.99 235.58 165.566 236.196 171.83 233.698C182.973 229.256 195.045 221.873 202 212C188.7 217.926 178.172 228.259 164 233.302C133.866 244.025 99.1154 240.28 71 225.742C61.1489 220.647 53.6645 212.007 44 207L53 220L48 214L38 208L41 204C35.9753 193.03 26.4548 184.294 21.439 173C10.2684 147.848 7.85916 120.521 15.4275 94C18.2311 84.1753 24.1685 75.6261 27 66L25 65L24 65L14 83C18.9904 61.4394 35.9301 48.1346 48 31C36.6278 36.3033 27.2911 50.4678 21.0139 61C0.958149 94.6505 -2.952 137.923 13.3117 174C46.6783 248.015 143.184 271.596 206 219.245C221.798 206.079 236.491 187.142 242 167z"/>
<path style="fill:#f5d947; stroke:none;" d="M60 31L61 32L60 31M89 31L89 32L92 32L89 31M124 31L125 32L124 31M143 31L144 32L143 31z"/>
<path style="fill:#ce9411; stroke:none;" d="M144 31L145 32L144 31z"/>
<path style="fill:#f5d947; stroke:none;" d="M161.667 31.3333L162.333 31.6667L161.667 31.3333M59 32L60 33L59 32M87 32L88 33L87 32z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M87 33L89 38L93 37L92 32L87 33z"/>
<path style="fill:#f5d947; stroke:none;" d="M141 32L142 33L141 32M146 32L147 33L146 32z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M161 32L160 37L161 37L161 35L162 35L163 38L164 38L166 33L163 35L161 32M208 32L209 33L208 32z"/>
<path style="fill:#f5d947; stroke:none;" d="M57.6667 33.3333L58.3333 33.6667L57.6667 33.3333M89 33L90 34L89 33z"/>
<path style="fill:#ce9411; stroke:none;" d="M90 33L91 34L90 33z"/>
<path style="fill:#f5d947; stroke:none;" d="M92.3333 33.6667L92.6667 34.3333L92.3333 33.6667M160 33L161 34L160 33z"/>
<path style="fill:#ce9411; stroke:none;" d="M164 33L165 34L164 33z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M209 33L210 34L209 33z"/>
<path style="fill:#f5d947; stroke:none;" d="M56 34L57 35L56 34z"/>
<path style="fill:#ce9411; stroke:none;" d="M87 34L88 35L87 34z"/>
<path style="fill:#f5d947; stroke:none;" d="M163 34L164 35L163 34z"/>
<path style="fill:#ce9411; stroke:none;" d="M165 34L166 35L165 34z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M210 34L211 35L210 34z"/>
<path style="fill:#f5d947; stroke:none;" d="M55 35L56 36L55 35M87 35L88 36L87 35M93 35L94 36L93 35M159 35L160 36L159 35z"/>
<path style="fill:#ce9411; stroke:none;" d="M161 35L162 36L161 35M197 35L197 36L221 60C217.224 50.2379 206.829 38.7753 197 35z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M211 35L212 36L211 35z"/>
<path style="fill:#f5d947; stroke:none;" d="M48 49C54.2628 46.7042 53.0232 41.364 55 36C48.9649 38.8541 48.5402 42.9248 48 49M76.3333 36.6667L76.6667 37.3333L76.3333 36.6667M89 39L92 36L89 39z"/>
<path style="fill:#ce9411; stroke:none;" d="M93 36L94 37L93 36M159 36L160 37L159 36z"/>
<path style="fill:#f5d947; stroke:none;" d="M161 36L162 37L161 36M197 36L198 37L197 36z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M212 36L213 37L212 36z"/>
<path style="fill:#f5d947; stroke:none;" d="M88 37L89 38L88 37M92 37L93 38L92 37M159.667 37.3333L160.333 37.6667L159.667 37.3333M164 37L165 38L164 37M198.667 37.3333L199.333 37.6667L198.667 37.3333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M213 37L214 38L213 37z"/>
<path style="fill:#f5d947; stroke:none;" d="M162 38L163 39L162 38z"/>
<path style="fill:#ce9411; stroke:none;" d="M163 38L164 39L163 38z"/>
<path style="fill:#f5d947; stroke:none;" d="M200 38L201 39L200 38z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M214 38L215 39L214 38z"/>
<path style="fill:#f5d947; stroke:none;" d="M201 39L202 40L201 39z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M215 39L216 40L215 39z"/>
<path style="fill:#f5d947; stroke:none;" d="M71 40L70 44L71 44L71 40M179 40L182 43L179 40M202 40L203 41L202 40z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M216 40L217 41L216 40M71 41L72 47L77 45L77 44L71 41z"/>
<path style="fill:#f5d947; stroke:none;" d="M73 41L74 42L73 41z"/>
<path style="fill:#ce9411; stroke:none;" d="M178 41L179 42L178 41z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M179 41L177 45L179 47L183 43L179 41z"/>
<path style="fill:#f5d947; stroke:none;" d="M203 41L204 42L203 41z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M217 41L218 42L217 41z"/>
<path style="fill:#f5d947; stroke:none;" d="M74 42L75 43L74 42M177 42L178 43L177 42z"/>
<path style="fill:#ce9411; stroke:none;" d="M182 42L183 43L182 42z"/>
<path style="fill:#f5d947; stroke:none;" d="M183.333 42.6667L183.667 43.3333L183.333 42.6667M204 42L205 43L204 42z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M218 42L219 43L218 42z"/>
<path style="fill:#ce9411; stroke:none;" d="M180 43L181 44L180 43z"/>
<path style="fill:#f5d947; stroke:none;" d="M205 43L206 44L205 43z"/>
<path style="fill:#ce9411; stroke:none;" d="M43 44L44 45L43 44z"/>
<path style="fill:#fbf18c; stroke:none;" d="M51.3333 44.6667L51.6667 45.3333L51.3333 44.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M176 44L176 45L179 45L179 44L176 44M182 44L183 45L182 44z"/>
<path style="fill:#f5d947; stroke:none;" d="M206 44L207 45L206 44z"/>
<path style="fill:#ce9411; stroke:none;" d="M42 45L43 46L42 45M71 45L72 46L71 45z"/>
<path style="fill:#f5d947; stroke:none;" d="M73.3333 45.6667L73.6667 46.3333L73.3333 45.6667M75.6667 45.3333L76.3333 45.6667L75.6667 45.3333M85 45C84.1499 49.5519 84.8784 53.5056 89 56L87 45L85 45M176 45L177 46L176 45M178 45L179 46L178 45M207 45L208 46L207 45z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M220 45L221 46L220 45M31 46L32 47L31 46z"/>
<path style="fill:#ce9411; stroke:none;" d="M41 46L42 47L41 46z"/>
<path style="fill:#f5d947; stroke:none;" d="M71.3333 46.6667L71.6667 47.3333L71.3333 46.6667M181 46L182 47L181 46M208 46L209 47L208 46z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M221 46L222 47L221 46M30 47L31 48L30 47z"/>
<path style="fill:#ce9411; stroke:none;" d="M40 47L38 51L40 47M72 47L73 48L72 47z"/>
<path style="fill:#f5d947; stroke:none;" d="M179 47L180 48L179 47z"/>
<path style="fill:#ce9411; stroke:none;" d="M180 47L181 48L180 47z"/>
<path style="fill:#f5d947; stroke:none;" d="M209 47L210 48L209 47z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M222 47L223 48L222 47M29 48L30 49L29 48z"/>
<path style="fill:#fbf18c; stroke:none;" d="M42 48L45 50L42 48z"/>
<path style="fill:#f5d947; stroke:none;" d="M210 48L211 49L210 48z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M223 48L224 49L223 48M28 49L29 50L28 49z"/>
<path style="fill:#fbf18c; stroke:none;" d="M111 49L111 51L113 51L113 49L111 49z"/>
<path style="fill:#f5d947; stroke:none;" d="M117 49L119 55L118 57L120 63L121 63L123 57L117 49M126 49L124 54L125 54L127 50L129 55L130 55L128 49L126 49M211 49L212 50L211 49z"/>
<path style="fill:#ce9411; stroke:none;" d="M126 50L127 51L126 50z"/>
<path style="fill:#f5d947; stroke:none;" d="M212 50L213 51L212 50z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M224 50L225 51L224 50M27 51L28 52L27 51z"/>
<path style="fill:#ce9411; stroke:none;" d="M37 51L38 52L37 51z"/>
<path style="fill:#fbf18c; stroke:none;" d="M42 51L43 52L42 51z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M126 51C112.049 80.4762 111.634 110.191 113 142L112 142C105.317 123.747 84.0185 99.5964 65 94C69.863 120.101 80.1368 137.738 94 160C80.6029 153.659 60.8809 146.601 46 151C58.2619 168.407 81.8789 182.154 103 185L103 186L77 196C90.599 204.146 111.078 193.624 124 189L124.001 212.999L126.17 219.654L128.999 212L129 188C143.381 196.392 160.521 200.059 177 197L177 196L150 186L150 185C171.312 182.128 194.62 168.575 207 151C189.509 151 175.329 153.667 159 160C173.618 141.58 187.499 118.259 188 94C169.602 99.8627 148.546 123.121 142 141L141 141C141.001 130.31 142.646 119.737 141.91 109C140.5 88.397 134.583 70.3386 128 51L126 51M225 51L226 52L225 51M26 52L27 53L26 52z"/>
<path style="fill:#ce9411; stroke:none;" d="M36 52L37 53L36 52z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M226 52L227 53L226 52z"/>
<path style="fill:#ce9411; stroke:none;" d="M35 53C31.4616 56.3372 25.3642 60.7009 28 66L35 53z"/>
<path style="fill:#f5d947; stroke:none;" d="M195 53L195 54L197 56L198 56L195 53M214 53L215 54L214 53z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M25 54L26 55L25 54z"/>
<path style="fill:#f5d947; stroke:none;" d="M54 54L55 55L54 54z"/>
<path style="fill:#ce9411; stroke:none;" d="M55 54L56 55L55 54z"/>
<path style="fill:#f5d947; stroke:none;" d="M56 54L57 55L56 54z"/>
<path style="fill:#ce9411; stroke:none;" d="M124 54L125 55L124 54z"/>
<path style="fill:#f5d947; stroke:none;" d="M193 54L194 55L193 54z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M191 56L195 60L197 54L191 56z"/>
<path style="fill:#f5d947; stroke:none;" d="M215 54L216 55L215 54z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M227 54L228 55L227 54M24 55L25 56L24 55M54 55C56.4844 57.8854 58.0757 58.69 61 56L54 55z"/>
<path style="fill:#f5d947; stroke:none;" d="M60 55L62 57L62 55L60 55M123 55L124 56L123 55z"/>
<path style="fill:#ce9411; stroke:none;" d="M129 55L130 56L129 55z"/>
<path style="fill:#f5d947; stroke:none;" d="M151 55L152 63C154.998 59.7967 155.404 56.7762 151 55M191 55L192 56L191 55M216 55L217 56L216 55z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M228 55L229 56L228 55M23 56L24 57L23 56z"/>
<path style="fill:#fbf18c; stroke:none;" d="M35 59L38 56L35 59z"/>
<path style="fill:#f5d947; stroke:none;" d="M59 56L60 57L59 56z"/>
<path style="fill:#ce9411; stroke:none;" d="M123 56L124 57L123 56z"/>
<path style="fill:#f5d947; stroke:none;" d="M130 56L131 57L130 56M60 57L61 58L60 57z"/>
<path style="fill:#ce9411; stroke:none;" d="M130 57L131 58L130 57z"/>
<path style="fill:#f5d947; stroke:none;" d="M191 57L191 58L194 58L191 57M196 57L197 58L196 57M217 57L218 58L217 57z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M229 57L230 58L229 57M22 58L23 59L22 58z"/>
<path style="fill:#f5d947; stroke:none;" d="M59 58L60 59L59 58z"/>
<path style="fill:#ce9411; stroke:none;" d="M122 58L123 59L122 58z"/>
<path style="fill:#f5d947; stroke:none;" d="M131.333 58.6667L131.667 59.3333L131.333 58.6667M218 58L219 59L218 58z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M230 58L231 59L230 58M21.3333 59.6667L21.6667 60.3333L21.3333 59.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M58 59L59 60L58 59M193 59L194 60L193 59M195 59L196 60L195 59M219 59L220 60L219 59M114 60L116 66L117 66L114 60M164 66L172 63C168.363 59.6713 165.879 62.1156 164 66z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M231 60L233 62L231 60M20 61L21 62L20 61z"/>
<path style="fill:#ce9411; stroke:none;" d="M121 61L122 62L121 61z"/>
<path style="fill:#f5d947; stroke:none;" d="M132 61L133 62L132 61z"/>
<path style="fill:#fbf18c; stroke:none;" d="M224 61L228 70L233 68C231.202 63.4126 228.961 61.3772 224 61z"/>
<path style="fill:#ce9411; stroke:none;" d="M231 61L232 62L231 61M132 62L133 63L132 62M232 62L233 63L232 62z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M19 63L20 64L19 63z"/>
<path style="fill:#ce9411; stroke:none;" d="M120 63L121 64L120 63z"/>
<path style="fill:#f5d947; stroke:none;" d="M133.333 63.6667L133.667 64.3333L133.333 63.6667z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M233 63L239 76L240 76L233 63z"/>
<path style="fill:#f5d947; stroke:none;" d="M119.333 64.6667L119.667 65.3333L119.333 64.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M233 64L234 65L233 64z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M18 65L19 66L18 65z"/>
<path style="fill:#f5d947; stroke:none;" d="M49 65L50 66L49 65z"/>
<path style="fill:#ce9411; stroke:none;" d="M133 65L134 66L133 65z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M17.3333 66.6667L17.6667 67.3333L17.3333 66.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M119 66L120 67L119 66z"/>
<path style="fill:#f5d947; stroke:none;" d="M134.333 66.6667L134.667 67.3333L134.333 66.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M234 66L235 67L234 66z"/>
<path style="fill:#f5d947; stroke:none;" d="M118.333 67.6667L118.667 68.3333L118.333 67.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M126 67L128 69L126 67z"/>
<path style="fill:#f5d947; stroke:none;" d="M204 68L204 69L210 72C210.875 67.8412 207.375 67.2475 204 68z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M16 68L17 69L16 68z"/>
<path style="fill:#fbf18c; stroke:none;" d="M29 68L30 69L29 68z"/>
<path style="fill:#f5d947; stroke:none;" d="M42 68L42 72L43 72L42 68M126 68L128 70L126 68z"/>
<path style="fill:#ce9411; stroke:none;" d="M134 68L135 69L134 68z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M205 73L206 73L205 70L209 71C209.605 67.3323 203.888 67.9789 205 73z"/>
<path style="fill:#ce9411; stroke:none;" d="M235 68L236 69L235 68z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M42 69C44.0369 72.2322 46.5234 73.2972 49 70L42 69z"/>
<path style="fill:#f5d947; stroke:none;" d="M44 69L45 70L44 69M47.3333 69.6667L47.6667 70.3333L47.3333 69.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M48 69L49 70L48 69z"/>
<path style="fill:#f5d947; stroke:none;" d="M49.3333 69.6667L49.6667 70.3333L49.3333 69.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M118.333 69.6667L118.667 70.3333L118.333 69.6667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M126 69C120.202 94.2934 116.417 119.032 120.59 145C121.836 152.759 122.761 162.256 127 169C135.692 146.292 136.987 117.816 133.08 94C131.813 86.2717 131.29 75.0561 126 69z"/>
<path style="fill:#f5d947; stroke:none;" d="M135.333 69.6667L135.667 70.3333L135.333 69.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M206 69L207 70L206 69z"/>
<path style="fill:#f5d947; stroke:none;" d="M207 69L209 71L207 69z"/>
<path style="fill:#ce9411; stroke:none;" d="M208 69L209 70L208 69z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M15 70L16 71L15 70z"/>
<path style="fill:#fbf18c; stroke:none;" d="M31 70L32 71L31 70z"/>
<path style="fill:#f5d947; stroke:none;" d="M45 70L46 71L45 70M103 70L104 71L103 70M125.333 70.6667L125.667 71.3333L125.333 70.6667M203 70L204 71L203 70z"/>
<path style="fill:#ce9411; stroke:none;" d="M205 70L206 71L205 70M236 70L237 71L236 70M43 71L44 72L43 71z"/>
<path style="fill:#f5d947; stroke:none;" d="M48 71L49 72L48 71M117.333 71.6667L117.667 72.3333L117.333 71.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M128 71L129 72L128 71M135 71L136 72L135 71z"/>
<path style="fill:#f5d947; stroke:none;" d="M205 71L206 72L205 71z"/>
<path style="fill:#ce9411; stroke:none;" d="M209 71L210 72L209 71z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M14.3333 72.6667L14.6667 73.3333L14.3333 72.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M44 72L45 73L44 72z"/>
<path style="fill:#f5d947; stroke:none;" d="M128 72L129 73L128 72M161 72L161 73L164 73L161 72M204 72L205 73L204 72z"/>
<path style="fill:#ce9411; stroke:none;" d="M206.333 72.6667L206.667 73.3333L206.333 72.6667M237 72L238 73L237 72z"/>
<path style="fill:#f5d947; stroke:none;" d="M45.6667 73.3333L46.3333 73.6667L45.6667 73.3333z"/>
<path style="fill:#ce9411; stroke:none;" d="M117 73L118 74L117 73z"/>
<path style="fill:#f5d947; stroke:none;" d="M124.333 73.6667L124.667 74.3333L124.333 73.6667M136.333 73.6667L136.667 74.3333L136.333 73.6667M205 73L206 74L205 73M207 73L208 74L207 73z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M13.3333 74.6667L13.6667 75.3333L13.3333 74.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M116 74L116 77L117 77L116 74z"/>
<path style="fill:#ce9411; stroke:none;" d="M129 74L130 75L129 74M238 74L239 75L238 74z"/>
<path style="fill:#f5d947; stroke:none;" d="M129.333 75.6667L129.667 76.3333L129.333 75.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M136 75L137 76L136 75z"/>
<path style="fill:#fbf18c; stroke:none;" d="M234 75L233 77L235 77L234 75z"/>
<path style="fill:#ce9411; stroke:none;" d="M123 76L124 77L123 76z"/>
<path style="fill:#f5d947; stroke:none;" d="M137 76L137 79L138 79L137 76z"/>
<path style="fill:#ce9411; stroke:none;" d="M239 76L241 83L242 83L239 76z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M12 77L13 78L12 77z"/>
<path style="fill:#ce9411; stroke:none;" d="M116 77L117 78L116 77z"/>
<path style="fill:#f5d947; stroke:none;" d="M123.333 77.6667L123.667 78.3333L123.333 77.6667z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M240 77L241 78L240 77z"/>
<path style="fill:#f5d947; stroke:none;" d="M115 78L115 81L116 81L115 78z"/>
<path style="fill:#ce9411; stroke:none;" d="M130 78L131 79L130 78z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M11.3333 79.6667L11.6667 80.3333L11.3333 79.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M48 84C51.2649 85.1935 58.6892 95.961 60 90L61 90L64 96L65 96L65 93L74 98L72 96L72 95L74 91L71 95L66 91L74 88L70 83L69 83L67 85L68 82C61.3991 80.2201 58.643 82.3399 61 89L60 89L55 80C50.8358 79.3544 48.7473 79.5353 48 84M130.333 79.6667L130.667 80.3333L130.333 79.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M137 79L138 80L137 79z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M241.333 79.6667L241.667 80.3333L241.333 79.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M122 80L123 81L122 80z"/>
<path style="fill:#f5d947; stroke:none;" d="M138 80L138 83L139 83L138 80M73 81L74 82L73 81z"/>
<path style="fill:#ce9411; stroke:none;" d="M115 81L116 82L115 81z"/>
<path style="fill:#f5d947; stroke:none;" d="M122 81L122 84L123 84L122 81z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M10 82L11 83L10 82z"/>
<path style="fill:#fbf18c; stroke:none;" d="M50.6667 82.3333L51.3333 82.6667L50.6667 82.3333z"/>
<path style="fill:#f5d947; stroke:none;" d="M108 82L109 91L113 92L115 83L114 83L113 85L108 82z"/>
<path style="fill:#ce9411; stroke:none;" d="M131 82L132 83L131 82z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M242.333 82.6667L242.667 83.3333L242.333 82.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M34 83L33 85L34 83z"/>
<path style="fill:#f5d947; stroke:none;" d="M131.333 83.6667L131.667 84.3333L131.333 83.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M138 83L139 84L138 83z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M34 84C33.4437 87.6511 34.6856 88.5928 38 90L40 86L38 88L37 88L37 85L36 85L36 87L34 84z"/>
<path style="fill:#ce9411; stroke:none;" d="M121 84L122 85L121 84M242.333 84.6667L242.667 85.3333L242.333 84.6667z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M9 85L10 86L9 85z"/>
<path style="fill:#ce9411; stroke:none;" d="M35.3333 85.6667L35.6667 86.3333L35.3333 85.6667M114.333 85.6667L114.667 86.3333L114.333 85.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M121 85L121 88L122 88L121 85M139 85L139 88L140 88L139 85z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M214.846 86.0818C212.583 87.9184 215.982 91.6851 218.215 89.9182C220.596 88.0328 217.072 84.2764 214.846 86.0818M243.333 85.6667L243.667 86.3333L243.333 85.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M32.3333 86.6667L32.6667 87.3333L32.3333 86.6667M213 86L214 87L213 86M216 86L217 87L216 86M37 87L38 88L37 87M132 87L133 88L132 87z"/>
<path style="fill:#f5d947; stroke:none;" d="M215 87L215 89L218 89L218 87L215 87z"/>
<path style="fill:#ce9411; stroke:none;" d="M243 87L247.961 114L244 160L245 160C249.385 138.744 255.463 106.829 243 87z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M8 88L9 89L8 88z"/>
<path style="fill:#ce9411; stroke:none;" d="M33 88L34 89L33 88z"/>
<path style="fill:#f5d947; stroke:none;" d="M132 88L132 91L133 91L132 88z"/>
<path style="fill:#ce9411; stroke:none;" d="M139.333 88.6667L139.667 89.3333L139.333 88.6667M213 88L214 89L213 88z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M244.333 88.6667L244.667 89.3333L244.333 88.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M36 89L37 90L36 89z"/>
<path style="fill:#fbf18c; stroke:none;" d="M40 89L41 90L40 89z"/>
<path style="fill:#ce9411; stroke:none;" d="M120.333 89.6667L120.667 90.3333L120.333 89.6667M216 89L217 90L216 89M219 89L220 90L219 89z"/>
<path style="fill:#fbf18c; stroke:none;" d="M34 90L34 91L38 92L38 91L34 90z"/>
<path style="fill:#f5d947; stroke:none;" d="M70 90L69 93L70 90M140 90L140 94L141 94L140 90z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M7.33333 91.6667L7.66667 92.3333L7.33333 91.6667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M20 93L23 91L20 93z"/>
<path style="fill:#ce9411; stroke:none;" d="M113.333 91.6667L113.667 92.3333L113.333 91.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M120 91L120 94L121 94L120 91z"/>
<path style="fill:#ce9411; stroke:none;" d="M216 91L217 92L216 91z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M245.333 91.6667L245.667 92.3333L245.333 91.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M11 92C6.4904 99.8195 5.70012 110.129 5 119L8 119L11 92z"/>
<path style="fill:#ce9411; stroke:none;" d="M133.333 92.6667L133.667 93.3333L133.333 92.6667M236 92L237 93L236 92M65 93L66 94L65 93z"/>
<path style="fill:#f5d947; stroke:none;" d="M186 93L187 94L186 93z"/>
<path style="fill:#ce9411; stroke:none;" d="M187 93L188 94L187 93z"/>
<path style="fill:#f5d947; stroke:none;" d="M53 94L59 98L53 94z"/>
<path style="fill:#ce9411; stroke:none;" d="M67 94L68 95L67 94z"/>
<path style="fill:#f5d947; stroke:none;" d="M112 94L112 98L113 98L112 94M133 94L133 97L134 97L133 94z"/>
<path style="fill:#ce9411; stroke:none;" d="M140.333 94.6667L140.667 95.3333L140.333 94.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M184 94L185 95L184 94z"/>
<path style="fill:#ce9411; stroke:none;" d="M185 94L186 95L185 94z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M246 94L246 97L247 97L246 94M6.33333 95.6667L6.66667 96.3333L6.33333 95.6667z"/>
<path style="fill:#ce9411; stroke:none;" d="M69 95L70 96L69 95z"/>
<path style="fill:#f5d947; stroke:none;" d="M165 95L160 114L178 100L165 95M183 95L184 96L183 95z"/>
<path style="fill:#ce9411; stroke:none;" d="M65 96L65 99L66 99L65 96M71 96L72 97L71 96z"/>
<path style="fill:#f5d947; stroke:none;" d="M105 96L104 100L105 100L105 96z"/>
<path style="fill:#ce9411; stroke:none;" d="M119.333 96.6667L119.667 97.3333L119.333 96.6667z"/>
<path style="fill:#f5d947; stroke:none;" d="M181 96L182 97L181 96z"/>
<path style="fill:#ce9411; stroke:none;" d="M182 96L183 97L182 96M72 97L73 98L72 97z"/>
<path style="fill:#f5d947; stroke:none;" d="M141 97L141 103L142 103L141 97M180 97L181 98L180 97z"/>
<path style="fill:#fbf18c; stroke:none;" d="M37 102L42 107L46 102L45 98L37 102z"/>
<path style="fill:#f5d947; stroke:none;" d="M74 98L74 99L77 100L74 98z"/>
<path style="fill:#ce9411; stroke:none;" d="M112 98L112 101L113 101L112 98z"/>
<path style="fill:#f5d947; stroke:none;" d="M119 98L119 102L120 102L119 98M178 98L179 99L178 98z"/>
<path style="fill:#ce9411; stroke:none;" d="M179 98L180 99L179 98M238 98L238 101L239 101L238 98z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M5 99L5 102L6 102L5 99z"/>
<path style="fill:#fbf18c; stroke:none;" d="M50 105L55 100C51.3585 100.164 50.5639 101.474 50 105z"/>
<path style="fill:#f5d947; stroke:none;" d="M65 99L65 103L66 103L65 99z"/>
<path style="fill:#ce9411; stroke:none;" d="M75 99L76 100L75 99z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M247 99L247 102L248 102L247 99z"/>
<path style="fill:#f5d947; stroke:none;" d="M42.6667 100.333L43.3333 100.667L42.6667 100.333M77 100L78 101L77 100z"/>
<path style="fill:#ce9411; stroke:none;" d="M134.333 100.667L134.667 101.333L134.333 100.667M176 100L177 101L176 100M187.333 100.667L187.667 101.333L187.333 100.667M78 101L80 103L78 101z"/>
<path style="fill:#f5d947; stroke:none;" d="M79 101L80 102L79 101z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M27 102L27 106L33 106L27 102z"/>
<path style="fill:#f5d947; stroke:none;" d="M80 102L81 103L80 102M134 102L134 108L135 108L134 102M146 112L143 107L142 107L141 140L142 140L156 119C149.125 118.102 155.565 105.979 156 102C149.438 102.077 144.051 104.592 146 112z"/>
<path style="fill:#ce9411; stroke:none;" d="M173 102L174 103L173 102M66.3333 103.667L66.6667 104.333L66.3333 103.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M81 103L82 104L81 103M111 103L111 112L112 112L111 103z"/>
<path style="fill:#ce9411; stroke:none;" d="M141 103L141 106L142 106L141 103M172 103L173 104L172 103z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M219 106L225 103L219 106M4 104L4 108L5 108L4 104z"/>
<path style="fill:#f5d947; stroke:none;" d="M82 104L83 105L82 104z"/>
<path style="fill:#ce9411; stroke:none;" d="M171 104L172 105L171 104M239 104L239 107L240 107L239 104z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M248 104L248 108L249 108L248 104z"/>
<path style="fill:#ce9411; stroke:none;" d="M26 105L26 107L28 107L26 105M29 105L30 106L29 105M33 105L34 106L33 105z"/>
<path style="fill:#f5d947; stroke:none;" d="M66 105L66 108L67 108L66 105z"/>
<path style="fill:#ce9411; stroke:none;" d="M83 105L87 109L83 105z"/>
<path style="fill:#f5d947; stroke:none;" d="M84 105L85 106L84 105z"/>
<path style="fill:#ce9411; stroke:none;" d="M118 105L118 108L119 108L118 105M186.333 105.667L186.667 106.333L186.333 105.667M221 105L221 106L224 106L221 105z"/>
<path style="fill:#f5d947; stroke:none;" d="M28 106L29 107L28 106M58 107L58 108L63 109L58 107M85 106L86 107L85 106M25.6667 107.333L26.3333 107.667L25.6667 107.333M86 107L87 108L86 107z"/>
<path style="fill:#ce9411; stroke:none;" d="M67 108L68 109L67 108z"/>
<path style="fill:#f5d947; stroke:none;" d="M87 108L88 109L87 108M118 108L118 130L119 130L118 108z"/>
<path style="fill:#ce9411; stroke:none;" d="M166 108L167 109L166 108M240 108C240.078 136.175 239.063 160.121 223.575 185C217.37 194.967 208.663 202.541 202 212C225.627 195.422 235.697 170.627 241 143C242.85 133.362 244.762 116.958 240 108z"/>
<path style="fill:#f5d947; stroke:none;" d="M67 109L68 112L67 109M88 109L89 110L88 109z"/>
<path style="fill:#ce9411; stroke:none;" d="M165 109L166 110L165 109z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M3 110L3 118L4 118L3 110z"/>
<path style="fill:#fbf18c; stroke:none;" d="M48.3333 110.667L48.6667 111.333L48.3333 110.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M89 110L90 111L89 110z"/>
<path style="fill:#ce9411; stroke:none;" d="M164 110L165 111L164 110M185 110L186 111L185 110z"/>
<path style="fill:#f5d947; stroke:none;" d="M90 111L91 112L90 111z"/>
<path style="fill:#ce9411; stroke:none;" d="M163 111L164 112L163 111z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M249 111L249 120L250 120L249 111z"/>
<path style="fill:#ce9411; stroke:none;" d="M68 112L69 113L68 112z"/>
<path style="fill:#f5d947; stroke:none;" d="M91 112L92 113L91 112z"/>
<path style="fill:#ce9411; stroke:none;" d="M111 112L111 125L112 125L111 112M162 112L163 113L162 112z"/>
<path style="fill:#f5d947; stroke:none;" d="M68.3333 113.667L68.6667 114.333L68.3333 113.667M92 113L93 114L92 113M110 113L111 114L110 113z"/>
<path style="fill:#ce9411; stroke:none;" d="M161 113L162 114L161 113M184 113L185 114L184 113z"/>
<path style="fill:#f5d947; stroke:none;" d="M93 114L95 116L93 114z"/>
<path style="fill:#ce9411; stroke:none;" d="M135 114L135 124L136 124L135 114M160 114L161 115L160 114z"/>
<path style="fill:#f5d947; stroke:none;" d="M44 115L45 118L49 117L44 115z"/>
<path style="fill:#ce9411; stroke:none;" d="M69 115L70 116L69 115M93 115L94 116L93 115z"/>
<path style="fill:#f5d947; stroke:none;" d="M159 115L160 116L159 115M69 116L70 117L69 116z"/>
<path style="fill:#ce9411; stroke:none;" d="M94 116L95 117L94 116z"/>
<path style="fill:#f5d947; stroke:none;" d="M109 116L110 120L111 120L109 116M158 116L159 117L158 116z"/>
<path style="fill:#ce9411; stroke:none;" d="M183 116L184 117L183 116M95 117L96 118L95 117z"/>
<path style="fill:#fbf18c; stroke:none;" d="M143 117L143 123L144 123L143 117z"/>
<path style="fill:#f5d947; stroke:none;" d="M157 117L158 118L157 117z"/>
<path style="fill:#ce9411; stroke:none;" d="M70 118L71 119L70 118M96 118L97 119L96 118z"/>
<path style="fill:#f5d947; stroke:none;" d="M156 118L157 119L156 118M32 119L33 120L32 119M49 119L50 120L49 119M70 119L71 120L70 119M97 119L98 120L97 119z"/>
<path style="fill:#ce9411; stroke:none;" d="M182 119L183 120L182 119z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M221 119L221 124L227 124L227 119L221 119z"/>
<path style="fill:#ce9411; stroke:none;" d="M227.333 119.667L227.667 120.333L227.333 119.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M24 121L24 122L31 121L31 125L32 125L32 120L24 121M46.3333 120.667L46.6667 121.333L46.3333 120.667M98 120L99 121L98 120z"/>
<path style="fill:#ce9411; stroke:none;" d="M155 120L156 121L155 120M221 120L222 121L221 120z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M25 121L25 126L27 126L30 123L29 126L30 126L31 121L27 124L26 124L25 121z"/>
<path style="fill:#ce9411; stroke:none;" d="M26 121L26 124L27 124L28 121L26 121z"/>
<path style="fill:#f5d947; stroke:none;" d="M56 121L56 122L58 124L59 124L56 121M71.3333 121.667L71.6667 122.333L71.3333 121.667M99 121L100 122L99 121M110 121L111 135L112 135L110 121M134 121L134 135L135 135L134 121z"/>
<path style="fill:#ce9411; stroke:none;" d="M154 121L155 122L154 121M226 121L227 122L226 121M24 122L25 123L24 122M99 122L100 123L99 122M181 122L182 123L181 122M227.333 122.667L227.667 123.333L227.333 122.667M28 123L28 125L30 123L28 123M72 123L73 124L72 123M100 123L101 124L100 123M24 124L25 125L24 124z"/>
<path style="fill:#f5d947; stroke:none;" d="M72 124L73 125L72 124M101 124L102 125L101 124z"/>
<path style="fill:#ce9411; stroke:none;" d="M180 124L181 125L180 124M222 124L222 125L227 125L222 124M27 125L28 126L27 125z"/>
<path style="fill:#f5d947; stroke:none;" d="M102 125L103 126L102 125z"/>
<path style="fill:#ce9411; stroke:none;" d="M151 125L152 126L151 125z"/>
<path style="fill:#f5d947; stroke:none;" d="M73 126L71 135L72 135L76 132L73 126M103 126L104 127L103 126z"/>
<path style="fill:#ce9411; stroke:none;" d="M150 126L151 127L150 126z"/>
<path style="fill:#fbf18c; stroke:none;" d="M25 127L25 128L30 128L25 127z"/>
<path style="fill:#ce9411; stroke:none;" d="M103 127L104 128L103 127M74 128L75 129L74 128z"/>
<path style="fill:#f5d947; stroke:none;" d="M104 128L105 129L104 128M105 129L106 130L105 129z"/>
<path style="fill:#ce9411; stroke:none;" d="M148 129L149 130L148 129M178 129L179 130L178 129z"/>
<path style="fill:#fbf18c; stroke:none;" d="M189 129L190 130L189 129z"/>
<path style="fill:#f5d947; stroke:none;" d="M63 130L64 131L63 130z"/>
<path style="fill:#ce9411; stroke:none;" d="M75 130L76 131L75 130M105 130L106 131L105 130M118 130L118 134L119 134L118 130M141 130L141 134L142 134L141 130z"/>
<path style="fill:#fbf18c; stroke:none;" d="M179 137L179 131L178 131L161 159C167.218 156.45 177.3 154.955 182.485 150.861C188.498 146.114 180.798 138.365 192 138L188 150C194.266 149.848 208.019 140.525 201.551 133.359C196.196 127.426 184.174 133.464 179 137z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M249 130L249 139L250 139L249 130z"/>
<path style="fill:#f5d947; stroke:none;" d="M106 131L107 132L106 131z"/>
<path style="fill:#ce9411; stroke:none;" d="M177 131L178 132L177 131z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M3 132L3 138L4 138L3 132z"/>
<path style="fill:#fbf18c; stroke:none;" d="M24 135L23 135L17 134L17 135L25 139L29 136L29 132L25 132L24 135z"/>
<path style="fill:#ce9411; stroke:none;" d="M76 132L77 133L76 132z"/>
<path style="fill:#f5d947; stroke:none;" d="M107 132L108 135L109 135L107 132z"/>
<path style="fill:#ce9411; stroke:none;" d="M146 132L147 133L146 132z"/>
<path style="fill:#f5d947; stroke:none;" d="M177 132L178 133L177 132z"/>
<path style="fill:#fbf18c; stroke:none;" d="M43 133L43 136L44 136L43 133M49.6667 133.333L50.3333 133.667L49.6667 133.333z"/>
<path style="fill:#f5d947; stroke:none;" d="M76 133L77 134L76 133z"/>
<path style="fill:#ce9411; stroke:none;" d="M107 133L108 134L107 133M176 133L177 134L176 133z"/>
<path style="fill:#f5d947; stroke:none;" d="M73 137L78 136L73 137z"/>
<path style="fill:#ce9411; stroke:none;" d="M77 134L78 135L77 134z"/>
<path style="fill:#f5d947; stroke:none;" d="M176 134L177 135L176 134z"/>
<path style="fill:#fbf18c; stroke:none;" d="M38 135L34 139L38 135z"/>
<path style="fill:#f5d947; stroke:none;" d="M109 135L110 136L109 135z"/>
<path style="fill:#ce9411; stroke:none;" d="M134 135L134 138L135 138L134 135M144 135L145 136L144 135z"/>
<path style="fill:#f5d947; stroke:none;" d="M175.333 135.667L175.667 136.333L175.333 135.667M78 136L79 137L78 136z"/>
<path style="fill:#ce9411; stroke:none;" d="M109 136L110 137L109 136M112.333 136.667L112.667 137.333L112.333 136.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M41 137L41 140L43 139L43 138L41 137z"/>
<path style="fill:#f5d947; stroke:none;" d="M110 137L111 138L110 137M119 137L119 141L120 141L119 137z"/>
<path style="fill:#ce9411; stroke:none;" d="M143 137L144 138L143 137z"/>
<path style="fill:#f5d947; stroke:none;" d="M174.333 137.667L174.667 138.333L174.333 137.667M79 138L80 139L79 138z"/>
<path style="fill:#ce9411; stroke:none;" d="M110 138L111 139L110 138z"/>
<path style="fill:#f5d947; stroke:none;" d="M112 138L113 141L112 138M182 151L182 152L192 151L192 150L188 150L192 138C181.217 138.128 187.102 144.929 182 151M173 139L174 140L173 139M80 140L81 141L80 140M133 140L133 144L134 144L133 140z"/>
<path style="fill:#ce9411; stroke:none;" d="M141 140L142 141L141 140M172 140L173 141L172 140M81 141L82 142L81 141M112 141L113 142L112 141M119.333 141.667L119.667 142.333L119.333 141.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M172 141L173 142L172 141z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M4 142L4 146L5 146L4 142z"/>
<path style="fill:#fbf18c; stroke:none;" d="M39 142L37 147L39 142z"/>
<path style="fill:#f5d947; stroke:none;" d="M81 142L82 143L81 142z"/>
<path style="fill:#ce9411; stroke:none;" d="M171 142L172 143L171 142z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M248 142L248 146L249 146L248 142z"/>
<path style="fill:#fbf18c; stroke:none;" d="M22 143L23 144L22 143z"/>
<path style="fill:#f5d947; stroke:none;" d="M82 143L83 144L82 143z"/>
<path style="fill:#fbf18c; stroke:none;" d="M198 149C202.479 148.659 204.501 147.266 206 143L198 149z"/>
<path style="fill:#ce9411; stroke:none;" d="M83 144L84 145L83 144z"/>
<path style="fill:#f5d947; stroke:none;" d="M120 144L120 147L121 147L120 144z"/>
<path style="fill:#ce9411; stroke:none;" d="M133.333 144.667L133.667 145.333L133.333 144.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M170 144L171 145L170 144z"/>
<path style="fill:#fbf18c; stroke:none;" d="M29 145L29 147L31 147L29 145z"/>
<path style="fill:#f5d947; stroke:none;" d="M83 145L84 146L83 145z"/>
<path style="fill:#ce9411; stroke:none;" d="M169 145L170 146L169 145z"/>
<path style="fill:#f5d947; stroke:none;" d="M84 146L85 147L84 146z"/>
<path style="fill:#ce9411; stroke:none;" d="M85 147L86 148L85 147M120.333 147.667L120.667 148.333L120.333 147.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M168 147L169 148L168 147z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M5 148L5 151L6 151L5 148z"/>
<path style="fill:#f5d947; stroke:none;" d="M85 148L86 149L85 148M132.333 148.667L132.667 149.333L132.333 148.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M167 148L168 149L167 148z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M247 148L247 151L248 151L247 148z"/>
<path style="fill:#f5d947; stroke:none;" d="M45 152L46 152L60 150C56.5623 148.019 45.9973 147.346 45 152M83 149L78 153L78 154L86 156L86 155L83 154L83 149M86 149L87 150L86 149z"/>
<path style="fill:#fbf18c; stroke:none;" d="M36 150L35 152L37 152L36 150z"/>
<path style="fill:#ce9411; stroke:none;" d="M46 150L47 151L46 150M60 150L60 151L64 151L60 150z"/>
<path style="fill:#f5d947; stroke:none;" d="M64 150L64 151L67 151L64 150z"/>
<path style="fill:#ce9411; stroke:none;" d="M87 150L88 151L87 150z"/>
<path style="fill:#f5d947; stroke:none;" d="M121 150L121 153L122 153L121 150z"/>
<path style="fill:#ce9411; stroke:none;" d="M132 150L133 151L132 150z"/>
<path style="fill:#f5d947; stroke:none;" d="M166 150L167 151L166 150z"/>
<path style="fill:#ce9411; stroke:none;" d="M192 150L192 151L207 151L192 150M68.6667 151.333L69.3333 151.667L68.6667 151.333z"/>
<path style="fill:#f5d947; stroke:none;" d="M70.6667 151.333L71.3333 151.667L70.6667 151.333M87 151L88 152L87 151M165 151L166 152L165 151z"/>
<path style="fill:#ce9411; stroke:none;" d="M185 151L185 152L188 152L185 151z"/>
<path style="fill:#f5d947; stroke:none;" d="M46 152L47 153L46 152z"/>
<path style="fill:#ce9411; stroke:none;" d="M73 152L74 153L73 152z"/>
<path style="fill:#f5d947; stroke:none;" d="M74.6667 152.333L75.3333 152.667L74.6667 152.333M88 152L89 153L88 152z"/>
<path style="fill:#ce9411; stroke:none;" d="M164 152L165 153L164 152z"/>
<path style="fill:#f5d947; stroke:none;" d="M178.667 152.333L179.333 152.667L178.667 152.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M180.667 152.333L181.333 152.667L180.667 152.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M6.33333 153.667L6.66667 154.333L6.33333 153.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M47 153L48 154L47 153z"/>
<path style="fill:#ce9411; stroke:none;" d="M76.6667 153.333L77.3333 153.667L76.6667 153.333M89 153L91 155L89 153M121 153L122 154L121 153z"/>
<path style="fill:#f5d947; stroke:none;" d="M131.333 153.667L131.667 154.333L131.333 153.667M164 153L165 154L164 153M175.667 153.333L176.333 153.667L175.667 153.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M177 153L178 154L177 153z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M246 153L246 156L247 156L246 153z"/>
<path style="fill:#f5d947; stroke:none;" d="M48 154L49 155L48 154z"/>
<path style="fill:#ce9411; stroke:none;" d="M80 154L81 155L80 154z"/>
<path style="fill:#f5d947; stroke:none;" d="M89 154L90 155L89 154M163 154L164 155L163 154M172 154L173 155L172 154z"/>
<path style="fill:#ce9411; stroke:none;" d="M173 154L174 155L173 154M204 154L205 155L204 154z"/>
<path style="fill:#f5d947; stroke:none;" d="M49 155L50 156L49 155z"/>
<path style="fill:#ce9411; stroke:none;" d="M83 155L84 156L83 155z"/>
<path style="fill:#f5d947; stroke:none;" d="M90 155L91 156L90 155M122.333 155.667L122.667 156.333L122.333 155.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M131 155L132 156L131 155z"/>
<path style="fill:#f5d947; stroke:none;" d="M162 155L163 156L162 155M169 155L170 156L169 155z"/>
<path style="fill:#ce9411; stroke:none;" d="M170 155L171 156L170 155M203 155L204 156L203 155M50 156L51 157L50 156M86 156L87 157L86 156z"/>
<path style="fill:#f5d947; stroke:none;" d="M87 156L87 157L93 159L93 158L93 157L87 156M91 156L92 157L91 156z"/>
<path style="fill:#ce9411; stroke:none;" d="M161 156L162 157L161 156z"/>
<path style="fill:#f5d947; stroke:none;" d="M166.667 156.333L167.333 156.667L166.667 156.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M202 156L203 157L202 156z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M7.33333 157.667L7.66667 158.333L7.33333 157.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M25 157L25 160L27 157L25 157M32 157L27 164L32 157z"/>
<path style="fill:#f5d947; stroke:none;" d="M48 157L47 159L49 159L48 157z"/>
<path style="fill:#ce9411; stroke:none;" d="M51 157L52 158L51 157M61 157L61 158L64 158L61 157M88 157L89 158L88 157M122 157L123 158L122 157z"/>
<path style="fill:#f5d947; stroke:none;" d="M130.333 157.667L130.667 158.333L130.333 157.667M164 157L165 158L164 157z"/>
<path style="fill:#ce9411; stroke:none;" d="M165 157L166 158L165 157M190 157L191 158L190 157M201 157L202 158L201 157z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M245.333 157.667L245.667 158.333L245.333 157.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M52 158L53 159L52 158z"/>
<path style="fill:#f5d947; stroke:none;" d="M62 158L62 159L68 160L68 161L65 160C70.1261 166.187 79.3319 170.791 87 173L87 172L83 171L83 164C88.2994 166.106 89.8196 168.524 88 174L112 180C104.319 170.048 88.9814 163.772 77 161L77 162L79 162L79 163L76 160L62 158z"/>
<path style="fill:#ce9411; stroke:none;" d="M68.6667 158.333L69.3333 158.667L68.6667 158.333M90 158L91 159L90 158M93.3333 158.667L93.6667 159.333L93.3333 158.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M160 158L161 159L160 158M162 158L163 159L162 158z"/>
<path style="fill:#ce9411; stroke:none;" d="M184.667 158.333L185.333 158.667L184.667 158.333z"/>
<path style="fill:#f5d947; stroke:none;" d="M181 159L181 160L185 163L191 158L181 159z"/>
<path style="fill:#fbf18c; stroke:none;" d="M189 158L190 159L189 158z"/>
<path style="fill:#ce9411; stroke:none;" d="M200 158L201 159L200 158M53 159L54 160L53 159z"/>
<path style="fill:#fbf18c; stroke:none;" d="M64 159L64 160L68 161L68 160L64 159z"/>
<path style="fill:#ce9411; stroke:none;" d="M73 159L74 160L73 159z"/>
<path style="fill:#f5d947; stroke:none;" d="M123.333 159.667L123.667 160.333L123.333 159.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M130 159L131 160L130 159M159.667 159.333L160.333 159.667L159.667 159.333M180 159L181 160L180 159z"/>
<path style="fill:#fbf18c; stroke:none;" d="M187.667 159.333L188.333 159.667L187.667 159.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M199 159L200 160L199 159z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M8.33333 160.667L8.66667 161.333L8.33333 160.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M54 160L55 161L54 160z"/>
<path style="fill:#ce9411; stroke:none;" d="M64 160L65 161L64 160z"/>
<path style="fill:#fbf18c; stroke:none;" d="M69 160L69 161L72 161L69 160z"/>
<path style="fill:#ce9411; stroke:none;" d="M76 160L77 161L76 160z"/>
<path style="fill:#f5d947; stroke:none;" d="M177.667 160.333L178.333 160.667L177.667 160.333z"/>
<path style="fill:#fbf18c; stroke:none;" d="M143 178L143 179C154.121 178.115 181.298 172.029 185 160C169.817 160.323 155.18 169.783 143 178z"/>
<path style="fill:#ce9411; stroke:none;" d="M198 160L197 162L198 160z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M244 160L243 165L244 165L244 160z"/>
<path style="fill:#f5d947; stroke:none;" d="M55 161L56 162L55 161z"/>
<path style="fill:#ce9411; stroke:none;" d="M65 161L66 162L65 161z"/>
<path style="fill:#fbf18c; stroke:none;" d="M75 161L75 162L79 163L79 162L75 161z"/>
<path style="fill:#ce9411; stroke:none;" d="M79.6667 161.333L80.3333 161.667L79.6667 161.333M123 161L124 162L123 161z"/>
<path style="fill:#f5d947; stroke:none;" d="M129.333 161.667L129.667 162.333L129.333 161.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M173 161L174 162L173 161z"/>
<path style="fill:#f5d947; stroke:none;" d="M174.667 161.333L175.333 161.667L174.667 161.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M187 161L188 162L187 161z"/>
<path style="fill:#f5d947; stroke:none;" d="M198 161L193 166L199 162L198 161z"/>
<path style="fill:#fbf18c; stroke:none;" d="M199 161L200 162L199 161z"/>
<path style="fill:#ce9411; stroke:none;" d="M243.333 161.667L243.667 162.333L243.333 161.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M40 165L43 162L40 165z"/>
<path style="fill:#f5d947; stroke:none;" d="M56 162L57 163L56 162z"/>
<path style="fill:#fbf18c; stroke:none;" d="M69 162L71 164L69 162z"/>
<path style="fill:#ce9411; stroke:none;" d="M82 162L83 163L82 162z"/>
<path style="fill:#f5d947; stroke:none;" d="M171.667 162.333L172.333 162.667L171.667 162.333z"/>
<path style="fill:#fbf18c; stroke:none;" d="M198 162L199 163L198 162z"/>
<path style="fill:#f5d947; stroke:none;" d="M57 163L58 164L57 163z"/>
<path style="fill:#ce9411; stroke:none;" d="M68 163L69 164L68 163M85 163L86 164L85 163z"/>
<path style="fill:#f5d947; stroke:none;" d="M124 163L125 164L124 163z"/>
<path style="fill:#ce9411; stroke:none;" d="M129 163L130 164L129 163z"/>
<path style="fill:#f5d947; stroke:none;" d="M168.667 163.333L169.333 163.667L168.667 163.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M184 163L185 164L184 163z"/>
<path style="fill:#fbf18c; stroke:none;" d="M165 182L165 183L177 182L177 183L167 184L166 184L163 186C168.753 195.111 184.548 193.043 172.812 206.975C171.319 208.747 169.629 210.357 168 212L171 200L171 199C156.882 199.05 160.465 222.158 160 233C169.163 232.166 170.813 219.692 174 212C179.523 213.025 186.007 214.566 188 208C200.498 207.964 204.496 198.569 205 187L210 189L206 186L198 163L165 182z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M9 164L10 165L9 164z"/>
<path style="fill:#f5d947; stroke:none;" d="M58 164L59 165L58 164z"/>
<path style="fill:#fbf18c; stroke:none;" d="M83 164L83 171L89 173C90.1136 167.603 88.2137 165.377 83 164z"/>
<path style="fill:#ce9411; stroke:none;" d="M124 164L125 165L124 164z"/>
<path style="fill:#f5d947; stroke:none;" d="M128.333 164.667L128.667 165.333L128.333 164.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M165 164L166 165L165 164z"/>
<path style="fill:#f5d947; stroke:none;" d="M166 164L167 165L166 164M182 164L183 165L182 164z"/>
<path style="fill:#ce9411; stroke:none;" d="M242.333 164.667L242.667 165.333L242.333 164.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M30 165L32 167L32 165L30 165z"/>
<path style="fill:#f5d947; stroke:none;" d="M59 165L61 171L62 171L63 167L59 165z"/>
<path style="fill:#ce9411; stroke:none;" d="M60 165L61 166L60 165M71 165L72 166L71 165M90 165L91 166L90 165M163 165L164 166L163 165z"/>
<path style="fill:#f5d947; stroke:none;" d="M164 165L165 166L164 165z"/>
<path style="fill:#ce9411; stroke:none;" d="M181 165L182 166L181 165M192 165L193 166L192 165z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M10.3333 166.667L10.6667 167.333L10.3333 166.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M73 166L74 167L73 166M92 166L93 167L92 166z"/>
<path style="fill:#f5d947; stroke:none;" d="M125.333 166.667L125.667 167.333L125.333 166.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M128 166L129 167L128 166M161 166L162 167L161 166z"/>
<path style="fill:#f5d947; stroke:none;" d="M162 166L163 167L162 166M179 166L180 167L179 166z"/>
<path style="fill:#ce9411; stroke:none;" d="M191 166L192 167L191 166z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M242.333 166.667L242.667 167.333L242.333 166.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M94 167L95 168L94 167z"/>
<path style="fill:#f5d947; stroke:none;" d="M159.667 167.333L160.333 167.667L159.667 167.333M177 167L178 168L177 167z"/>
<path style="fill:#ce9411; stroke:none;" d="M178 167L179 168L178 167z"/>
<path style="fill:#f5d947; stroke:none;" d="M190 167L191 168L190 167z"/>
<path style="fill:#fbf18c; stroke:none;" d="M46.3333 168.667L46.6667 169.333L46.3333 168.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M63 168L66 170L66 169L63 168z"/>
<path style="fill:#ce9411; stroke:none;" d="M64 168L65 169L64 168M76 168L77 169L76 168z"/>
<path style="fill:#fbf18c; stroke:none;" d="M79 168L80 169L79 168z"/>
<path style="fill:#ce9411; stroke:none;" d="M96 168L97 169L96 168z"/>
<path style="fill:#f5d947; stroke:none;" d="M127 168L126 170L127 168z"/>
<path style="fill:#ce9411; stroke:none;" d="M157 168L158 169L157 168z"/>
<path style="fill:#f5d947; stroke:none;" d="M158 168L159 169L158 168M175 168L176 169L175 168z"/>
<path style="fill:#ce9411; stroke:none;" d="M176 168L177 169L176 168z"/>
<path style="fill:#f5d947; stroke:none;" d="M189 168L190 169L189 168z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M11.3333 169.667L11.6667 170.333L11.3333 169.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M78 169L79 170L78 169z"/>
<path style="fill:#fbf18c; stroke:none;" d="M94 169L94 170L99 172L99 171L94 169z"/>
<path style="fill:#ce9411; stroke:none;" d="M98 169L99 170L98 169M127 169L128 170L127 169M155 169L156 170L155 169z"/>
<path style="fill:#f5d947; stroke:none;" d="M156 169L157 170L156 169M173 169L174 170L173 169z"/>
<path style="fill:#ce9411; stroke:none;" d="M174 169L175 170L174 169z"/>
<path style="fill:#f5d947; stroke:none;" d="M187.667 169.333L188.333 169.667L187.667 169.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M241.333 169.667L241.667 170.333L241.333 169.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M66 170L67 171L66 170z"/>
<path style="fill:#ce9411; stroke:none;" d="M67 170L68 171L67 170M80 170L81 171L80 170z"/>
<path style="fill:#f5d947; stroke:none;" d="M154 170L155 171L154 170M171 170L172 171L171 170z"/>
<path style="fill:#ce9411; stroke:none;" d="M172 170L173 171L172 170z"/>
<path style="fill:#f5d947; stroke:none;" d="M186 170L187 171L186 170z"/>
<path style="fill:#ce9411; stroke:none;" d="M82 171L83 172L82 171M101 171L102 172L101 171z"/>
<path style="fill:#f5d947; stroke:none;" d="M152 171L153 172L152 171M169 171L170 172L169 171z"/>
<path style="fill:#ce9411; stroke:none;" d="M170 171L171 172L170 171z"/>
<path style="fill:#f5d947; stroke:none;" d="M184.667 171.333L185.333 171.667L184.667 171.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M240.333 171.667L240.667 172.333L240.333 171.667M12 172L13 173L12 172z"/>
<path style="fill:#fbf18c; stroke:none;" d="M39 172L37 179L38 179L41 177L40 185L41 186L44 185L43 180L46 181L42 177L39 172M67 172L68 173L67 172z"/>
<path style="fill:#ce9411; stroke:none;" d="M70 172L71 173L70 172M84 172L85 173L84 172M150 172L151 173L150 172z"/>
<path style="fill:#f5d947; stroke:none;" d="M151 172L152 173L151 172M167 172L168 173L167 172z"/>
<path style="fill:#ce9411; stroke:none;" d="M168 172L169 173L168 172M182 172L183 173L182 172z"/>
<path style="fill:#f5d947; stroke:none;" d="M183 172L184 173L183 172z"/>
<path style="fill:#fbf18c; stroke:none;" d="M52.3333 173.667L52.6667 174.333L52.3333 173.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M72 173L73 174L72 173M87 173L88 174L87 173M104 173L105 174L104 173z"/>
<path style="fill:#f5d947; stroke:none;" d="M149 173L150 174L149 173M165 173L166 174L165 173M181 173L182 174L181 173z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M13.3333 174.667L13.6667 175.333L13.3333 174.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M89 174L90 175L89 174M147 174L148 175L147 174z"/>
<path style="fill:#f5d947; stroke:none;" d="M148 174L149 175L148 174M162 174L163 175L162 174z"/>
<path style="fill:#ce9411; stroke:none;" d="M163 174L164 175L163 174z"/>
<path style="fill:#f5d947; stroke:none;" d="M179.667 174.333L180.333 174.667L179.667 174.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M239.333 174.667L239.667 175.333L239.333 174.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M72 175L73 178L77 178L77 177L72 175z"/>
<path style="fill:#f5d947; stroke:none;" d="M74.6667 175.333L75.3333 175.667L74.6667 175.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M92 175L93 176L92 175M107 175L108 176L107 175z"/>
<path style="fill:#f5d947; stroke:none;" d="M146 175L147 176L146 175M159 175L160 176L159 175z"/>
<path style="fill:#ce9411; stroke:none;" d="M160 175L161 176L160 175M177 175L178 176L177 175z"/>
<path style="fill:#f5d947; stroke:none;" d="M178 175L179 176L178 175z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M14.3333 176.667L14.6667 177.333L14.3333 176.667z"/>
<path style="fill:#f5d947; stroke:none;" d="M76 176L77 177L76 176z"/>
<path style="fill:#ce9411; stroke:none;" d="M77 176L78 177L77 176M95 176L96 177L95 176z"/>
<path style="fill:#f5d947; stroke:none;" d="M145 176L146 177L145 176M156 176L157 177L156 176z"/>
<path style="fill:#ce9411; stroke:none;" d="M157 176L158 177L157 176M175 176L176 177L175 176z"/>
<path style="fill:#f5d947; stroke:none;" d="M176 176L177 177L176 176z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M238.333 176.667L238.667 177.333L238.333 176.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M79 177L80 178L79 177M98 177L99 178L98 177M110 177L111 178L110 177M143 177L144 178L143 177z"/>
<path style="fill:#f5d947; stroke:none;" d="M152.667 177.333L153.333 177.667L152.667 177.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M154 177L155 178L154 177M173 177L174 178L173 177z"/>
<path style="fill:#f5d947; stroke:none;" d="M174 177L175 178L174 177z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M15.3333 178.667L15.6667 179.333L15.3333 178.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M102.667 178.333L103.333 178.667L102.667 178.333M111 178L112 179L111 178z"/>
<path style="fill:#f5d947; stroke:none;" d="M142 178L145 180L145 179L142 178M147 178L147 179L150 179L147 178z"/>
<path style="fill:#ce9411; stroke:none;" d="M150 178L151 179L150 178M171 178L172 179L171 178z"/>
<path style="fill:#f5d947; stroke:none;" d="M172 178L173 179L172 178z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M237.333 178.667L237.667 179.333L237.333 178.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M80 179L81 180L80 179z"/>
<path style="fill:#ce9411; stroke:none;" d="M84 179L85 180L84 179M106 179L106 180L109 180L106 179M112 179L113 180L112 179M141 179L142 180L141 179M145 179L146 180L145 179z"/>
<path style="fill:#f5d947; stroke:none;" d="M169.667 179.333L170.333 179.667L169.667 179.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M16.3333 180.667L16.6667 181.333L16.3333 180.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M86 180L87 181L86 180M166 180L167 181L166 180z"/>
<path style="fill:#f5d947; stroke:none;" d="M167.667 180.333L168.333 180.667L167.667 180.333M165 183L165 182L167 182L167 181L154 184L154 187L166 190L166 189L163 186L166 184L167 184C170.496 186.505 173.412 184.795 177 183C172.996 179.299 169.572 181.141 165 183z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M236.333 180.667L236.667 181.333L236.333 180.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M35 181L35 183L37 183L37 181L35 181z"/>
<path style="fill:#ce9411; stroke:none;" d="M89 181L90 182L89 181M163 181L164 182L163 181z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M17.3333 182.667L17.6667 183.333L17.3333 182.667z"/>
<path style="fill:#fbf18c; stroke:none;" d="M88 182L88 186L89 186L88 182z"/>
<path style="fill:#ce9411; stroke:none;" d="M92 182L93 183L92 182M160 182L161 183L160 182z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M235.333 182.667L235.667 183.333L235.333 182.667z"/>
<path style="fill:#ce9411; stroke:none;" d="M95 183L96 184L95 183M157 183L158 184L157 183z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M18 184L19 185L18 184z"/>
<path style="fill:#ce9411; stroke:none;" d="M98.6667 184.333L99.3333 184.667L98.6667 184.333M153 184L154 185L153 184z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M234 184L235 185L234 184z"/>
<path style="fill:#ce9411; stroke:none;" d="M102 185L103 186L102 185M150 185L151 186L150 185z"/>
<path style="fill:#f5d947; stroke:none;" d="M151.667 185.333L152.333 185.667L151.667 185.333z"/>
<path style="fill:#fbf18c; stroke:none;" d="M153 185L154 186L153 185z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M19 186L20 187L19 186z"/>
<path style="fill:#ce9411; stroke:none;" d="M99.6667 186.333L100.333 186.667L99.6667 186.333M152.667 186.333L153.333 186.667L152.667 186.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M233 186L234 187L233 186z"/>
<path style="fill:#fbf18c; stroke:none;" d="M36 195L39 187C35.4618 188.999 35.6364 191.152 36 195z"/>
<path style="fill:#ce9411; stroke:none;" d="M95.6667 187.333L96.3333 187.667L95.6667 187.333M157.667 187.333L158.333 187.667L157.667 187.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M20 188L21 189L20 188z"/>
<path style="fill:#ce9411; stroke:none;" d="M92 188L93 189L92 188M129 188L130 189L129 188M160.667 188.333L161.333 188.667L160.667 188.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M232 188L233 189L232 188M21 189L22 190L21 189z"/>
<path style="fill:#ce9411; stroke:none;" d="M89 189L90 190L89 189M121 189L122 190L121 189M131 189L132 190L131 189M163 189L164 190L163 189z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M231 189L232 190L231 189z"/>
<path style="fill:#ce9411; stroke:none;" d="M87 190L88 191L87 190z"/>
<path style="fill:#fbf18c; stroke:none;" d="M122 190L122 194L123 194L122 190M130 190L130 196C136.125 193.915 143.783 202.67 146 196L130 190z"/>
<path style="fill:#f5d947; stroke:none;" d="M131.667 190.333L132.333 190.667L131.667 190.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M133 190L134 191L133 190M166 190L167 191L166 190z"/>
<path style="fill:#f5d947; stroke:none;" d="M167 190L168 191L167 190z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M22 191L23 192L22 191z"/>
<path style="fill:#ce9411; stroke:none;" d="M84 191L85 192L84 191z"/>
<path style="fill:#f5d947; stroke:none;" d="M134 191L135 192L134 191z"/>
<path style="fill:#ce9411; stroke:none;" d="M135 191L136 192L135 191M168 191L169 192L168 191z"/>
<path style="fill:#f5d947; stroke:none;" d="M169 191L170 192L169 191M189 191L190 192L189 191z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M230 191L231 192L230 191z"/>
<path style="fill:#ce9411; stroke:none;" d="M82 192L83 193L82 192M115 192L116 193L115 192z"/>
<path style="fill:#f5d947; stroke:none;" d="M136 192L137 193L136 192z"/>
<path style="fill:#ce9411; stroke:none;" d="M137 192L138 193L137 192M170 192L171 193L170 192z"/>
<path style="fill:#f5d947; stroke:none;" d="M171.667 192.333L172.333 192.667L171.667 192.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M229 192L230 193L229 192z"/>
<path style="fill:#ce9411; stroke:none;" d="M113 193L114 194L113 193z"/>
<path style="fill:#f5d947; stroke:none;" d="M139 193L140 194L139 193z"/>
<path style="fill:#ce9411; stroke:none;" d="M140 193L141 194L140 193M172 193L173 194L172 193z"/>
<path style="fill:#fbf18c; stroke:none;" d="M211 193L211 198L215 196L211 193z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M24 194L25 195L24 194z"/>
<path style="fill:#ce9411; stroke:none;" d="M79 194L80 195L79 194M110 194L111 195L110 194z"/>
<path style="fill:#f5d947; stroke:none;" d="M141.667 194.333L142.333 194.667L141.667 194.333M186 197L189 194L186 197z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M228 194L229 195L228 194M25 195L26 196L25 195z"/>
<path style="fill:#ce9411; stroke:none;" d="M77 195L78 196L77 195M107 195L108 196L107 195z"/>
<path style="fill:#f5d947; stroke:none;" d="M144.667 195.333L145.333 195.667L144.667 195.333z"/>
<path style="fill:#ce9411; stroke:none;" d="M146 195L147 196L146 195M175 195L176 196L175 195z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M227 195L228 196L227 195z"/>
<path style="fill:#fbf18c; stroke:none;" d="M37 196L38 197L37 196z"/>
<path style="fill:#ce9411; stroke:none;" d="M76 196L77 197L76 196M103 196L104 197L103 196M150 196L151 197L150 196z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M26 197L27 198L26 197z"/>
<path style="fill:#fbf18c; stroke:none;" d="M57 197L61 201L57 197z"/>
<path style="fill:#ce9411; stroke:none;" d="M78.6667 197.333L79.3333 197.667L78.6667 197.333M97.6667 197.333L98.3333 197.667L97.6667 197.333M155.667 197.333L156.333 197.667L155.667 197.333M174.667 197.333L175.333 197.667L174.667 197.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M226 197L227 198L226 197M27 198L28 199L27 198z"/>
<path style="fill:#fbf18c; stroke:none;" d="M77 198L78 199L77 198M149 198L150 199L149 198M154 198L155 199L154 198z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M225 198L226 199L225 198M28 199L29 200L28 199z"/>
<path style="fill:#fbf18c; stroke:none;" d="M89 199L90 200L89 199z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M224 199L225 200L224 199M29 201L30 202L29 201z"/>
<path style="fill:#f5d947; stroke:none;" d="M165 201L163 214L164 214L165 201z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M223 201L224 202L223 201M30 202L31 203L30 202M222 202L223 203L222 202M31 203L32 204L31 203M221 203L222 204L221 203M32 204L33 205L32 204z"/>
<path style="fill:#ce9411; stroke:none;" d="M41 204L44 207L41 204z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M220 204L221 205L220 204z"/>
<path style="fill:#fbf18c; stroke:none;" d="M54.3333 205.667L54.6667 206.333L54.3333 205.667M122 206L119 207C120.452 208.904 122.445 208.567 122 206z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M34 207L35 208L34 207z"/>
<path style="fill:#fbf18c; stroke:none;" d="M109 207L107 208L107 209L109 207z"/>
<path style="fill:#f5d947; stroke:none;" d="M181 207L182 208L181 207z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M218 207L219 208L218 207M35 208L36 209L35 208z"/>
<path style="fill:#fbf18c; stroke:none;" d="M103 208L100 209L100 210L104 209L103 208z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M217 208L218 209L217 208M36 209L37 210L36 209M216 209L217 210L216 209M37 210L38 211L37 210z"/>
<path style="fill:#fbf18c; stroke:none;" d="M52 211L52 212L57 210L52 211z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M215 210L216 211L215 210M38 211L39 212L38 211M214 211L215 212L214 211M39 212L40 213L39 212z"/>
<path style="fill:#ce9411; stroke:none;" d="M123 212L123 217L124 217L123 212z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M213 212L214 213L213 212M40 213L41 214L40 213z"/>
<path style="fill:#fbf18c; stroke:none;" d="M89.3333 213.667L89.6667 214.333L89.3333 213.667z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M212 213L213 214L212 213M41 214L42 215L41 214z"/>
<path style="fill:#ce9411; stroke:none;" d="M129.333 214.667L129.667 215.333L129.333 214.667z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M211 214L212 215L211 214M42 215L43 216L42 215M210 215L211 216L210 215M43 216L44 217L43 216M44 217L45 218L44 217z"/>
<path style="fill:#fbf18c; stroke:none;" d="M88 218L89 219L88 218M97.6667 218.333L98.3333 218.667L97.6667 218.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M206 218L207 219L206 218M47 219L48 220L47 219z"/>
<path style="fill:#ce9411; stroke:none;" d="M128 219L129 220L128 219z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M205 219L206 220L205 219M48 220L49 221L48 220z"/>
<path style="fill:#ce9411; stroke:none;" d="M125 220L126 221L125 220M127 220L128 221L127 220z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M204 220L205 221L204 220M49 221L50 222L49 221z"/>
<path style="fill:#fbf18c; stroke:none;" d="M127 221L128 222L127 221z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M203 221L204 222L203 221M50 222L51 223L50 222z"/>
<path style="fill:#f5d947; stroke:none;" d="M59 222L60 223L59 222z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M52 223L53 224L52 223z"/>
<path style="fill:#fbf18c; stroke:none;" d="M103 223L102 227L103 227L103 223z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M200 223L201 224L200 223M53 224L54 225L53 224z"/>
<path style="fill:#fbf18c; stroke:none;" d="M89 224L89 229L90 229L89 224z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M199 224L200 225L199 224M55 225L56 226L55 225M197 225L198 226L197 225M56 226L57 227L56 226z"/>
<path style="fill:#fbf18c; stroke:none;" d="M118 226L119 227L118 226z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M196 226L197 227L196 226M57 227L58 228L57 227M59 228L60 229L59 228z"/>
<path style="fill:#f5d947; stroke:none;" d="M64 228L67 230L67 229L64 228z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M193 228L194 229L193 228M61 229L62 230L61 229M191 229L192 230L191 229M62 230L63 231L62 230z"/>
<path style="fill:#f5d947; stroke:none;" d="M68 230L69 231L68 230z"/>
<path style="fill:#fbf18c; stroke:none;" d="M95 230L96 231L95 230z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M190 230L191 231L190 230M64 231L65 232L64 231z"/>
<path style="fill:#f5d947; stroke:none;" d="M70 231L71 232L70 231z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M188 231L189 232L188 231M66 232L67 233L66 232z"/>
<path style="fill:#f5d947; stroke:none;" d="M72 232L72 233L82 237L72 232z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M186 232L187 233L186 232M67.6667 233.333L68.3333 233.667L67.6667 233.333M184 233L185 234L184 233M69.6667 234.333L70.3333 234.667L69.6667 234.333M182.667 234.333L183.333 234.667L182.667 234.333M71.6667 235.333L72.3333 235.667L71.6667 235.333M180.667 235.333L181.333 235.667L180.667 235.333M73.6667 236.333L74.3333 236.667L73.6667 236.333z"/>
<path style="fill:#fbf18c; stroke:none;" d="M143.667 236.333L144.333 236.667L143.667 236.333z"/>
<path style="fill:#5e8b0b; stroke:none;" d="M178.667 236.333L179.333 236.667L178.667 236.333M76 237L77 238L76 237M176.667 237.333L177.333 237.667L176.667 237.333M78 238L79 239L78 238M174 238L175 239L174 238M80.6667 239.333L81.3333 239.667L80.6667 239.333M171.667 239.333L172.333 239.667L171.667 239.333M83 240L84 241L83 240M169 240L170 241L169 240M86 241L87 242L86 241M166.667 241.333L167.333 241.667L166.667 241.333M88.6667 242.333L89.3333 242.667L88.6667 242.333M163.667 242.333L164.333 242.667L163.667 242.333M92.6667 243.333L93.3333 243.667L92.6667 243.333M159.667 243.333L160.333 243.667L159.667 243.333M95 244L95 245L98 245L95 244M155 244L155 245L158 245L155 244M99 245L99 246L102 246L99 245M151 245L151 246L154 246L151 245M105 246L105 247L108 247L105 246M145 246L145 247L149 247L145 246M111 247L111 248L117 248L111 247M137 247L137 248L143 248L137 247z"/>
</svg>

				</span>
				<span class="scc-admin-title">
					<h1><?php esc_html_e( 'StellarCanna Munchies', 'stellarcanna-munchies' ); ?></h1>
				</span>
				<p><?php esc_html_e( 'Official StellarCanna Munchies plugin for WordPress.', 'stellarcanna-munchies' ); ?></p>
				<p><?php esc_html_e( 'Use the following shortcode to display donation QR code. If you are using Elementor, use the Elementor widget.', 'stellarcanna-munchies' ); ?><code>[stellarcanna_munchies]</code></p>
				<br>
			</div>
			<div class="scc-admin-main">
				<section class="scc-settings">
					<label for="scc_address">
						<?php _e( 'StellarCanna Munchies address:', 'stellarcanna-munchies' ); ?>
					</label>
					<br>
					<input type="text" id="scc-address" name="scc_address" placeholder="G" size="56" pattern="[a-z0-9]{56}" value="<?php echo esc_attr( scc_get_option( '_stellarcanna_munchies_address' ) ); ?>">
					<?php wp_nonce_field( 'scc_save_settings' ); ?>
					<input type="submit" id="save_scc_address" name="save_scc_address" value="<?php esc_attr_e( 'Save', 'stellarcanna-munchies' ); ?>">
					<?php if ( scc_get_option( '_stellarcanna_munchies_address' ) ) : ?>
					<img id="scc-indicator" src="<?php echo esc_attr( esc_url( 'https://id.lobstr.co/' . scc_get_option( '_stellarcanna_munchies_address' ) . '.png' ) ); ?>">
					<?php endif; ?>
					<div id="scc-message-area"></div>
				</section>
			</div>
		</div>
		<?php
	}

}
