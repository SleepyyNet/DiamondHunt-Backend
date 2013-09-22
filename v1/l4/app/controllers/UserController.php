<?php
	//require_once("BaseController.php");
	class UserController extends BaseController{
		
		public function index(){
			$this->layout = View::make($this->layout);
		}
		public function getIndex(){
			
		}
		
		public function postProfile(){
			
		}
	}


?>