<?php
include_once( 'generic.class.php' );

class Settings extends Generic {
	
	private $options = array();
    
	function __construct() {

        $this->grab();
        $this->party_img();

		if(!empty($_POST)) {
				//print_r($_POST); 
				foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);
      
                $this->validate();
				$this->add();
				$this->edit_account_personam();
				$this->image_edit();
					
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
	
    private function edit_account_personam() {
		
		$id		=$_SESSION['jigowatt']['user_id'];
		$sql = "SELECT user_profile_id FROM login_users WHERE user_id= ".$id;
		$sql = parent::query($sql);
		$row = $sql->fetch(PDO::FETCH_ASSOC);
		$user_profile_id= $row['user_profile_id'];
		
		if (!empty($this->error)) return false;
		
        $first_name     	= $this->options['first_name'];
        $last_name     	 	= $this->options['last_name'];
        $address     	 	= $this->options['address'];
        $city     	 		= $this->options['city'];
        $email     	 		= $this->options['email'];
        $security_question 	= $this->options['security_question'];
        $answer     	 	= $this->options['answer'];

	    $sql = "UPDATE user_profiles SET `first_name` = '$first_name',`last_name` = '$last_name',`address` = '$address',`city` = '$city',`email` = '$email', `security_question` = '$security_question', `answer` = '$answer' WHERE `id` =".$user_profile_id;

		parent::query($sql);
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';

	}

    private function image_edit() {
		
		$id		=$_SESSION['jigowatt']['user_id'];
		$sql = "SELECT user_profile_id FROM login_users WHERE user_id= ".$id;
		$sql = parent::query($sql);
		$row = $sql->fetch(PDO::FETCH_ASSOC);
		$user_profile_id= $row['user_profile_id'];
		
		if (!empty($this->error)) return false;
		
        $avatar     	 	= $this->options['avatar'];

	    $sql = "UPDATE candidate_profiles SET `candidate_avatar` = '$avatar' WHERE `user_profile_id` =".$user_profile_id;

		parent::query($sql);
		print_r($sql);
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';

	}

    private function candidate_edit() {
		
		$id		=$_SESSION['jigowatt']['user_id'];
		$sql = "SELECT user_profile_id FROM login_users WHERE user_id= ".$id;
		$sql = parent::query($sql);
		$row = $sql->fetch(PDO::FETCH_ASSOC);
		$user_profile_id= $row['user_profile_id'];
		
		if (!empty($this->error)) return false;
		
        $info     	 			= $this->options['info'];
        $first_name     	 	= $this->options['first_name'];
        $middle_name     	 	= $this->options['middle_name'];
        $last_name     	 		= $this->options['last_name'];
        $political_party     	= $this->options['political_party'];
        $party_symbol     	 	= $this->options['party_symbol'];
        $province     	 		= $this->options['province'];
        $office_address     	= $this->options['office_address'];
        $office_city     	 	= $this->options['office_city'];
        $office_phone1     	 	= $this->options['office_phone1'];
        $office_fax     	 	= $this->options['avatar'];
        $office_email     	 	= $this->options['office_email'];
        $office_website     	= $this->options['office_website'];
        $office_fb_link     	= $this->options['office_fb_link'];
        $office_twitter_link    = $this->options['office_twitter_link'];

	    $sql = "UPDATE candidate_profiles SET `candidate_info` = '$info', `candidate_first_name` = '$first_name', `candidate_middle_name` = '$middle_name',`candidate_last_name` = '$last_name', `candidate_political_party` = '$political_party', `candidate_party_symbol` = '$party_symbol', `candidate_province` = '$province',`candidate_address` = '$office_address', `candidate_phone` = '$office_phone1',`candidate_city` = '$office_city',`candidate_email` = '$office_email', `candidate_website` = '$office_website', `candidate_fb_link` = '$office_fb_link', 'candidate_twitter_link' = '$office_twitter_link' WHERE `user_profile_id` =".$user_profile_id;

		parent::query($sql);
		print_r($sql);die();
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';

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