<?php
/**
 * Title: Home AI Support
 * Slug: menume/home-ai-support
 * Description: Centered ChatGPT-style AI support section.
 * Categories: menume-home
 * Keywords: ai, chatgpt, assistant, support, menume
 * Inserter: true
 */

$menume_ai_support_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : substr( get_locale(), 0, 2 );
$menume_ai_support_copy = array(
	'de' => array(
		'badge'       => 'CHATGPT SUPPORT',
		'title'       => 'KI-HILFE FÜR DEIN RESTAURANT.',
		'description' => 'Verbinde MenuMe mit ChatGPT und steuere Produkte, Inhalte und Abläufe deines Restaurants per KI.',
	),
	'en' => array(
		'badge'       => 'CHATGPT SUPPORT',
		'title'       => 'AI SUPPORT FOR YOUR RESTAURANT.',
		'description' => 'Connect MenuMe with ChatGPT to manage products, content, and restaurant workflows with AI.',
	),
	'ar' => array(
		'badge'       => 'دعم CHATGPT',
		'title'       => 'دعم ذكي لمطعمك.',
		'description' => 'اربط MenuMe مع ChatGPT وتحكم بالمنتجات والمحتوى وإدارة مطعمك عبر الذكاء الاصطناعي.',
	),
);

$menume_ai_support_text = $menume_ai_support_copy[ $menume_ai_support_lang ] ?? $menume_ai_support_copy['de'];
?>

<!-- wp:group {"align":"full","anchor":"ki-support","tagName":"section","className":"menume-ai-support","metadata":{"name":"KI Support"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull menume-ai-support" id="ki-support">
	<!-- wp:html -->
	<div class="menume-ai-support__soundwave alignfull" data-ai-support-soundwave aria-hidden="true">
		<canvas class="menume-ai-support__soundwave-canvas"></canvas>
	</div>
	<!-- /wp:html -->

	<!-- wp:group {"align":"wide","className":"menume-ai-support__inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide menume-ai-support__inner">
		<!-- wp:paragraph {"align":"center","className":"menume-ai-support__eyebrow"} -->
		<p class="has-text-align-center menume-ai-support__eyebrow"><?php echo esc_html( $menume_ai_support_text['badge'] ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"className":"menume-ai-support__title"} -->
		<h2 class="wp-block-heading has-text-align-center menume-ai-support__title"><?php echo esc_html( $menume_ai_support_text['title'] ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","className":"menume-ai-support__description"} -->
		<p class="has-text-align-center menume-ai-support__description"><?php echo esc_html( $menume_ai_support_text['description'] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
