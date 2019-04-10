<?php

/*
 * SKU-ITEM-PAGE.PHP
 * 
 * Show SKU in a DIV on the Item page.
 * 
 * @author; ???.
 * @location; /woocommerce/single-product.php.
 * @file; functions.php
 */

add_action( 'woocommerce_single_product_summary', 'webmatrix_show_sku', 5 );

function webmatrix_show_sku(){
    global $product;
    echo '<div class="sku">SKU: ' . $product->get_sku() . '</div>';
}

?>
