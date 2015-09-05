<?php
ini_set('MAX_EXECUTION_TIME', -1);
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
Class Home Extends CI_Controller {
	function __construct() {

		parent::__construct();
		$this -> load -> model('M_arama');

	}

 	function index() {
		
		
		$this -> load -> view('arama/arama');

	}
	
	function arama($ara) {
		
		$data['sonuc'] = $this -> M_arama -> sonuc($ara);
		$this -> load -> view('arama/sonuc', $data);

	}
	
	
}
