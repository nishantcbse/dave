<?php
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');
class Products extends Generic {
	
	private $options = array();
    
	function __construct() {
           if(!empty($_GET['productid']))$this->getProductDetail();

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
						$arr[] = array(
						  'id'  	      => $row['id'],
						  'label'         => $row['label'],
						  'name' 		  => $row['name'],
						  'price' 	      => $row['price'],
						  'image' 	      => $row['image'],
						  'period_from'   => $row['period_from'],
						  'period_to' 	  => $row['period_to'],
						 );
					
				 }
		
	  	         echo json_encode($arr);
            }
   }	


}

$products = new Products();

?>