<?php
/*
Plugin Name: Mondu Plugin Buyer Fee Cents
Plugin URI:  https://github.com/tikohov20/buyerfeecents
Description: Mondu plugin extension
Version:     1.0.0
Author:      Tigran
*/

if ( ! defined( 'ABSPATH' ) ) {
    die( 'Access denied.' );
}

add_filter('mondu_buyer_fee_cents', 'mondu_buyer_fee_cents_extension', 10, 2);

function mondu_buyer_fee_cents_extension($value, WC_Order $order) {
    return 0;
}