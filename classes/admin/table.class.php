<?php
//include_once( 'classes/generic.class.php' );
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');
class Table extends Generic {
	
	private $options = array();
    
	function __construct() {
        if(!empty( $_GET['politicalpartyid'])) $this->getPoliticalPartyDetail();
        $this->grab();

		if(!empty($_POST)) {
				//print_r($_POST); 
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

        $party_name     	= $this->options['name'];
        $party_image     	= $this->options['party_symbol'];

	    $sql = "INSERT INTO settings_party_symbols (party_symbols) VALUES ('$party_image');";
	    $sql1 = "INSERT INTO settings_political_party_list (political_party_list) VALUES  ('$party_name');";

		parent::query($sql);
		parent::query($sql1);
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
	
    public function getPoliticalPartyDetail() {
		
		$id = $_GET['politicalpartyid'];


	$sql = "SELECT *
			FROM settings_political_party_list
			INNER JOIN settings_party_symbols ON settings_political_party_list.id = settings_party_symbols.id 
			WHERE settings_political_party_list.flag = 0 AND settings_party_symbols.flag = 0 AND settings_political_party_list.id=".$id;
	

  $stmt = parent::query($sql);
        $rcount = $stmt->rowCount();
        if( $rcount < 1 ) {
            echo '<h5 id="error">No records found in search.  Please modify your search.</h5>';
        } else if( $rcount > 30 ) {
            echo '<h5 id="error">Records found exceeds limit.  Please narrow your search.</h5>';
        } else {

            while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    $arr[] = array(
      'id'  			     => $row['id'],
      'political_party_list' => $row['political_party_list'],
      'party_symbols' 		 => $row['party_symbols'],
     );

    }

    echo json_encode($arr);
   }
 }	
	


}

$table = new Table();

?>