<?php
/**
 * Welcome dialog for fresh installs.
 *
 * @package Hustle
 * @since 4.0.0
 */

?>

<div class="sui-modal sui-modal-md">

	<div
		role="dialog"
		id="hustle-dialog--release-highlight"
		class="sui-modal-content"
		aria-modal="true"
		aria-labelledby="hustle-dialog--release-highlight-title"
		aria-describedby="hustle-dialog--release-highlight-description"
		data-nonce="<?php echo esc_attr( wp_create_nonce( 'hustle_dismiss_notification' ) ); ?>"
	>

		<div class="sui-box" style="margin-bottom: 10px;">

			<div class="sui-box-header sui-flatten sui-content-center sui-spacing-right--60  sui-spacing-left--60">

				<button class="sui-button-icon sui-button-float--right hustle-modal-close" style="z-index: 2;" data-modal-close>
					<span class="sui-icon-close sui-md" aria-hidden="true"></span>
					<span class="sui-screen-reader-text"><?php esc_html_e( 'Close this dialog window', 'hustle' ); ?></span>
				</button>

				<figure role="banner" class="sui-box-banner" aria-hidden="true">
					<span class="wistia_embed wistia_async_rxir9wutyt popover=true popoverAnimateThumbnail=true" style="display:inline-block;height:281px;width:500px;max-width: 100%;">&nbsp;</span>
				</figure>

				<?php /* translators: current user's name */ ?>
				<h3 id="hustle-dialog--release-highlight-title" class="sui-box-title sui-lg"><?php esc_html_e( 'New! Introducing Templates', 'hustle' ); ?></h3>

				<p id="hustle-dialog--release-highlight-description" class="sui-description">
					<?php esc_html_e( "Say hello to our brand new templates. Now it's easier than ever to build great looking modules in minutes. You don't have to start from scratch anymore – just pick one of our pre-designed templates while creating a new module and customize it to fit your needs.", 'hustle' ); ?>
				</p>

			</div>

			<div class="sui-box-footer sui-flatten sui-content-center sui-spacing-bottom--50">

				<button id="hustle-release-highlight-action-button" class="sui-button">
					<?php esc_html_e( 'Got It', 'hustle' ); ?>
				</button>

			</div>

		</div>

		<button class="sui-modal-skip" data-modal-close><?php esc_html_e( "I'll check this later", 'hustle' ); ?></button>

	</div>

</div>
