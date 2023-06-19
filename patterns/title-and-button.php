<?php
/**
 * Title: Title with button
 * slug: dui/title-and-button
 * categories: dreams-ui
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:cover {"url":"http://localhost:10155/wp-content/uploads/2023/06/brecht-corbeel-NLAYV1zTMVc-unsplash-scaled.jpg","id":127,"dimRatio":50,"minHeight":200} -->
	<div class="wp-block-cover" style="min-height:200px"><span aria-hidden="true"
			class="wp-block-cover__background has-background-dim"></span><img
			class="wp-block-cover__image-background wp-image-127" alt=""
			src="http://localhost:10155/wp-content/uploads/2023/06/brecht-corbeel-NLAYV1zTMVc-unsplash-scaled.jpg"
			data-object-fit="cover" />
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"1100px"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"left","style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"fontSize":"large"} -->
					<h2 class="wp-block-heading has-text-align-left has-large-font-size"><?php esc_html_e( "LET'S MAKE YOUR DREAM PROPERTY", 'dreams-ui' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
					<div class="wp-block-buttons">
						<!-- wp:button {"textAlign":"center","backgroundColor":"base","textColor":"contrast","style":{"border":{"radius":"0px"},"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"fontSize":"small"} -->
						<div class="wp-block-button has-custom-font-size has-small-font-size"><a
								class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-text-align-center wp-element-button"
								style="border-radius:0px;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e( 'Design Consultation', 'dreams-ui' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->