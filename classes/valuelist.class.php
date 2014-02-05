<?php
include_once(dirname(dirname(dirname(__FILE__))) . '/classes/generic.class.php');

class Valuelist extends Generic {

	function __construct() {

       if(!empty($_GET['valuelist'])) {

            $valuelist = $_GET['valuelist'];

            switch ($valuelist){
                case 'agents':
                    $this->list_agents();
                    break;
                case 'attorneys':
                    $this->list_attorneys();
                    break;
				case 'bondattorney':
                    $this->bond_attorneys();
                    break;
				case 'charges':
                    $this->list_charges();
                    break;
                case 'suggestcharges':
                    $this->suggest_charges();
                    break;
                case 'counties':
                    $this->list_counties();
                    break;
                case 'couriers':
                    $this->list_couriers();
                    break;
                case 'courts':
                    if (empty($_GET['county'])) {
                        echo '[]';
                    } else {
                        $this->list_courts();
                    }
                    break;
				case 'ajaxcourts':
                    if (empty($_GET['county'])) {
                        echo '[]';
                    } else {
                        $this->ajax_courts();
                    }
                    break;
                case 'creditentries':
                    $this->list_creditentries();
                    break;
                case 'debitentries':
                    $this->list_debitentries();
                    break;
                case 'jails':
                    $this->list_jails();
                    break;
                case 'offices':
                    $this->list_offices();
                    break;
                case 'paymenttypes':
                    $this->list_paymenttypes();
                    break;
                case 'prefixs':
                    $this->list_prefixs();
                    break;
                case 'ajaxgeneralprefixs':
                    if (empty($_GET['surety'])) {
                        echo '[]';
                    } else {
                        $this->ajax_generalprefixs();
                    }
                    break;
                case 'setfors':
                    $this->list_setfors();
                    break;
                case 'sources':
                    $this->list_sources();
                    break;
                case 'sureties':
                    $this->list_sureties();
                    break;
				case 'writerforms':
                    $this->list_writerforms();
                    break;
                case 'writerlocations':
                    $this->list_writerlocations();
                    break;
                case 'states':
                    $this->list_states();
                    break;
                case 'sts':
                    $this->list_sts();
                    break;
                case 'clientsubject':
                    $this->list_agencyClientsSubject();
                    break;
                case 'phones':
                    $this->list_phones();
                    break;
                case 'tags':
                    $this->list_tags();
            }
        }
	}

    private function list_general_agents() {

        global $generic;
        $sql = 'SELECT id, contact FROM general_agents';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $agents[] = array(
                  'id' => $row['id'],
                  'name' => $row['contact'],
              );
          }
          echo json_encode($agents);
        }
	}

    private function list_attorneys() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_attorneys';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $attorneys[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($attorneys);
        }
	}

    private function bond_attorneys() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_attorneys';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $attorneys[] =  $row['name'];
             
          }
          echo json_encode($attorneys);
        }
	}


    private function list_charges() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_charges';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $charges[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($charges);
        }
	}
	
    private function suggest_charges() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_charges';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $charges[] =  $row['name'];
          }
          echo json_encode($charges);
        }
	}

    private function list_couriers() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_couriers';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $coiuriers[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($couriers);
        }
	}

    private function list_counties() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_counties';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $counties[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($counties);
        }
	}

    private function list_courts() {

        global $generic;
        $county = $_GET['county'];
        $sql = 'SELECT id, name FROM agency_settings_lists_courts WHERE county = "' . $county .'"';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $courts[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($courts);
        }
	}

	private function ajax_courts(){
		    global $generic;
        $county = $_GET['county'];
		$sql = 'SELECT id, name FROM agency_settings_lists_courts WHERE county = "' . $county .'"';

		$stmt = parent::query($sql);
		$courts = '<option value=""></option>';
		$courts .= '<option value="add_new"> < Add New > </option>';
		if ($stmt->rowCount() > 0) {
			$this->courts = array();
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$name = $row['name'];
                $courts .= '<option value="'.$name.'">'.$name.'</option>';
			}
		}
		echo $courts;
	}


    private function list_creditentries() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_creditentries';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $creditentries[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($creditentries);
        }
    }

    private function list_debitentries() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_debitentries';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $debitentries[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($debitentries);
        }
    }

    private function list_jails() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_jails';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $jails[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($jails);
        }
	}

    private function list_offices() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_offices';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $offices[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($offices);
        }
	}

    private function list_paymenttypes() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_paymenttypes';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $paymenttypes[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($paymenttypes);
        }
	}

    private function list_prefixs() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_prefixs';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $prefixs[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($prefixs);
        }
	}

    private function ajax_generalprefixs(){
	    global $generic;
        $surety = $_GET['surety'];

        $sql = "SELECT
        general_settings_lists_prefixs.id,
        general_settings_lists_prefixs.`name`
        FROM
        general_settings_lists_sureties
        INNER JOIN general_settings_lists_prefixs ON general_settings_lists_sureties.id = general_settings_lists_prefixs.surety_id
        WHERE general_settings_lists_sureties.`name`='".$surety."'";

		$stmt = parent::query($sql);
		$prefixs = '<option value=""></option>';
		if ($stmt->rowCount() > 0) {
			$this->prefixs = array();
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
				$name = $row['name'];
                $prefixs .= '<option value="'.$name.'">'.$name.'</option>';
			}
		}
		echo $prefixs;
	}

    private function list_setfors() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_setfors';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $setfors[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($setfors);
        }
	}

    private function list_sources() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_sources';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $sources[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($sources);
        }
	}

    private function list_sureties() {

        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_sureties';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $sureties[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($sureties);
        }
	}


    private function list_writerforms() {

        global $generic;
        $sql = 'SELECT value, name FROM agency_settings_lists_writer_forms';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $writerforms[] = array(
                  'value' => $row['value'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($writerforms);
        }
	}

    private function list_writerlocations() {

        global $generic;
        $sql = 'SELECT id, location FROM agency_settings_lists_writer_locations';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $writerlocations[] = array(
                  'id' => $row['id'],
                  'location' => $row['location'],
              );
          }
          echo json_encode($writerlocations);
        }
	}


    private function list_states() {
        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_states';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $states[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($states);
        }
	}
   
    private function list_sts() {
        global $generic;
        $sql = 'SELECT id, abbreviation FROM agency_settings_lists_states';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $sts[] = array(
                  'id' => $row['id'],
                  'name' => $row['abbreviation'],
              );
          }
          echo json_encode($sts);
        }
	}

    private function list_phones() {
        global $generic;
        $sql = 'SELECT id, name FROM agency_settings_lists_phones';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $phones[] = array(
                  'id' => $row['id'],
                  'name' => $row['name'],
              );
          }
          echo json_encode($phones);
        }
	}

    private function list_tags() {
        global $generic;
        $sql = 'SELECT id, name FROM agency_tags';
	    $query = $generic->query($sql);
        if ($query->rowCount() > 1) {
          $tags = '';
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              if ($tags==''){
                $tags = '"' . $row['name'] . '"';
              } else {
                $tags = $tags. ',"' . $row['name'] . '"';
              }
            }
            echo '[' . $tags  . ']';
        }
	}
	
    private function list_agencyClientsSubject() {
        global $generic;
        $sql = 'SELECT DISTINCT subject FROM agency_clients_notes';
	    $query = $generic->query($sql);
        if( $query->rowCount() < 1 ) {
            echo '[]';
        } else {
          while($row = $query->fetch(PDO::FETCH_ASSOC)){
              $subject[] =  $row['subject'];
          }
          echo json_encode($subject);
        }
	}
}

$valuelist = new Valuelist();
?>