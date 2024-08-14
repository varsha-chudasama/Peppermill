<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta">
<?php $text = get_field('text'); 
	if(!empty($text)): 
	?>
	<div class=""><?php echo $text; ?></div>
	<?php endif; ?>
	<?php $cards = get_field('cards'); 
	if(!empty($cards)): 
	?>
	<ul class="d-flex list-none footer-ul mb-0 px-0 dmt-30">
		<?php foreach($cards as $cards_custom): ?>
		<li class="me-lg-4 me-1"><a href="javascript:void(0)" class="d-inline-block footer-icon"><img src="<?php echo $cards_custom['image']['url'];?>" class="w-100" alt=""></a></li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
	
	<?php do_action( 'woocommerce_product_meta_start' ); ?>
	<div style="display:none;">
	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>
	</div>
</div>
