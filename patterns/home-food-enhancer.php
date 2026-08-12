<?php
/**
 * Title: Home Food Image Enhancer
 * Slug: menume/home-food-enhancer
 * Description: Interactive food-photo before and after comparison with three enhancement styles.
 * Categories: menume-home
 * Keywords: food, ai, image, before, after, comparison, menume
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","anchor":"food-image-ai","tagName":"section","className":"menume-enhancer","metadata":{"name":"Food Image AI Vergleich"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-enhancer" id="food-image-ai">
	<!-- wp:group {"align":"wide","className":"menume-enhancer__inner","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide menume-enhancer__inner">
		<!-- wp:group {"className":"menume-enhancer__showcase","layout":{"type":"default"}} -->
		<div class="wp-block-group menume-enhancer__showcase">
			<!-- wp:group {"className":"menume-enhancer__media","layout":{"type":"default"}} -->
			<div class="wp-block-group menume-enhancer__media">
				<!-- wp:group {"className":"menume-enhancer__comparison","metadata":{"name":"Vorher-Nachher-Vergleich"},"layout":{"type":"default"}} -->
				<div class="wp-block-group menume-enhancer__comparison">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-enhancer__image menume-enhancer__before"} -->
				<figure class="wp-block-image size-full menume-enhancer__image menume-enhancer__before"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/food-enhancer/truffle-pasta-before.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Trüffelpasta vor der Bildoptimierung', 'menume' ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-enhancer__image menume-enhancer__after is-active"} -->
				<figure class="wp-block-image size-full menume-enhancer__image menume-enhancer__after is-active"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/food-enhancer/truffle-pasta-natural.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Natürlich optimierte Trüffelpasta', 'menume' ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-enhancer__image menume-enhancer__after"} -->
				<figure class="wp-block-image size-full menume-enhancer__image menume-enhancer__after"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/food-enhancer/truffle-pasta-warm.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Warm und appetitlich optimierte Trüffelpasta', 'menume' ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"menume-enhancer__image menume-enhancer__after"} -->
				<figure class="wp-block-image size-full menume-enhancer__image menume-enhancer__after"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/food-enhancer/truffle-pasta-studio.jpg' ) ); ?>" alt="<?php echo esc_attr__( 'Im Studio-Look optimierte Trüffelpasta', 'menume' ); ?>"/></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"className":"menume-enhancer__label menume-enhancer__label--before"} -->
				<p class="menume-enhancer__label menume-enhancer__label--before"><?php echo esc_html__( 'Vorher', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"menume-enhancer__label menume-enhancer__label--after"} -->
				<p class="menume-enhancer__label menume-enhancer__label--after"><?php echo esc_html__( 'Nachher', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"className":"menume-enhancer__handle","layout":{"type":"default"}} -->
				<div class="wp-block-group menume-enhancer__handle">
					<!-- wp:paragraph --><p>↔</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"center","className":"menume-enhancer__hint"} -->
				<p class="has-text-align-center menume-enhancer__hint"><?php echo esc_html__( 'Ziehe den Regler, um den Unterschied zu sehen.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"menume-enhancer__style-picker","metadata":{"name":"Bildstile"},"layout":{"type":"default"}} -->
			<div class="wp-block-group menume-enhancer__style-picker">
				<!-- wp:paragraph {"className":"menume-enhancer__picker-eyebrow"} -->
				<p class="menume-enhancer__picker-eyebrow"><?php echo esc_html__( 'FOOD IMAGE AI', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"level":2,"className":"menume-enhancer__picker-title"} -->
				<h2 class="wp-block-heading menume-enhancer__picker-title"><?php echo esc_html__( 'PROFI-FOTOS. OHNE FOTOSTUDIO.', 'menume' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"menume-enhancer__picker-copy"} -->
				<p class="menume-enhancer__picker-copy"><?php echo esc_html__( 'Ein Handyfoto reicht: MenuMe verwandelt es in ein professionelles Foodfoto – ganz ohne Fotostudio, Fotograf oder teure Shootings. Wähle den Stil, der zu deinem Restaurant passt.', 'menume' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"className":"menume-enhancer__style-options","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
				<div class="wp-block-buttons menume-enhancer__style-options">
					<!-- wp:button {"className":"menume-enhancer__style-option is-active"} -->
					<div class="wp-block-button menume-enhancer__style-option is-active"><a class="wp-block-button__link wp-element-button" href="#food-image-ai"><?php echo esc_html__( 'Mobile zu Profi', 'menume' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"menume-enhancer__style-option"} -->
					<div class="wp-block-button menume-enhancer__style-option"><a class="wp-block-button__link wp-element-button" href="#food-image-ai"><?php echo esc_html__( 'KI-Neuaufbau', 'menume' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"menume-enhancer__style-option"} -->
					<div class="wp-block-button menume-enhancer__style-option"><a class="wp-block-button__link wp-element-button" href="#food-image-ai"><?php echo esc_html__( 'Farbe & Schärfe', 'menume' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
