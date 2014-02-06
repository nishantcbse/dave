<?php
include_once( 'generic.class.php' );

class Settings extends Generic {
	
	private $options = array();
    
	function __construct() {

        $this->grab();
        $this->party_img();

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
	    if(empty($this->options['answer'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Answer.').'</div>';
        }
	    if(empty($this->options['security_question'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Security question.').'</div>';
        }
	    if(empty($this->options['email'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Email.').'</div>';
        }
	    if(empty($this->options['last_name'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Last name.').'</div>';
        }
		if(empty($this->options['first_name'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a First name.').'</div>';
        }
	}


    private function add() {

		if (!empty($this->error)) return false;

        $first_name     	= $this->options['first_name'];
        $last_name     	 	= $this->options['last_name'];
        $address     	 	= $this->options['address'];
        $city     	 		= $this->options['city'];
        $email     	 		= $this->options['email'];
        $security_question 	= $this->options['security_question'];
        $answer     	 	= $this->options['answer'];


	    $sql = "INSERT INTO user_profiles (first_name, last_name, address, city, email, security_question, answer)
						VALUES 						('$first_name','$last_name','$address','$city','$email','$security_question','$answer');";

		parent::query($sql);
		$id = parent::$dbh->lastInsertId();
		$_SESSION['user_profile_id'] = $id;
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';

	}
	
	
    private function grab() {

        $id = $_SESSION['jigowatt']['user_id'];
		
		$query = "SELECT login_users.*,candidate_profiles.*,user_profiles.* FROM `login_users` INNER JOIN user_profiles ON user_profiles.id = `login_users`.user_profile_id 
LEFT JOIN candidate_profiles ON candidate_profiles.user_profile_id = user_profiles.id  WHERE `login_users`.`user_id`=".$id;
		
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
	
	
	function party_img() {

		if (!empty($this->error)) return false;

		$params = array(
            $id         = $this->options['candidate_party_symbol'],
        );
		//print_r($params);
		$query = "SELECT * FROM settings_party_symbols WHERE id =".$id;
		$stmt   = parent::query($query);
        if( $stmt->rowCount() < 1 ) parent::displayMessage("<div class='alert alert-error'>No such record</div>");

	    foreach ($stmt->fetch(PDO::FETCH_ASSOC) as $field => $value)
		    $this->options[$field] = $value;
            //print_r($this->options); 
	}


}

$setting = new Settings();

?>