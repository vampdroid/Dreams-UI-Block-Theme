<?php
/**
 * Title: Two columns - one for information and other for work showcasing
 * slug: dui/info-and-work
 * categories: dreams-ui
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained","contentSize":"1100px","justifyContent":"center"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background"
	style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'RECENT PROJECTS', 'dreams-ui' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":1.3}}} -->
			<p style="line-height:1.3"><?php esc_html_e( "Take a look at our stunning recent interior design projects that showcase our
				creativity, attention to detail, and commitment to exceeding our client's expectation.", 'dreams-ui' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size"><a
						class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php esc_html_e( 'View All', 'dreams-ui' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":89,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img
							src="/wp-content/themes/dreams-ui/assets/images/9.jpg"
							alt="" class="wp-image-89" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
					<p style="font-style:normal;font-weight:700"><?php esc_html_e( "Rashmi Seta's 2BHK Home", 'dreams-ui' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:image {"id":90,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img
							src="/wp-content/themes/dreams-ui/assets/images/3.jpg"
							alt="" class="wp-image-90" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
					<p style="font-style:normal;font-weight:700"><?php esc_html_e( "Diljit's Luxorious Home", 'dreams-ui' ); ?></p>
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