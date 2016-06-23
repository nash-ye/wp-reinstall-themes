<?php
/**
 * Plugin Name: Reinstall Themes
 * Plugin URI: https://github.com/nash-ye/WP-Reinstall-Themes
 * Description: A simple plugin to allow themes re-installation.
 * Author: Nashwan Doaqan
 * Author URI: http://nashwan-d.com
 * Version: 0.1.1
 *
 * License: GPL3+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Copyright (c) 2016 - 2017 Nashwan Doaqan.  All rights reserved.
 */

// Load the Reinstall_Themes class.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-reinstall-themes.php';

// Instance the Reinstall_Themes class.
add_action( 'plugins_loaded', array( 'Reinstall_Themes', 'instance' ), 99 );
