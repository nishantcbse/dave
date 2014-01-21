<?php
include_once( 'generic.class.php' );

class Register extends Generic {

    function __construct() {
		
		require '../integration/paypal/sample/bootstrap.php';
		require '../integration/paypal/lib/PayPal/Api/Amount';
		require '../integration/paypal/lib/PayPal/Api/Details';
		require '../integration/paypal/lib/PayPal/Api/Item';
		require '../integration/paypal/lib/PayPal/Api/ItemList';
		require '../integration/paypal/lib/PayPal/Api/Payer';
		require '../integration/paypal/lib/PayPal/Api/Payment';
		require '../integration/paypal/lib/PayPal/Api/RedirectUrls';
		require '../integration/paypal/lib/PayPal/Api/Transaction';
        if(!empty($_GET['payment'])) $this->payment();

        }




    private function payment() {
		
		
				$payer = new Payer();
				$payer->setPaymentMethod("paypal");
				
				// ### Itemized information
				// (Optional) Lets you specify item wise
				// information
				$item1 = new Item();
				$item1->setName('Ground Coffee 40 oz')
					->setCurrency('USD')
					->setQuantity(1)
					->setPrice('7.50');
				$item2 = new Item();
				$item2->setName('Granola bars')
					->setCurrency('USD')
					->setQuantity(5)
					->setPrice('2.00');
				
				$itemList = new ItemList();
				$itemList->setItems(array($item1, $item2));
				
				// ### Additional payment details
				// Use this optional field to set additional
				// payment information such as tax, shipping
				// charges etc.
				$details = new Details();
				$details->setShipping('1.20')
					->setTax('1.30')
					->setSubtotal('17.50');
				
				// ### Amount
				// Lets you specify a payment amount.
				// You can also specify additional details
				// such as shipping, tax.
				$amount = new Amount();
				$amount->setCurrency("USD")
					->setTotal("20.00")
					->setDetails($details);
				
				// ### Transaction
				// A transaction defines the contract of a
				// payment - what is the payment for and who
				// is fulfilling it. 
				$transaction = new Transaction();
				$transaction->setAmount($amount)
					->setItemList($itemList)
					->setDescription("Payment description");
				
				// ### Redirect urls
				// Set the urls that the buyer must be redirected to after 
				// payment approval/ cancellation.
				$baseUrl = getBaseUrl();
				$redirectUrls = new RedirectUrls();
				$redirectUrls->setReturnUrl("$baseUrl/ExecutePayment.php?success=true")
					->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");
				
				// ### Payment
				// A Payment Resource; create one using
				// the above types and intent set to 'sale'
				$payment = new Payment();
				$payment->setIntent("sale")
					->setPayer($payer)
					->setRedirectUrls($redirectUrls)
					->setTransactions(array($transaction));
				
				// ### Create Payment
				// Create a payment by calling the 'create' method
				// passing it a valid apiContext.
				// (See bootstrap.php for more on `ApiContext`)
				// The return object contains the state and the
				// url to which the buyer must be redirected to
				// for payment approval
				try {
					$payment->create($apiContext);
				} catch (PayPal\Exception\PPConnectionException $ex) {
					echo "Exception: " . $ex->getMessage() . PHP_EOL;
					var_dump($ex->getData());	
					exit(1);
				}
				
				// ### Get redirect url
				// The API response provides the url that you must redirect
				// the buyer to. Retrieve the url from the $payment->getLinks()
				// method
				foreach($payment->getLinks() as $link) {
					if($link->getRel() == 'approval_url') {
						$redirectUrl = $link->getHref();
						break;
					}
				}
				
				// ### Redirect buyer to PayPal website
				// Save the payment id so that you can 'complete' the payment
				// once the buyer approves the payment and is redirected
				// back to your website.
				//
				// It is not a great idea to store the payment id
				// in the session. In a real world app, you may want to 
				// store the payment id in a database.
				$_SESSION['paymentId'] = $payment->getId();
				if(isset($redirectUrl)) {
					header("Location: $redirectUrl");
					exit;
				}
				
	}


}

$register = new Register();

?>