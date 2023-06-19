<?php
/**
 * Title: Information Footer
 * slug: dui/information-footer
 * categories: dreams-ui
 */
?>

<!-- wp:group {"backgroundColor":"contrast","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:site-logo {"width":180} /-->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|40","bottom":"0","left":"0"}}}} -->
			<p
				style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:0;font-size:14px">
				<?php esc_html_e( 'Dreams Associates is a full-service interior design company located in the Saswad, specializing in both
				full home interior and commercial design.', 'dreams-ui' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column"><!-- wp:heading {"level":5} -->
			<h5 class="wp-block-heading"><?php esc_html_e( 'Company', 'dreams-ui' ); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":9,"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column"><!-- wp:heading {"level":5} -->
			<h5 class="wp-block-heading"><?php esc_html_e( 'Product', 'dreams-ui'); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":9,"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column"><!-- wp:heading {"level":5} -->
			<h5 class="wp-block-heading"><?php esc_html_e( 'Information', 'dreams-ui'); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:navigation {"ref":9,"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
			<h5 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Contact', 'dreams-ui'); ?></h5>
			<!-- /wp:heading -->

			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"24px"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:24px">
					<!-- wp:image {"id":31,"width":24,"height":24,"sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"24px"}},"className":"is-style-default"} -->
					<figure class="wp-block-image size-full is-resized is-style-default"><img
							src="/wp-content/themes/dreams-ui/assets/svg/user-icon.svg" alt=""
							class="wp-image-31" width="24" height="24" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
					<p><?php esc_html_e( '+91 738343432', 'dreams-ui'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center">
				<!-- wp:column {"verticalAlignment":"center","width":"24px"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:24px">
					<!-- wp:image {"id":32,"width":24,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized"><img
							src="/wp-content/themes/dreams-ui/assets/svg/user-icon.svg" alt=""
							width="24" height="24" class="wp-image-32" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
					<p><?php esc_html_e( 'on@dreams.com', 'dreams-ui'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
			<div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:column {"width":"24px"} -->
				<div class="wp-block-column" style="flex-basis:24px">
					<!-- wp:image {"id":31,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img
							src="/wp-content/themes/dreams-ui/assets/svg/user-icon.svg" alt=""
							class="wp-image-31" /></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph -->
					<p><?php esc_html_e( 'Address', 'dreams-ui'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->