
<?php


require_once('./stripe-php/init.php');
\Stripe\Stripe::setApiKey('sk_test_nPdYeoBLMmIE4lYcuX0ixLc700aonA2sCZ');


$email =  $_GET['email'] ;
$fullName = $_POST['name'];
$phone	= $_POST['phone'];
echo $email.$fullName;
$key = \Stripe\Customer::create([
  'description' => 'testing','email'=>"$email",'phone'=>"$phone", 'name'=>$fullName
]);


echo json_encode($key);

?>
