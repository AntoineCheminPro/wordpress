<?php
/**
 * Main wrapper for Hustle's dashboard.
 *
 * @uses ./../global/sui-components/sui-header
 * @uses ./../global/sui-components/sui-footer
 * @uses ./components/sui-summary
 * @uses ./components/blocks-free
 * @uses ./components/blocks-pro
 * @uses ./components/dialogs
 *
 * @package Hustle
 * @since 4.0.0
 */

$capability = array(
	'hustle_create'        => current_user_can( 'hustle_create' ),
	'hustle_access_emails' => current_user_can( 'hustle_access_emails' ),
);

$has_modules = ( count( $popups ) + count( $slideins ) + count( $embeds ) ) > 0;

$is_free = Opt_In_Utils::_is_free();

$header = array(
	'title' => 'Dashboard',
);

$summary = array(
	'sui'             => $sui,
	'metrics'         => $metrics,
	'active_modules'  => $active_modules,
	'last_conversion' => $last_conversion,
);

$blocks = array(
	'popups'          => $popups,
	'slideins'        => $slideins,
	'embeds'          => $embeds,
	'capability'      => $capability,
	'social_sharings' => $social_sharings,
);

$footer = array(
	'is_large' => true,
	'is_free'  => $is_free,
);

$dialogs = array(
	'has_modules'  => $has_modules,
	'need_migrate' => $need_migrate,
);
?>

<?php
$this->render( 'admin/global/sui-components/sui-header', $header );

$this->render( 'admin/dashboard/components/sui-summary', $summary );

if ( $is_free ) {
	$this->render( 'admin/dashboard/components/blocks-free', $blocks );
} else {
	$this->render( 'admin/dashboard/components/blocks-pro', $blocks );
}

$this->render( 'admin/global/sui-components/sui-footer', $footer );

$this->render( 'admin/dashboard/components/dialogs', $dialogs );
