<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51PbK3TAeaZekztiRipqSrmXCcjAAJZ6qLwnftVLh5e7k9Luhq2chVFprLpF4lmcWDhkNXU2OTHIkYftSjv0HQ1Zh00d7VTWjXJ');


if (isset($_POST['stripeToken'])) {
    $charge = \Stripe\Charge::create([
        'source' => $_POST['stripeToken'],
        'description' => "subscription",
        'amount' => 1000,
        'currency' => 'usd',
    ]);
    echo "<pre>";
    print_r($charge);
    echo "</pre>";                
        //  header("Location: success.php");
        //  exit;
} else {
    echo "Error: 'stripeToken' not found in POST data.";
  
}


?>
