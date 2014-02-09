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
                
                                        <input type="checkbox" value="1st Slide|1|contactus|id" class="Home"> 1st Image $1.00
                                      
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
                
                                        <input type="checkbox" value="1st Slide|1|aboutus|id" class="Home"> 1st Image $1.00
                                      
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
                
                                        <input type="checkbox" value="1st Slide|1|welcome|id" class="Home"> 1st Image $1.00
                                      
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
                
                                        <input type="checkbox" value="1st Slide|1|accountsponser|id" class="Home"> 1st Image $1.00
                                      
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
                
                                        <input type="checkbox" value="1st Slide|1|candidateinfo|id" class="Home"> 1st Image $1.00
                                      
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
