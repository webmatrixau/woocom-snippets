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

function custom_my_account_menu_items( $items ) {
    unset($items['downloads']);
    return $items;
}

add_filter( 'woocommerce_account_menu_items', 'custom_my_account_menu_items' );

?>
