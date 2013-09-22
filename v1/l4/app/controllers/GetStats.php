<?php

class GetStats extends \BaseController {

	public function index()
	{
		// if there is no stat name specified
		$error = "error: please enter a resource id";
		$error = json_encode($error);
		echo $error;
	}
	
	//return the leaderboard data for the parameter $id
	public function show($id) {
		
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		
		//Get the count of the number of rows in the database corresponding to the specified username. If the username does not exist, the number of rows will be equal to 0.
		
		$sql = 'SELECT COUNT(*) FROM UserInfo WHERE username = \'' . $id . '\'';
		$execute_sql = mysql_query($sql);
		while ($row = mysql_fetch_assoc($execute_sql)) {
			if ($row['COUNT(*)'] == 0)
				return 'user does not exist';
		}
		
		//if the specified username does exist, print out all columns
		$sql = 'SELECT * FROM UserInfo WHERE username = \'' . $id . '\'';
		
		$data = $this->executeSQL($sql);
		return $data;
	}
	
	// execute the sql statement
	private function executeSQL($sql) {
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		
		$execute_sql = mysql_query($sql);
		$result = array();
		while ($row = mysql_fetch_assoc($execute_sql)) {
			//$result[] = json_encode($row);
			$result[] = $row;
		}
		return json_encode($result);
	}
	
}