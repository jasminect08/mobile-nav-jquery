// Execute when HTML document is loaded
jQuery(document).ready(function() {

	// External links - add class and open in new window 
	var h = window.location.host.toLowerCase();
	jQuery("a[href^='http']:not([href*='" + h + "'])").addClass("external-link").attr("target", "_blank");

	// Image links - remove external-link class and add image-link class
	jQuery("img").parent('a').removeClass("external-link").addClass('image-link');

	// Email links - add class
	jQuery('a[href*="mailto:"]').addClass('email-link');

	// Pdf links - add class and open in new window
	jQuery('a[href*=".pdf"]').addClass('pdf-link').attr("target", "_blank");

	// Add classes to parts of lists
	jQuery('li:last-child').addClass('last');
	jQuery('li:first-child').addClass('first');
	jQuery('ol, ul').parent('li').addClass('parent');

});

// Executes when complete page is fully loaded, including all iframes, objects, and images
jQuery(window).load(function() {

});


// load the JS file
function wdm_mm_toggle_scripts() {
    wp_enqueue_script( 'wdm-mm-toggle', get_stylesheet_directory_uri() . '/js/mobile-menu-toggle.js', array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'wdm_mm_toggle_scripts' );
