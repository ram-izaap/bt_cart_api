<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH."libraries/REST_Controller.php");

class Welcome extends REST_Controller {

	function __construct()
    {
        parent::__construct();

    }

	public function index_get()
	{
		$output = array('name' => 'ram');
		$this->response($output);
	}
}
