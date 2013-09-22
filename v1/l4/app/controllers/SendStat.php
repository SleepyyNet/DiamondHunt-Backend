<?php

class SendStat extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function store()
	{
		//
		$username = $_POST['username'];
		$statname = $_POST['statname'];
		$statvalue = $_POST['statvalue'];
		
		//check to see if user has actually entered username = xyx, statname = xyz, statvalue = xyz
		
		//check to see if username exists and valid statname - count of rows should be 1
		
		//statvalue should be integer
		
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		
		$sql = 'UPDATE UserInfo SET ' . $statname . '=' . $statvalue . ' WHERE username=\'' . $username . '\'' ;
		
		//$execute_sql will have boolean value indicating whether it was successful in updating the table or not
		$execute_sql = mysql_query($sql);
		if($execute_sql)
			return 1;
		else 
			return 0;
	}

}