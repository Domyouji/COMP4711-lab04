<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Last extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Last page for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the last author, to pass on to our view
		$record = $this->quotes->get(6);	
		$this->data = array_merge($this->data, $record);		
		$this->render();
	}

}
