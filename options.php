<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '12px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Gallery Defaults
	$gallery_defaults = array(
		'input' => '',
		'textarea' => '',
		'input2' => '',
		'input3' => '',
		'date' => '',
		'dateday' => '',
		'datemonth' => '',
		'dateyear' => '',
		'time' => '',
		'image' => '' 
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/dist/images';

	// for repeatable
	$prefix = 'custom_';

	$options = array();


	/* ######################## */
	/* ####### MAIN tab ####### */
	/* ######################## */
	$options[] = array(
		'name' => __( 'Main', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Logo Header', 'theme-textdomain' ),
		'type' => 'info'
	);
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'std' => $imagepath . '/logo-dealerhinobekasi.jpg',
		'id' => 'logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Copyright Footer', 'theme-textdomain' ),
		'type' => 'info'
	);
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'id' => 'footer-cc',
		'std' => '© Dealer Hino Bekasi. All Right Served.',
		'type' => 'text'
	);

	/* ######################## */
	/* ####### HOME tab ####### */
	/* ######################## */
	$options[] = array(
		'name' => __( 'Home', 'theme-textdomain' ),
		'type' => 'heading'
	);
	
	$options[] = array(
		'name' => __( 'Banner', 'theme-textdomain' ),
		'type' => 'info'
	);
	$options[] = array(
		'name' => __( '', 'theme-textdomain' ),
		'id' => "home-banner",
		'std' => $gallery_defaults,
		'type' => 'gallery'
	);

	
	/* ############################### */
	/* ########## MEDIA tab ########## */
	/* ############################### */
	// $options[] = array(
	// 	'name' => __( 'Media', 'theme-textdomain' ),
	// 	'type' => 'heading'
	// );
	// $options[] = array(
	// 	'name' => __( 'Media', 'theme-textdomain' ),
	// 	'type' => 'info'
	// );
	// $options[] = array( 
	// 	'name' => __( 'Media Gallery', 'theme-textdomain' ),
	// 	'id' => "media-gallery",
	// 	'std' => $gallery_defaults,
	// 	'type' => 'gallery'
	// );


	/* ############################### */
	/* ######### CONTACT tab ######### */
	/* ############################### */
// 	$options[] = array(
// 		'name' => __( 'Contact', 'theme-textdomain' ),
// 		'type' => 'heading'
// 	);

// 	$options[] = array(
// 		'name' => __( 'Contact', 'theme-textdomain' ),
// 		'type' => 'info'
// 	);

// 	$options[] = array(
// 		'name' => __( 'Title', 'theme-textdomain' ),
// 		'id' => 'contact-title',
// 		'std' => 'Creative City Worship',
// 		'type' => 'text'
// 	);
// 	$options[] = array(
// 		'name' => __( 'Description', 'theme-textdomain' ),
// 		'id' => 'contact-desc',
// 		'std' => 'Artotel-Thamrin
// Every Sunday at 10AM',
// 		'type' => 'textarea'
// 	);

	return $options;
}