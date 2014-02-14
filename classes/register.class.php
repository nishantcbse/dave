<?php
include_once( 'generic.class.php' );

class Register extends Generic {


function __construct() {
  
	if(!empty($_GET['id'])) $this->grab();
	if(!empty($_GET['checkUserEmail'])) $this->uniqueUserName();
	if(!empty($_POST)) {

		foreach ($_POST as $key => $value)
			$this->options[$key] = parent::secure($value);

			   $this->uniqueUserName();   
			   $this->validate();
			   $this->add();
			} 

			if(!empty($this->error)){
				echo $this->error;
			} else {
				echo $this->result;
			}
	   exit;
	}
	
    public function registerProduct(){
		$sql = "SELECT * FROM advertisement_products WHERE label ='Register' AND flag = 0 ORDER BY position ASC ";
		$stmt = parent::query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$posX = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $posX[$pos[0]][$pos[1]] = array(
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell'],
											'image' => $row['image'],
										    );
			}
            return $posX;
		}
		
	}
	
	private function uniqueUserName() {
       
	    global $generic;
		
		$this->username = $_GET['email'];
		
        $sql = $sql = "SELECT * FROM login_users WHERE email = '" . $this->username . "' ";
        $query = $generic->query($sql);

		if( $query->rowCount() > 0 ){
            $this->error = '<div class="alert alert-error">'._('Email already exists.').'</div>';
        }else{
		    $this->result = '<div class="alert alert-success">' ._('no.').'</div>';
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


}

$register = new Register();

?>