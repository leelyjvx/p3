<?php

include('Manager.php');

class PostManager extends Manager {

	protected $_db;

	public function __construct() {
		$this->_db = $this->dbConnect();
	}

}