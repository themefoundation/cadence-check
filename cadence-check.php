<?php
/*
Plugin Name: Cadence Check
Description: Displays a horizontal grid using a background image. Grid size is automatically detected based on the line height of the body element.
Author: Alex Mansfield
Author URI: http://themefoundation.com
Version: 0.2
*/

function thmfdn_cadence_check() {
	?>
		<script>
			var thmfdnCadenceHeight = getComputedStyle(document.body, null).lineHeight;
			document.body.style.backgroundImage = "url(<?php echo plugins_url( 'img/', __FILE__ ) ?>grid-" + thmfdnCadenceHeight + ".png)";
		</script>
	<?php
}
add_action( 'wp_footer', 'thmfdn_cadence_check' );
