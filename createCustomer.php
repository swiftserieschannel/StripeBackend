
<?php


require_once('./stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_nPdYeoBLMmIE4lYcuX0ixLc700aonA2sCZ');


$email =  $_POST['email'] ;
$fullName = $_POST['name'];
$phone	= $_POST['phone'];

$key = \Stripe\Customer::create([
  'description' => 'testing','email'=>$email,'phone'=>$phone, 'name'=>$fullName
]);


echo json_encode($key);

?>