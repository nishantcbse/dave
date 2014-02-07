<?php
include_once( 'generic.class.php' );

class Search extends Generic {


    function __construct() {

        if(!empty($_GET['searchtype']) && $_GET['searchtype'] == 'candidate') $this->list_candidate();
       
	   }




    public function list_candidate() {
		
       
		if(empty($_GET['search'])){
			echo '<h5>No records found in search.  Please modify your search.</h5>';
		}else{
		
		 global $generic;
        $sval = $_GET['search'];
        //$stype = $_GET['search-type'];
		
		$sql = "SELECT *
				FROM `candidate_profiles`
				LEFT JOIN `settings_party_symbols` ON  `settings_party_symbols`.id = `candidate_profiles`.`candidate_party_symbol`
				WHERE
				candidate_profiles.candidate_first_name LIKE '%$sval%' OR
				candidate_profiles.candidate_middle_name LIKE '%$sval%' OR
				candidate_profiles.candidate_last_name LIKE '%$sval%' OR
				candidate_profiles.candidate_political_party LIKE '%$sval%' OR
				candidate_profiles.candidate_city LIKE '%$sval%'";
        $query = $generic->query($sql);
        $rcount = $query->rowCount();
        if( $rcount < 1 ) {
            echo '<h5>No records found in search.  Please modify your search.</h5>';
        } else if( $rcount > 14 ) {
            echo '<h5>Records found exceeds limit.  Please narrow your search.</h5>';
        } else {
           
		$search_result = '<table class="table table-striped table-hover"><tbody>';
        
		while($row = $query->fetch(PDO::FETCH_ASSOC)){
           
               // print_r($row);
			   if(!empty($row['candidate_avatar'])){
			        $avatar = 'document/avatar/'.$row['candidate_avatar'];
			   }else{
					$avatar = 'documents/avatar/default.png';
			   }
			   
				if( !empty($row['party_symbols'])){
					$party_symbol = 'documents/party_symbols/'.$row['party_symbols'];
				}else{
					$party_symbol = '';
				}
			   
				$search_result 	.=   '<tr>
										<td><img src="'.$avatar.'" alt="" height="26px" width="26px"/></td>
										<td class="hidden-phone"><a href="profile.php?id='.$row['candidate_id'].'">'.$row['candidate_first_name'].' '.$row['candidate_middle_name'].' '.$row['candidate_last_name'].'</a></td>
										<td><img src="'.$party_symbol.'" alt="" height="20px" width="20px"/>'.$row['candidate_political_party'].'</td>
										<td class="hidden-phone">'.$row['candidate_city'].'</td>
									</tr>';
         }
		 
		$search_result .= '</tbody></table>';
		
		echo $search_result;
       }				

	}
   }
}

$search = new Search();

?>