<?php
include_once( 'generic.class.php' );

class Home extends Generic {

    function __construct() {
		
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
}

$home = new Home();
?>