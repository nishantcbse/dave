<?php
include_once( 'generic.class.php' );

class Payment_confirm extends Generic {

    function __construct() {
		  // print_r($_SESSION);  
        }
		
	public function payment_success($result){
	    $productArray     	= $_SESSION['cart']['productArray'];
		$productId 			= '';
        foreach($productArray as $productIds){
		   $productId .=  $productIds.'|';
		}
	    
        $price	     		= $_SESSION['cart']['price'];
		$productid          = $productId;
        $user_profile_id    = $_SESSION['user_profile_id'];
        $paymentId     	 	= $_SESSION['paymentId'];
        $created            = date('Y-m-d  H:i:s');

	    $sql = "INSERT INTO payments (txnid, payment_amount, itemid, user_id, created)
						VALUES 	('$paymentId','$price','$productid','$user_profile_id','$created');";
		parent::query($sql);
	    $this->createUser();
	}
	
	public function createUser(){
        $user_profile_id    = $_SESSION['user_profile_id'];
        $sql = "SELECT * FROM user_profiles WHERE id = " . $user_profile_id . " AND flag = 0";
    	$stmt = parent::query($sql);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$first_name  = $row['first_name'];
		$last_name   = $row['last_name'];
		$middle_name = $row['middle_name'];
		$email       = $row['email'];
		$user_level  = 'a:1:{i:0;s:1:"3";}';
		$created     = date('Y-m-d  H:i:s');
		$password    = $this->generateRandomString();
		$encPassword = md5($password);
		$secure_id    = $this->generateRandomString().'n3w0a9r6e';
	    $sql = "INSERT INTO login_users (user_level, username, name, email, password,user_profile_id,is_varified,created,secure_id)
						VALUES 	('$user_level','$email','$name','$email','$encPassword','$user_profile_id','0','$created','$secure_id');";
		parent::query($sql);
		
		$to      = $email; // note the comma
		$subject = 'Login Information For Dave';
		$message = 'username'.$email.'--------------password'.$password.'click here for verified <a href="http://nwareindia.com/dave/registration_confirmation.php?email='.$email.'&confirm='.$secure_id.'">nwareindia.com/emailconfirmation</a>';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= $email . "\r\n";
		$headers .= 'From: Dave' . "\r\n";
		$headers .= 'Cc: ' . "\r\n";
		$headers .= 'Bcc: ' . "\r\n";
		
		mail($to, $subject, $message, $headers);	
		
		
	}
	
	public function generateRandomString() {
		$length = 10;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}	
	
	public function payment_fail(){
	
	
	}
	
	
	
	public function emailTemplate(){
	
			// multiple recipients
			$to  = 'aidan@example.com' . ', '; // note the comma
			
			// subject
			$subject = 'Birthday Reminders for August';
			
			// message
			$message = '
			<html>
			<head>
			  <title>Birthday Reminders for August</title>
			</head>
			<body>
			  <p>Here are the birthdays upcoming in August!</p>
			  <table>
				<tr>
				  <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
				</tr>
				<tr>
				  <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
				</tr>
				<tr>
				  <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
				</tr>
			  </table>
			</body>
			</html>
			';
			
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
			// Additional headers
			$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
			$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";
			$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
			$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
			
			// Mail it
			mail($to, $subject, $message, $headers);	
	
	}



}

$paymentconfirm = new Payment_confirm();

?>