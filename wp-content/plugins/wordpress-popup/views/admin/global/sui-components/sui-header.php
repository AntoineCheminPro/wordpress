<?php
/**
 * SUI Header.
 *
 * @uses ./sui-icon
 *
 * @package Hustle
 * @since 4.3.0
 */

$documentation = ( isset( $documentation ) && ! empty( $documentation ) ) ? $documentation : true;
$notifications = ( isset( $notifications ) && ! empty( $notifications ) ) ? $notifications : true;
?>

<div class="sui-header">

	<h1 class="sui-header-title"><?php echo esc_html( $title ); ?></h1>

	<?php if ( $documentation ) { ?>

		<div class="sui-actions-right">

			<button class="sui-button sui-button-ghost"><?php $this->render( 'admin/global/sui-components/sui-icon', array( 'icon' => 'academy' ) ); ?><?php esc_html_e( 'View Documentation', 'hustle' ); ?></button>

		</div>

	<?php } ?>

</div>

<?php
// Show floating notifications wrapper.
if ( $notifications ) {
	echo '<div id="hustle-floating-notifications-wrapper" class="sui-floating-notices"></div>';
}
