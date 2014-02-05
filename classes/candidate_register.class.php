<?php
include_once('generic.class.php');

class CandidateRegister extends Generic {

    function __construct() {

        if(!empty($_GET['id'])) $this->grab();

		if(!empty($_POST)) {
			foreach ($_POST as $key => $value)
				$this->options[$key] = parent::secure($value);


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


	private function validate() {
	    if(empty($this->options['office_email'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Office email.').'</div>';
        }
	    if(empty($this->options['office_fax'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Office fax.').'</div>';
        }
	    if(empty($this->options['office_phone1'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Office phone.').'</div>';
        }
	    if(empty($this->options['office_city'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Office city.').'</div>';
        }
	    if(empty($this->options['office_address'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Office address.').'</div>';
        }
	    if(empty($this->options['province'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Province.').'</div>';
        }
	    if(empty($this->options['party_symbol'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Party symbol.').'</div>';
        }
	    if(empty($this->options['political_party'])) {
			$this->error = '<div class="alert alert-error">'._('You must enter a Political party.').'</div>';
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

        $first_name     	  = $this->options['first_name'];
        $last_name     	 	  = $this->options['last_name'];
        $middle_name     	  = $this->options['middle_name'];
        $political_party      = $this->options['political_party'];
        $party_symbol     	  = $this->options['party_symbol'];
        $province     	      = $this->options['province'];
        $office_address       = $this->options['office_address'];
        $office_city     	  = $this->options['office_city'];
        $office_phone1     	  = $this->options['office_phone1'];
        $office_fax     	  = $this->options['office_fax'];
        $office_email     	  = $this->options['office_email'];
        $office_website       = $this->options['office_website'];
        $office_fb_link       = $this->options['office_fb_link'];
        $office_twitter_link  = $this->options['office_twitter_link'];
        $user_id              = $_SESSION['user_profile_id'];

		$sql = "INSERT INTO candidate_profiles (user_profile_id,candidate_first_name, candidate_last_name, candidate_middle_name, candidate_political_party, candidate_party_symbol, candidate_province, candidate_address, candidate_city, candidate_phone, candidate_fax, candidate_email, candidate_website, candidate_fb_link, candidate_twitter_link)
	VALUES ('$user_id','$first_name','$last_name','$middle_name','$political_party','$party_symbol','$province','$office_address','$office_city','$office_phone1','$office_fax','$office_email','$office_website','$office_fb_link','$office_twitter_link');";

		parent::query($sql);
		$this->result = '<div class="alert alert-success">' ._('Successfully added record.').'</div>';
	}


}

$candidateregister = new CandidateRegister();

?>