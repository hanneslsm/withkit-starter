<?php
/**
 * Title: Pattern Test
 * Slug: withkit-starter/test
 * Categories: withkit-starter/test
 * Viewport width: 1920
 * Description: Test layout
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"is-style-default","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull is-style-default"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-overline"} -->
<p class="is-style-overline"><?php esc_html_e('This is your overline', 'withkit');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide"><?php esc_html_e('Place your medium headline here.', 'withkit');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id odio mollis, bibendum nibh eget, lacinia nibh. In molestie at dui et tincidunt.', 'withkit');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"grid","minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-1.webp","isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-1.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Headline', 'withkit');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Place your small text here.', 'withkit');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-2.webp","isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-2.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Headline', 'withkit');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Place your small text here.', 'withkit');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-3.webp","isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-3.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Headline', 'withkit');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Place your small text here.', 'withkit');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-4.webp","isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)","contentPosition":"bottom center","sizeSlug":"large","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-default"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholders/placeholder-image-4.webp" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(0deg,rgb(23,23,23) 0%,rgba(255,255,255,0) 38%)"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Headline', 'withkit');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Place your small text here.', 'withkit');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Click here', 'withkit');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
