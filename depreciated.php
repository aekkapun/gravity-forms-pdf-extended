<?php 

/**
 * Filename: depreciated.php 
 * This file contains any depreciated functionality to help preserve backwards compatibility 
 * with either Gravity Forms, or our template files.
 */


/*
 * Since v3.6
 * Moved to the $gfpdfe_data class.
 * Can now be accessed using the following:
 *
 * $gfpdfe_data->template_location
 * $gfpdfe_data->template_site_location
 * $gfpdfe_data->template_save_location
 * $gfpdfe_data->template_font_location
 * 
 */
define('PDF_SAVE_LOCATION', get_stylesheet_directory().'/'.PDF_SAVE_FOLDER.'/output/'); 
define('PDF_FONT_LOCATION', get_stylesheet_directory().'/'.PDF_SAVE_FOLDER.'/fonts/'); 
define('PDF_TEMPLATE_LOCATION', get_stylesheet_directory().'/'.PDF_SAVE_FOLDER.'/'); 
define('PDF_TEMPLATE_URL_LOCATION', get_stylesheet_directory_uri().'/'. PDF_SAVE_FOLDER .'/'); 