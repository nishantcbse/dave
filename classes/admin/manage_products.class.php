<?php
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');
class Products extends Generic {
	
	private $options = array();
    
	function __construct() {

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
	
    public function getProductDetail() {
		
		$id = $_GET['productid'];


	$sql = "SELECT *
			FROM advertisement_products
			WHERE advertisement_products.flag = 0 AND advertisement_products.id=".$id;
	

  $stmt = parent::query($sql);
        $rcount = $stmt->rowCount();
        if( $rcount < 1 ) {
            echo '<h5 id="error">No records found in search.  Please modify your search.</h5>';
        } else if( $rcount > 30 ) {
            echo '<h5 id="error">Records found exceeds limit.  Please narrow your search.</h5>';
        } else {

            while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				print_r($row);
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

$products = new Products();

?>