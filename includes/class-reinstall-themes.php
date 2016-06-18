<?php

/**
 * Reinstall Themes main class.
 * 
 * @since 0.1
 */
class Reinstall_Themes {
    /**
     * @since 0.1
     */
    public function __construct() {
	add_filter( 'upgrader_package_options', array( $this, 'filter_upgrader_package_options' ) );
    }

    /**
     * @return array
     * @since 0.1
     */
    public function filter_upgrader_package_options( $options ) {
	if ( isset( $options['hook_extra']['type'] ) && isset( $options['hook_extra']['action'] ) ) {
	    if ( 'theme' === $options['hook_extra']['type'] && 'install' === $options['hook_extra']['action'] ) {
		$options['clear_destination'] = true;
	    }
	}
	return $options;
    }

    /** Singleton *************************************************************/

    /**
     * @return self
     * @since 0.1
     */
    public static function instance() {
	static $instance = null;
	if ( is_null( $instance ) ) {
	    $instance = new self;
	}
	return $instance;
    }
}
