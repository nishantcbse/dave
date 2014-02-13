<?php
include_once( 'generic.class.php' );

class Settings extends Generic {
	
	private $options = array();
    
	function __construct() {

        $this->grab();
        //$this->
		
		if(!empty($_GET['media'])) $this->addMedia();
		if(!empty($_GET['deleteMedia'])) $this->deleteMedia();
		//if(!empty($_GET['viewmedia'])) $this->mediaView();

		if(!empty($_POST)) {
				foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);
      
			    if ($this->options['action']== 'personal'){
					$this->validate_personal();
					$this->edit_personal();
				}else if ($this->options['action']== 'candidate'){
				     $this->candidate_edit();
				}else if ($this->options['action']== 'avatar'){
				   $this->image_edit();
				}else if($this->options['action']== 'editproduct'){
				    $this->edit_product();
				}
				
				
                if(!empty($this->error)){
                    echo $this->error;
                } else {
    	            echo $this->result;
                }
				exit;
            } 

           

        }

	private function validate_personal() {
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
	
    private function edit_personal() {
		
		
		if (!empty($this->error)) return false;
		
        $first_name     	= $this->options['first_name'];
        $last_name     	 	= $this->options['last_name'];
        $address     	 	= $this->options['address'];
        $city     	 		= $this->options['city'];
        $email     	 		= $this->options['email'];
		$id                 = $this->options['personal-info-id'];

	    $sql = "UPDATE user_profiles SET `first_name` = '$first_name',`last_name` = '$last_name',`address` = '$address',`city` = '$city',`email` = '$email' WHERE `id` =".$id;

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
		
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';

	}

    private function candidate_edit() {
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
		$id                 	= $this->options['candidate_id'];

	    $sql = "UPDATE candidate_profiles SET `candidate_info` = '$info', `candidate_first_name` = '$first_name', `candidate_middle_name` = '$middle_name',`candidate_last_name` = '$last_name', `candidate_political_party` = '$political_party', `candidate_party_symbol` = '$party_symbol', `candidate_province` = '$province',`candidate_address` = '$office_address', `candidate_phone` = '$office_phone1',`candidate_city` = '$office_city',`candidate_email` = '$office_email', `candidate_website` = '$office_website', `candidate_fb_link` = '$office_fb_link', `candidate_twitter_link` = '$office_twitter_link' WHERE `candidate_id` =".$id;

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
	
	
   private function addMedia() {

		if (!empty($this->error)) return false;

        $name            	= $_GET['name'];
        $type     	 	    = $_GET['type'];
        $candidate     	 	= $this->getField('candidate_id');
	    $sql = "INSERT INTO media (name, type, candidate_id) VALUES ('$name','$type','$candidate');";
		parent::query($sql);
		$id = parent::$dbh->lastInsertId();
		
		$sqlMedia = "SELECT * FROM media WHERE id=".$id;
        $query = parent::query($sqlMedia);
        
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $list[] = array(
				    'id' 	     =>   $row['id'],
					'name'       =>   $row['name'],
					'type'       =>   $row['type'],
					'detail'     =>   $row['detail']
                );
            }
		 echo json_encode($list);

	}
	
  private function deleteMedia(){
       $id   = $_GET['mediaid'];
       $name = $_GET['medianame'];
	   $thumbdir  = 'documents/media/files/thumbnail/'.$name;
	   $dir       = 'documents/media/files/'.$name;
	   $sql = "DELETE FROM media WHERE id =".$id;
	   $query = parent::query($sql);
       unlink($thumbdir);
       unlink($dir);
  
  }
	
	
	
    private function grab() {

        $id = $_SESSION['jigowatt']['user_id'];
		
		$query = "SELECT 
					login_users.user_id,
					login_users.user_level,
					login_users.restricted,
					login_users.username,
					login_users.`name`,
					login_users.email,
					login_users.`password`,
					login_users.`timestamp`,
					login_users.avatar,
					login_users.user_profile_id,
					login_users.is_varified,
					login_users.created,
					user_profiles.first_name,
					user_profiles.middle_name,
					user_profiles.last_name,
					user_profiles.address,
					user_profiles.city,
					user_profiles.email,
					user_profiles.security_question,
					user_profiles.answer,
					candidate_profiles.candidate_id,
					candidate_profiles.candidate_first_name,
					candidate_profiles.candidate_middle_name,
					candidate_profiles.candidate_last_name,
					candidate_profiles.candidate_political_party,
					candidate_profiles.candidate_party_symbol,
					candidate_profiles.candidate_province,
					candidate_profiles.candidate_address,
					candidate_profiles.candidate_city,
					candidate_profiles.candidate_phone,
					candidate_profiles.candidate_fax,
					candidate_profiles.candidate_email,
					candidate_profiles.candidate_website,
					candidate_profiles.candidate_fb_link,
					candidate_profiles.candidate_twitter_link,
					candidate_profiles.candidate_avatar,
					candidate_profiles.candidate_info,
					candidate_profiles.flag,
					candidate_profiles.created,
					candidate_profiles.updated							
		            FROM `login_users` INNER JOIN user_profiles ON user_profiles.id = `login_users`.user_profile_id 
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
	
	
   private function edit_product(){
	   
		if (!empty($this->error)) return false;
		
        $label          	= $this->options['product-label'];
        $name     	    	= $this->options['product-name'];
        $price     	    	= $this->options['product-price'];
        $image     	 		= $this->options['product-image'];
		$id                 = $this->options['products-id'];
		$stamp              = date('Y-m-d H:i:s');

	    $sql = "UPDATE advertisement_products SET `label` = '$label',`name` = '$name',`image` = '$image',`price` = '$price',`updated` = '$stamp' WHERE `id` =".$id;

		parent::query($sql);
		
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';
	
	
	}
	
	



	
//##################################html functions####################################################################3
	
	function mediaView(){
	    
		$candidate  =  $this->getField('candidate_id');
	    $sql = "SELECT * FROM media WHERE candidate_id= '$candidate' ORDER BY created DESC ";
        $query = parent::query($sql);
        $i = 1;
		$image = '<ul class="grid-v1 thumbnails mediaview span12">';
		 while($row = $query->fetch(PDO::FETCH_ASSOC)){
	
   
          $image .= '<li class="span4 mix category_'.$i.'">
                    <img src="documents/media/files/'. $row['name'] .'" alt="">
                    <div class="hover-portfolio hover-portfolio-small">
                        <h2>'.$row['detail'].'</h2>
                        <a class="hover-portfolio-lft" href="'. $row['link'].'"><i class="icon-link"></i></a>
                        <a class="hover-portfolio-rgt fancybox-button" href="documents/media/files/'. $row['name'] .'" title="name" data-rel="fancybox-button"><i class="icon-search"></i></a>                            
                    </div>                                        
                </li>';


  
	       $i++;
		 }
		 $image .= '</ul>';
		 echo $image;
		 
	}
	
	function uploadImagePreview(){
	    
		$candidate  =  $this->getField('candidate_id');
	    $sql = "SELECT * FROM media WHERE candidate_id= '$candidate' ORDER BY created DESC ";
        $query = parent::query($sql);
        $i = 1;
		$image = '';
		 while($row = $query->fetch(PDO::FETCH_ASSOC)){
			 
			 
            $image .=  '<div class="row-fluid uploadImagePreview span12">
                            <div class="span1">
                               <img src="documents/media/files/thumbnail/'. $row['name'] .'" alt=""></div>
                            <div class="span7">
                                <span class="mediadetail">'.$row['detail'].'</span>
                            </div>
                            <div class="span2">
                                <a href="#responsive" data-toggle="modal" class="btn green submit-btn" onclick="mediaDetailEdit(\'.mediadetail\','.$row['id'].')">Edit</a>
                            </div>
                            <div class="span2">
                                <div class="submit-btn"> <a href="#" class="btn green" onclick="deleteImage($(this),'.$row['id'].',\''. $row['name'] .'\')">Delete</a></div>
                            </div>
                        </div>';
  
	       $i++;
		 }
		 echo $image;
		 
	}
	
	
	
}

$setting = new Settings();

?>