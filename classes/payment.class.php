<?php
include_once( 'generic.class.php' );

class Register extends Generic {

    function __construct() {
		
        if(!empty($_GET['payment'])) $this->payment();

        }




    private function payment() {
      echo true;			
	}


}

$register = new Register();

?>