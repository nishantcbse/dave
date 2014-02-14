<?php
include_once( 'generic.class.php' );

class Profile extends Generic {
	
	private $options = array();
    
	function __construct() {

        $this->grab();
        $this->party_img();
		
		if(!empty($_POST)) {
				//print_r($_POST); 
				foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);
      
                $this->validate();
					
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

	
	
    private function grab() {

        $id = $_GET['id'];
		
		
		$query = "SELECT * FROM `candidate_profiles`  WHERE candidate_id=".$id;
		
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
	
	function mediaView(){
	    
		$candidate  =  $this->getField('candidate_id');
	    $sql = "SELECT * FROM media WHERE candidate_id= '$candidate' ORDER BY created DESC ";
        $query = parent::query($sql);
		
        $i = 1;
		$image = '<ul class="grid-v1 thumbnails mediaview span12">';
		 while($row = $query->fetch(PDO::FETCH_ASSOC)){
	       $type = explode("/", $row['type']);
		  
		   if($type[0] == 'image'){
          $image .= '<li class="span4 mix pad category_'.$i.'">
                    <img src="documents/media/files/'. $row['name'] .'" alt="">
                    <div class="hover-portfolio hover-portfolio-small">
                        <h2>'.$row['detail'].'</h2>
                        <a class="hover-portfolio-lft" href="'. $row['link'].'"><i class="icon-link"></i></a>
                        <a class="hover-portfolio-rgt fancybox-button" href="documents/media/files/'. $row['name'] .'" title="name" data-rel="fancybox-button"><i class="icon-search"></i></a>                            
                    </div>                                        
                </li>';

          
	       $i++;
		   }
		 }
		 $image .= '</ul>';
		 echo $image;
		 
	}
	
	function videoView(){
	    
		$candidate  =  $this->getField('candidate_id');
	    $sql = "SELECT * FROM media WHERE candidate_id= '$candidate'  ORDER BY created DESC ";
        $query = parent::query($sql);
		
        $i = 1;
		$image = '<ul class="grid-v1 thumbnails mediaview span12">';
		 while($row = $query->fetch(PDO::FETCH_ASSOC)){
	       $type = explode("/", $row['type']);
		  
		   if($type[0] == 'video'){
             $image .= ' <video width="320" height="240" controls>
                       <source src="';
					   
			  $image .=   'http://html5video.org/media/folgers.mp4';
					  
		     $image .= '" type="video/mp4">';
		   
              $image .= 'Your browser does not support the video tag.</video>';


	       $i++;
		   }
		 }
		 $image .= '</ul>';
		 echo $image;
		 
	}
	
	
	
	
}

$profile = new Profile();

?>