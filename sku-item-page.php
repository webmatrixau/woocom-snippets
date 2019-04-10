<?php

/*
 * SKU-ITEM-PAGE.PHP
 * 
 * Show SKU in a DIV on the Item page.
 * 
 * @author; Jake Howell.
 * @page; /woocommerce/single-product.php.
 */

add_action( 'woocommerce_single_product_summary', 'webmatrix_show_sku', 5 );

function webmatrix_show_sku(){
    global $product;
    echo '<div class="sku">SKU: ' . $product->get_sku() . '</div>';
}

?>
