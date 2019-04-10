<?php

/*
 * REMOVE-ACCOUNTS-DOWNLOADS.PHP
 * 
 * Removes Downloads from the `myaccount` page.
 * 
 * @author; ???.
 * @location; /woocommerce/myaccount/navigation.php
 * @file; functions.php
 */

function webmatrix_my_account_menu_items( $items ) {
    unset($items['downloads']);
    return $items;
}

add_filter( 'woocommerce_account_menu_items', 'webmatrix_my_account_menu_items' );

?>
