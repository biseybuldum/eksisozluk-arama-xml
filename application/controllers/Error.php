<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
Class Error Extends CI_Controller {
	
 	function index() {
		
		
		$this -> load -> view('arama/404');

	}
	
	
}
