<?php
include_once( 'generic.class.php' );

class Product extends Generic {

    function __construct() {
		
		if(!empty($_GET['cart'])) $this->addCartSession();
		
	 }
	 
    public function homeProduct(){
		$sql = "SELECT * FROM advertisement_products WHERE label ='home' AND flag = 0 ORDER BY position ASC ";
		$stmt = parent::query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$posX = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $posX[$pos[0]][$pos[1]] = array(   
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
            return $posX;
		}
		
	}
	
	public function addCartSession(){
	    $price = $_GET['price'];
		$count = $_GET['count'];
		$selectedProductArray = $_GET['selectedProductArray'];
		$_SESSION['cart']['price'] = $price;
		$_SESSION['cart']['productCount'] = $count;
		$_SESSION['cart']['productArray'] = $selectedProductArray;
		
		
	}
	
	
	
}

$product = new Product();
?>