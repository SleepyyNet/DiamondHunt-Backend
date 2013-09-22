<?php

class UrlController extends \BaseController {

	// return the entire leaderboard
	public function index() {
		$sql = 'SELECT * FROM UserInfo'; //WHERE username = \'ghost\'
		
		$data = $this->executeSQL($sql);
		echo $data;
	}
	
	//return the leaderboard data for the parameter $id
	public function show($id) {
		$sql = 'SELECT ' . $id . ' FROM UserInfo';
		
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		//SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'UserInfo' AND COLUMN_NAME = 'my_column'
		
		$data = $this->executeSQL($sql);
		return $data;
	}
	
	// execute the sql statement
	private function executeSQL($sql) {
		$con = mysql_connect('localhost:8888', 'root', 'root');
		mysql_select_db('DiamondHunt');
		
		$retval = mysql_query($sql);
		$result = array();
		while ($row = mysql_fetch_assoc($retval)) {
			$result[] = json_encode($row);
		}
		return json_encode($result);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}