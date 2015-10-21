<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        PAYPAL_CLIENT_ID,
        PAYPAL_SECRET
    )
);

$bodyReceived = file_get_contents('php://input');

// ### Validate Received Event Method
// Call the validateReceivedEvent() method with provided body, and apiContext object to validate
try {
    $output = \PayPal\Api\WebhookEvent::validateAndGetReceivedEvent($bodyReceived, $apiContext);
    error_log(var_export('Supertest:' . $output, true));
} catch (Exception $ex) {
}



