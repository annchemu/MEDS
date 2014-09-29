<?php
if (!defined('BASEPATH'))	exit('No direct script access allowed');
class User_Accounts_Report extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		//x-axis query
		$sql = "SELECT DATE_FORMAT(created_at,'%m/%d/%x') as period
				FROM user
				GROUP BY DATE_FORMAT(created_at,'%m/%d/%x')
				ORDER BY DATE_FORMAT(created_at,'%m/%d/%x') asc";
				// echo $sql;die;
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$weeks = array();
		foreach ($results as $result) {
			$weeks[] = $result['period'];
		}
		foreach ($weeks as $week) {
			$active = 0;			
			$inactive = 0;
			$deactivated = 0;
			
			
		//y axis query
			$sql = "SELECT acc_status as acc_status,id as number
				    FROM user
				    WHERE DATE_FORMAT(created_at,'%m/%d/%x')='$week'
				    GROUP BY id";
				// echo $sql;die;

			$query = $this -> db -> query($sql);
			$results = $query -> result_array();
			// convert to int and pass it to variables
			if ($results) {
				foreach ($results as $result) {
					if ($result['acc_status'] == "") {
						$active = intval($result['number']);
					} else if ($result['acc_status'] == "1") {
						$inactive = intval($result['number']);
					} else if ($result['acc_status'] == "2") {
						$deactivated = intval($result['number']);
					} 
				}
			}
			//change variable to array
			$active_data[] = $active;			
			$inactive_data[] = $inactive;
			$deactivated_data[] = $deactivated;
					
		}
		
		$main_array[] = array('name' => 'Active User Accounts', 'data' => $active_data);
		$main_array[] = array('name' => 'Inactive User Accounts', 'data' => $inactive_data);
		$main_array[] = array('name' => 'Deactivated User Accounts', 'data' => $deactivated_data);

		
		//push to pdf
		$total_array = json_encode($main_array, JSON_PRETTY_PRINT);
		$data['my_series'] = $total_array;
		$data['categories'] = json_encode($weeks);
		$this -> load -> view('user_report', $data);
	}

}
?>