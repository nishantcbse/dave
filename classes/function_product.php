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
                
                                        <input type="checkbox" value="<?php echo $register['name'];?>|<?php echo $register['price'];?>|register|<?php echo $register['id'];?>" class="Home"> <?php echo $register['name']; ?>  &nbsp; $<?php echo $register['price']; ?>
                                      
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
			$login = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $login[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$sloginProduct = $login;
			$i = 0;
			foreach($sloginProduct as $login){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($login as $login){ ?>
                
                                        <input type="checkbox" value="<?php echo $login['name'];?>|<?php echo $login['price'];?>|login|<?php echo $login['id'];?>" class="Home"> <?php echo $login['name']; ?>  &nbsp; $<?php echo $login['price']; ?>
                                      
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
// end login product
?>
<?php
function display_contactusproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='Contact Us' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$contactus = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $contactus[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$scontactusProduct = $contactus;
			$i = 0;
			foreach($scontactusProduct as $contactus){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($contactus as $contactus){ ?>
                
                                        <input type="checkbox" value="<?php echo $contactus['name'];?>|<?php echo $contactus['price'];?>|contactus|<?php echo $contactus['id'];?>" class="Home"> <?php echo $contactus['name']; ?>  &nbsp; $<?php echo $contactus['price']; ?>
                                      
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
// end contactus product
?>
<?php
function display_aboutproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='About' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$aboutus = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $aboutus[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$saboutusProduct = $aboutus;
			$i = 0;
			foreach($saboutusProduct as $aboutus){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($aboutus as $aboutus){ ?>
                
                                        <input type="checkbox" value="<?php echo $aboutus['name'];?>|<?php echo $aboutus['price'];?>|aboutus|<?php echo $aboutus['id'];?>" class="Home"> <?php echo $aboutus['name']; ?>  &nbsp; $<?php echo $aboutus['price']; ?>
                                      
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
// end aboutus product
?>
<?php
function display_welcomeproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='Welcome' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$welcome = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $welcome[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$swelcomeProduct = $welcome;
			$i = 0;
			foreach($swelcomeProduct as $welcome){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($welcome as $welcome){ ?>
                
                                        <input type="checkbox" value="<?php echo $welcome['name'];?>|<?php echo $welcome['price'];?>|welcome|<?php echo $welcome['id'];?>" class="Home"> <?php echo $welcome['name']; ?>  &nbsp; $<?php echo $welcome['price']; ?>
                                      
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
// end welcome product
?>
<?php
function display_accountsponsorproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='Account Sponser' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$accountsponser = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $accountsponser[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$saccountsponserProduct = $accountsponser;
			$i = 0;
			foreach($saccountsponserProduct as $accountsponser){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($accountsponser as $accountsponser){ ?>
                
                                        <input type="checkbox" value="<?php echo $accountsponser['name'];?>|<?php echo $accountsponser['price'];?>|accountsponser|<?php echo $accountsponser['id'];?>" class="Home"> <?php echo $accountsponser['name']; ?>  &nbsp; $<?php echo $accountsponser['price']; ?>
                                      
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
// end welcome product
?>
<?php
function display_candidateinfoproduct() {

	    global $generic;
		$sql = "SELECT * FROM advertisement_products WHERE label ='Candidate Info' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$candidateinfo = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $candidateinfo[$pos[1]][$pos[0]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell']
										    );
			}
     
			$scandidateinfoProduct = $candidateinfo;
			$i = 0;
			foreach($scandidateinfoProduct as $candidateinfo){
                    ?>
                              <div class="span4">
                                <div class="checkbox">
                                     <?php  foreach($candidateinfo as $candidateinfo){ ?>
                
                                        <input type="checkbox" value="<?php echo $candidateinfo['name'];?>|<?php echo $candidateinfo['price'];?>|candidateinfo|<?php echo $candidateinfo['id'];?>" class="Home"> <?php echo $candidateinfo['name']; ?>  &nbsp; $<?php echo $candidateinfo['price']; ?>
                                      
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
// end welcome product
?>



<?php
function display_loginproduct1() {

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

<?php
function display_register_product() {

	    global $generic;

		$sql = "SELECT * FROM advertisement_products WHERE label ='Register' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$posX = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				//print_r($row);
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $posX[$pos[0]][$pos[1]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell'],
											'image' => $row['image'],
										    );
			}
            
		
		//print_r($posX);
	   $i = 0;
       foreach($posX as $pos){
		  
	?>
						   <?php  foreach($pos as $pos){ 
						         if(!empty($pos['image'])){
						           $image = 'documents/product/'.$pos['image'];
								 }else{
								    $image = 'documents/product/default.jpg';
								 }
						   ?>
                           
                                   <div class="span4 advertise ">
                                        <a href="product.php">
                                           <img src="<?php echo $image; ?>" alt="">
                                         </a> 
                                     </div>
                                                   
                           <?php  } ?>
        <?php 
	     $i++;
	   }
	?>
             
<?php		
		}
} // display home product function end
?>


<?php
function display_candidate_product() {

	    global $generic;

		$sql = "SELECT * FROM advertisement_products WHERE label ='Candidate Info' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$posX = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				//print_r($row);
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $posX[$pos[0]][$pos[1]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell'],
											'image' => $row['image'],
										    );
			}
            
		
		//print_r($posX);
	   $i = 0;
       foreach($posX as $pos){
		  
	?>
						   <?php  foreach($pos as $pos){ 
						         if(!empty($pos['image'])){
						           $image = 'documents/product/'.$pos['image'];
								 }else{
								    $image = 'documents/product/default.jpg';
								 }
						   ?>
                           
                                   <div class="span4 advertise ">
                                        <a href="product.php">
                                           <img src="<?php echo $image; ?>" alt="">
                                         </a> 
                                     </div>
                                                   
                           <?php  } ?>
        <?php 
	     $i++;
	   }
	?>
             
<?php		
		}
} // display home product function end
?>


<?php
function display_login_product() {

	    global $generic;

		$sql = "SELECT * FROM advertisement_products WHERE label ='Login' AND flag = 0 ORDER BY position ASC ";
		$stmt = $generic->query($sql);
		// $stmt->rowCount(); (this is for getting no of row) 
		if ($stmt->rowCount() > 0) {
			$i= 1;
			$posX = '';
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				//print_r($row);
				$position = $row['position'];
				$pos = explode("-", $position);
				
				
				 $posX[$pos[0]][$pos[1]] = array(
				                            'id'    => $row['id'],
				                            'label' => $row['label'],
											'name'  => $row['name'],
											'price' => $row['price'],
											'sell'  => $row['sell'],
											'image' => $row['image'],
										    );
			}
            
		
		//print_r($posX);
	   $i = 0;
       foreach($posX as $pos){
		  
	?>
						   <?php  foreach($pos as $pos){ 
						         if(!empty($pos['image'])){
						           $image = 'documents/product/'.$pos['image'];
								 }else{
								    $image = 'documents/product/default.jpg';
								 }
						   ?>
                           
                                   <div class="span4 advertise ">
                                        <a href="product.php">
                                           <img src="<?php echo $image; ?>" alt="">
                                         </a> 
                                     </div>
                                                   
                           <?php  } ?>
        <?php 
	     $i++;
	   }
	?>
             
<?php		
		}
} // display home product function end
?>

