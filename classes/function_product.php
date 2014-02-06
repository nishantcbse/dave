<?php
include_once('generic.class.php');
?>
<?php
function display_registerproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='Register' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$register = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $register[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$sregisterProduct = $register;
			$i = 0;
			foreach($sregisterProduct as $registers){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($registers as $register){ ?>
                
                                        <input type="checkbox" value="1st Slide|1|register|id" class="Home"> 1st Image $1.00
                                      
                                      <?php } ?>
                               
                                </div> 
                              </div>
                    <?php 
                        $i++;
                     }
                    ?>
	<?php		
			
		}

}
// end register product
?>



<?php
function display_loginproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='Login' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$register = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $login[$pos[1]][$pos[0]] = array(
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
            return $login;
		}

}

?>
