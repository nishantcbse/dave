<?php
include_once( 'generic.class.php' );

class Registration_confirm extends Generic {

    function __construct() {
		  if($_GET['email'] && $_GET['confirm']){
		     $this->confirm();
		  }
        }
		
	
	public function confirm(){
        $email		 = $_GET['email'] ;
		$secureid    = $_GET['confirm'];
        $sql = "SELECT * FROM login_users WHERE email = '" . $email . "' AND secure_id = '".$secureid."'";
    	$stmt = parent::query($sql);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$isVarified  = $row['is_varified'];
		if ($stmt->rowCount() > 0) {
            if($isVarified == 0){
			  $sql1 = "UPDATE `login_users` SET `is_varified`= 1, `secure_id`= '' WHERE email = '" . $email."'";
			  parent::query($sql1);
			 
			  $_SESSION['LOGIN_MESSAGE'] = 'Your Account Has Varified . Please Login';
			  header("Location: login.php");
			}else{
			  $_SESSION['LOGIN_MESSAGE'] = 'Your Account already varified. Plase Login';
			  header("Location: login.php");
			}
		}else{
			  $_SESSION['PRODUCT_MESSAGE'] = 'You havent selected any product. Please purchase any one product';
			  header("Location: product.php");
		}
		
		echo $_SESSION['PRODUCT_MESSAGE'];
		echo $_SESSION['LOGIN_MESSAGE'];
		
		
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
}

$registrationconfirm = new Registration_confirm();

?>