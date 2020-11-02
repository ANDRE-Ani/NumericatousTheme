<?php

if( ! defined( 'ABSPATH' ) ) exit;

/**
 * Remove Custom CSS section from the Customizer.
 * introduced in 4.7, from the Customizer.
 *
 * @since 1.0
 *
 * @param WP_Customize_Manager $wp_customize WP_Customize_Manager instance.
 * Default panel : wp-includes/class-wp-customize-manager.php
 * @link	https://github.com/WordPress/WordPress/blob/master/wp-includes/class-wp-customize-manager.php
 */

/**
 * Add some styles to the WordPress Customizer
 *
 * @since 1.0
 */
add_action( 'customize_controls_print_styles', 'tif_customizer_styles', 999 );
function tif_customizer_styles() {
?>
	<style>
	.customize-control,
	.customize-section-description {
		margin-bottom: 10px;
		margin-left: -5px;
		width: calc(100% + 10px);
	}
	.customize-control-title {
		margin-bottom: 0px;
	}
	.customize-section-description p {
		margin-top: 0;
	}
	.customize-control-radio {
		padding: 0;
	}
	.customize-control-description a.external-link::after {
		font: 16px/11px dashicons;
		content: "\f310";
		top: 3px;
		position: relative;
		padding-left: 3px;
		display: inline-block;
		text-decoration: none;
	}
	</style>
<?php

}

/**
 * Internal linking
 *
 * @since 1.0
 */
add_action( 'customize_controls_print_scripts', 'tif_customizer_internal_links' );
function tif_customizer_internal_links() {
?>
<script type="text/javascript">
(function($) {
	$(document).ready(function() {
		var api = wp.customize;
		api.bind('ready', function() {
			$(['control', 'section', 'panel']).each(function(i, type) {
				$('a[rel="tc-'+type+'"]').click(function(e) {
					e.preventDefault();
					var id = $(this).attr('href').replace( '#', '' );
					if(api[type].has(id)) {
						 api[type].instance(id).focus();
					}
				});
			});
		});
	});
})(jQuery);
</script>
<?php
}

/**
 * Custom color palettes
 *
 * @since 1.0
 */
class Tif_Color_Palette extends WP_Customize_Control {

	public $type = "tif-color-palette";

	public function render_content() {

		$color_palette = array(
			'1' => array( 'value' => '#eeece9#a28f91#ec834a#a96058#4d4443', ),
			'2' => array( 'value' => '#F1E1CC#7EA7A9#B07947#877D6E#1B221E', ),
			'3' => array( 'value' => '#FBFBFA#A2A1A1#D3A367#A75D4B#373D48', ),
			'4' => array( 'value' => '#F4F1EE#737E9C#56547B#5D6185#091030', ),
			'5' => array( 'value' => '#F7F8F6#909495#9CA0A3#7C7882#322C34', ),
			'6' => array( 'value' => '#F2EEEE#B99B63#98999F#877171#565351', ),
			'996' => array( 'value' => '#ffffff#ffffff#ffffff#ffffff#ffffff', ),
			'997' => array( 'value' => '#000000#000000#000000#000000#000000', ),
			'998' => array( 'value' => '#cecece#cecece#cecece#cecece#cecece', ),
			'999' => array( 'value' => '#222222#222222#222222#222222#222222', ),
		);

		foreach ( $color_palette as $color_palette) {

			echo '<button type="button" value="' . $color_palette['value'] . '" name="tif_color_palette" class="tif_color_palette_button">
					<div>
						<div style="background:' . substr($color_palette['value'], 0, 7 ) . ';"></div>
						<div style="background:' . substr($color_palette['value'], 7, 7 ) . ';"></div>
						<div style="background:' . substr($color_palette['value'], 14, 7 ) . ';"></div>
						<div style="background:' . substr($color_palette['value'], 21, 7 ) . ';"></div>
						<div style="background:' . substr($color_palette['value'], 28, 7 ) . ';"></div>
					</div>
				</button>';

		}

	}

}

/**
 * Theme important links started
 *
 * @since 1.0
 */
class Tif_Important_Links extends WP_Customize_Control {

	public $type = "tif-important-links";

	public function render_content() {

		?>
		<label style="overflow: hidden; zoom: 1;">

			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

			<p>
				<?php
					printf(
						esc_html__( 'There\'s a range of %1$s extensions available to put additional power in your hands. Check out the %2$s%3$s%4$s page in your dashboard for more information.', 'bonjour' ),
						'Themes in France',
						'<a href="' . esc_url( admin_url() . 'themes.php?page=storefront-welcome' ) . '">',
						'Bonjour',
						 '</a>' );
				?>
			</p>

			<span class="customize-control-title">
				<?php
					printf( esc_html__( 'Enjoying %s?', 'bonjour' ), 'bonjour' );
				?>
			</span>

			<p>
				<?php
					printf( esc_html__( 'Why not leave us a review on %1$sWordPress.org%2$s?  We\'d really appreciate it!', 'bonjour' ), '<a href="https://wordpress.org/themes/storefront">', '</a>' );
				?>
			</p>

			<span class="customize-control-title">
				<?php
					/* translators: %s: Storefront */
					esc_html_e( 'Important links', 'bonjour' );
				?>
			</span>

		<?php

		$links = array(
			'support'			=> array(
				'link'			=> esc_url( 'https://themesinfrance.fr/forum/support/' ),
				'text'			=> esc_html__( 'Support Forum', 'bonjour' ),
			),
			'documentation'		=> array(
				'link'			=> esc_url( 'https://themesinfrance.fr/theme/instruction/bonjour/' ),
				'text'			=> esc_html__( 'Documentation', 'bonjour' ),
			),
			'demo'				=> array(
				'link'			=> esc_url( 'https://demo.themesinfrance.fr/bonjour/' ),
				'text'			=> esc_html__( 'View Demo', 'bonjour' ),
			),
			'rating'			=> array(
				'link'			=> esc_url( 'http://wordpress.org/themes/bonjour/' ),
				'text'			=> esc_html__( 'Rate this theme', 'bonjour' ),
			),
		);

		foreach ( $links as $link ) {

			echo '<p><a target="_blank" rel="noreferrer noopener" href="' . $link['link'] . '" >' . esc_attr($link['text'] ) . ' </a></p>';

		}

		?>

		</label>

		<?php

	}

}
