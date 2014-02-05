<?php
include_once('generic.class.php');

class Listbox extends Generic {

    public function getPolitical_Party_List(){
		$sql = "SELECT political_party_list, id FROM settings_political_party_list WHERE flag = 0 ORDER BY political_party_list ASC ";

		$stmt = parent::query($sql);
        $list = '<option value=""></option>';
		if ($stmt->rowCount() > 0) {
			$this->agents = array();
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
			    $name = $row['political_party_list'];
				$id = $row['id'];
                $list .= '<option value="'.$name.'" >'.$name.'</option>';
			}
		}
		return $list;
	}
	
    public function getProvince(){
		$sql = "SELECT province, id FROM settings_province WHERE flag = 0 ORDER BY province ASC ";

		$stmt = parent::query($sql);
        $list = '<option value=""></option>';
		if ($stmt->rowCount() > 0) {
			$this->agents = array();
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
			    $name = $row['province'];
				$id = $row['id'];
                $list .= '<option value="'.$name.'" >'.$name.'</option>';
			}
		}
		return $list;
	}

    public function getDistrict(){
		$sql = "SELECT district, id FROM settings_district WHERE flag = 0 ORDER BY district ASC ";

		$stmt = parent::query($sql);
        $list = '<option value=""></option>';
		if ($stmt->rowCount() > 0) {
			$this->agents = array();
			while( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
			    $name = $row['district'];
				$id = $row['id'];
                $list .= '<option value="'.$name.'" >'.$name.'</option>';
			}
		}
		return $list;
	}
	

}
$listbox = new Listbox();

?>