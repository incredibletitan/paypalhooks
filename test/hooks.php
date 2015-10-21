<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        PAYPAL_CLIENT_ID,
        PAYPAL_SECRET
    )
);

$output = \PayPal\Api\WebhookEventType::availableEventTypes($apiContext);

echo "<pre>";
error_log($output);
echo "</pre>";