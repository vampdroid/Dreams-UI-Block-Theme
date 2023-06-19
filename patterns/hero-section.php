<?php
/**
 * Title: Hero Section
 * slug: dui/hero-section
 * categories: dreams-ui
 */
?>

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"verticalAlignment":null} -->
	<div class="wp-block-columns">
		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis: 55%">
			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading">
				<?php esc_html_e( 'BEST INTERIOR DESIGN FIRM IN PUNE', 'dreams-ui' ); ?>
			</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>
				<?php esc_html_e( 'Dream Associates is a full-service interior design company
				located in Saswad, specializing in both residential and
				commerical design', 'dreams-ui' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size">
					<a class="wp-block-button__link wp-element-button" style="border-radius: 0px"><?php esc_html_e( 'Get A Quote', 'dreams-ui' ); ?></a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-outline","fontSize":"small"} -->
				<div class="wp-block-button has-custom-font-size is-style-outline has-small-font-size">
					<a class="wp-block-button__link wp-element-button" style="border-radius: 0px"><?php esc_html_e( 'Design Consultation', 'dreams-ui' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis: 45%">
			<!-- wp:image {"id":75,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topRight":"0px","bottomRight":"0px","bottomLeft":"0px","topLeft":"100px"}}},"className":"is-style-rounded"} -->
			<figure class="wp-block-image size-large has-custom-border is-style-rounded">
				<img src="http://localhost:10155/wp-content/uploads/2023/06/atilla-taskiran-I4jC9D7r8Nc-unsplash-683x1024.jpg"
					alt="" class="wp-image-75" style="
					border-top-left-radius: 100px;
					border-top-right-radius: 0px;
					border-bottom-left-radius: 0px;
					border-bottom-right-radius: 0px;
				  " />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->