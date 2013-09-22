<?php

class GetLeaderboard extends \BaseController {

	// return the entire leaderboard
	public function index() {
		$sql = 'SELECT * FROM UserInfo'; //WHERE username = \'ghost\'
		
		$data = $this->executeSQL($sql);
		
		//make this use return
		return $data;
	}
	
	//return the leaderboard data for the parameter $id
	public function show($id) {
		$sql = 'SELECT username, ' . $id . ' FROM UserInfo ORDER BY (' . $id . ') DESC';
		
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		//SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'UserInfo' AND COLUMN_NAME = 'my_column'
		//SELECT username, kills from UserInfo ORDER BY (kills) DESC
		$data = $this->executeSQL($sql);
		
		header('Access-Control-Allow-Origin', 'http://localhost:8888');
		        header('Allow', 'GET, POST, OPTIONS');
		        // header('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization, X-Request-With');
		        // 		        header('Access-Control-Allow-Credentials', 'true');
		
		return $data;
	}
	
	// execute the sql statement
	private function executeSQL($sql) {
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		
		$retval = mysql_query($sql);
		$result = array();
		while ($row = mysql_fetch_assoc($retval)) {
			//$result[] = json_encode($row);
			$result[] = $row;
		}
		//return $result;
		return json_encode($result);
	}

}