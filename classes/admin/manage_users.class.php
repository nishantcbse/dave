<?php
//include_once( 'classes/generic.class.php' );
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');
class Users extends Generic {
	
	private $options = array();
    
	function __construct() {

        $this->grab();

		if(!empty($_POST)) {
				print_r($_POST); 
				foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);
      
                $this->validate();
                $this->add();
					
                if(!empty($this->error)){
                    echo $this->error;
                } else {
    	            echo $this->result;
                }
				exit;
            } 

           

        }

	private function validate() {
	    if(empty($this->options['password'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Password.').'</div>';
        }
	    if(empty($this->options['email'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Email.').'</div>';
        }
	    if(empty($this->options['username'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Username').'</div>';
        }
		if(empty($this->options['name'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Name.').'</div>';
        }
	}


    private function add() {

		if (!empty($this->error)) return false;

        $name     			= $this->options['name'];
        $username     	 	= $this->options['username'];
        $email     			= $this->options['email'];
        $password     	 	= $this->options['password'];


	    $sql = "INSERT INTO login_users (name, username, email, password)
						VALUES 			('$name','$username','$email','$password');";

		parent::query($sql);
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';

	}
	
	
    private function grab() {

        $id = $_SESSION['jigowatt']['user_id'];
		
		$query = "SELECT * FROM `login_users` WHERE `user_id`=".$id;
		
		$stmt   = parent::query($query);

        if( $stmt->rowCount() < 1 ) parent::displayMessage("<div class='alert alert-error'>No such record</div>");

	    foreach ($stmt->fetch(PDO::FETCH_ASSOC) as $field => $value)
		    $this->options[$field] = $value;
            //print_r($this->options); 
	}

	public function getField($field) {

		if (!empty($this->options[$field]))
			return $this->options[$field];
	}
	
	


}

$users = new Users();

?>