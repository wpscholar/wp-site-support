<?php

use wpscholar\WordPress\FeatureSupport;

if ( ! function_exists( 'site_supports' ) ) {

	/**
	 * Check if a site supports a specific feature.
	 *
	 * @param string $site
	 * @param string $feature
	 *
	 * @return bool
	 */
	function site_supports( $site, $feature ) {
		$support = FeatureSupport::getInstance( 'site' );

		return $support->has( $site, $feature );
	}

}

if ( ! function_exists( 'add_site_support' ) ) {

	/**
	 * Add support for a specific feature to a site.
	 *
	 * @param string $site
	 * @param string|array $feature
	 */
	function add_site_support( $site, $feature ) {
		$support = FeatureSupport::getInstance( 'site' );
		$support->add( ...func_get_args() );
	}

}

if ( ! function_exists( 'remove_site_support' ) ) {

	/**
	 * Remove support for a specific feature from a site.
	 *
	 * @param string $site
	 * @param string $feature
	 */
	function remove_site_support( $site, $feature ) {
		$support = FeatureSupport::getInstance( 'site' );
		$support->remove( $site, $feature );
	}

}

if ( ! function_exists( 'get_all_site_supports' ) ) {

	/**
	 * Get all features supported by a site.
	 *
	 * @param string $site
	 *
	 * @return array
	 */
	function get_all_site_supports( $site ) {
		$support = FeatureSupport::getInstance( 'site' );

		return $support->all( $site );
	}

}

if ( ! function_exists( 'get_sites_by_support' ) ) {

	/**
	 * Get all sites that support a specific feature.
	 *
	 * @param string|array $feature
	 * @param string $operator
	 *
	 * @return array
	 */
	function get_sites_by_support( $feature, $operator = 'and' ) {
		$support = FeatureSupport::getInstance( 'site' );

		return $support->where( $feature, $operator );
	}

}