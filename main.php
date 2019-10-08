<?php
/**
 * Plugin Name: Reinstall Themes
 * Plugin URI: https://github.com/nash-ye/wp-reinstall-themes
 * Description: A simple plugin to allow themes re-installation.
 * Author: Nashwan Doaqan
 * Author URI: https://profiles.wordpress.org/alex-ye/
 * Version: 0.2
 *
 * License: GPL3+
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Copyright (c) 2016 - 2019 Nashwan Doaqan.  All rights reserved.
 */

namespace ReinstallThemes;

add_filter('upgrader_package_options', 'ReinstallThemes\filterUpgraderPackageOptions');

/**
 * Filter upgrader options to allow theme's re-installation.
 *
 * @param array $options Options used by the upgrader.
 *
 * @return array
 * @since  0.2
 */
function filterUpgraderPackageOptions(array $options)
{
    if (isset($options['hook_extra']['type']) && isset($options['hook_extra']['action'])) {
        if ('theme' === $options['hook_extra']['type'] && 'install' === $options['hook_extra']['action']) {
            $options['clear_destination'] = true;
        }
    }

    return $options;
}
