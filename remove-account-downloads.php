<?php

/*
 * REMOVE-ACCOUNTS-DOWNLOADS.PHP
 * 
 * Removes accounts from the downloads page.
 * 
 * @author; Jake Howell.
 * @page; /woocommerce/myaccount/navigation.php
 */

function custom_my_account_menu_items( $items ) {
    unset($items['downloads']);
    return $items;
}

add_filter( 'woocommerce_account_menu_items', 'custom_my_account_menu_items' );

?>
