# stripe-payment-gateway-php
Strip payment gateway installation in php 

1 ) Create Api Key with our Account.
2) Download the Stripe SDK
3) Set API key In your file like
 require_once('stripe/init.php'); 

// Set Stripe API Key 
\Stripe\Stripe::setApiKey("sk_test_Msw1s4bvMPt4coVijlRZ1oX9");

4) Generate valid Stripe Token on client side
5)  Create customer for payment like
$customer = \Stripe\Customer::create(array( 
					"source" => $token_id, // obtained with Stripe.js 
					"description" => $row_user['email'] 
				));
6) Create charge(payment) for created customer by using customerid like

// Create a charge object to charge a credit or a debit card 
	$charge = \Stripe\Charge::create(array( 
				'customer'		=>	$customer_id, 
				'amount'		=>	($totalAmount * 100), 
				'currency'		=>	"usd", 
				"description"	=>	$descrption 
			));
