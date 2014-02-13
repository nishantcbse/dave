<?php include_once('header.php'); ?>
<?php 
require __DIR__ . '/integration/paypal/sample/bootstrap.php';
include_once('classes/payment_confirm.class.php'); 
		

	use PayPal\Api\ExecutePayment;
	use PayPal\Api\Payment;
	use PayPal\Api\PaymentExecution;
	
	
	if(isset($_GET['success']) && $_GET['success'] == 'true'){
		
		// Get the payment Object by passing paymentId
		// payment id was previously stored in session in
		// CreatePaymentUsingPayPal.php
		$paymentId = $_SESSION['paymentId'];
		$payment = Payment::get($paymentId, $apiContext);
		
		// PaymentExecution object includes information necessary 
		// to execute a PayPal account payment. 
		// The payer_id is added to the request query parameters
		// when the user is redirected from paypal back to your site
		$execution = new PaymentExecution();
		$execution->setPayerId($_GET['PayerID']);
		
		//Execute the payment
		// (See bootstrap.php for more on `ApiContext`)
		$result = $payment->execute($execution, $apiContext);
	
		
		$paymentconfirm->payment_success($result);
		
	} else {
		echo "User cancelled payment.";
	}



?>


    <div class="container min-hight">
        <!-- BEGIN ABOUT INFO -->   
        <div class="row-fluid margin-bottom-30">
            <!-- BEGIN INFO BLOCK -->               
            <div class="span4 space-mobile pull-left">
				<div class="margin-bottom-30">
                	<div class="loginhead">
						<h4><?php  ?>  Please Check your email for verification </h4>
                    </div>
										
				</div>
            </div>
            <!-- END INFO BLOCK -->   

       <?php include 'pages/right_advertise.php'; ?>


         </div>
            <!-- END CAROUSEL -->             
        </div>
        <!-- END ABOUT INFO --> 
        
  </div>
<?php include_once('footer.php'); ?>