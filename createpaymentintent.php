<?php
try{
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys

require_once('./stripe-php/init.php');

\Stripe\Stripe::setApiKey('sk_test_nPdYeoBLMmIE4lYcuX0ixLc700aonA2sCZ');

if (!isset($_POST['amount']) || !isset($_POST['currency']))
{
    exit(http_response_code(400));
}

$intent = \Stripe\PaymentIntent::create([
    'amount' => $_POST['amount'],
    'currency' => $_POST['currency'],
    'customer' => $_POST['customerId']
]);

$client_secret = $intent->client_secret;
echo json_encode(array("clientSecret"=>$client_secret));
// Pass the client secret to the client
} catch (Exception $e) {
    echo $e;
}

?>
