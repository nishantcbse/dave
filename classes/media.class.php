<?php
include_once( 'generic.class.php' );

class Home extends Generic {

    function __construct() {
		
		if(!empty($_POST)) {

			foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);

				   if(!empty($_POST['media'])){
						echo $this->addMedia();
					} 
                } 

       

		
	 }
	 
    private function addMedia() {

		if (!empty($this->error)) return false;

        $name            	= $this->options['name'];
        $type     	 	    = $this->options['type'];
        $user_id     	 	= $this->options['address'];
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
            //echo '<pre>',print_r($this->options); 
	}

	public function getField($field) {

		if (!empty($this->options[$field]))
			return $this->options[$field];
	}

}

$home = new Home();
?>