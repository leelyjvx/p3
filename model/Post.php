<?php

class Post {

	private $_id;
	private $_title;
	private $_content;
	private $_postdate;

	public function __construct($title, $content) {
		$this->_title = $title;
		$this->_content = $content;
	}

	public function getID() {
		return $this->_id;
	}

	public function getTitle() {
		return $this->_title;
	}

	public function getContent() {
		return $this->_content;
	}

	public function getPostDate() {
		return $this->_postdate;
	}

	public function setID($id) {
		$this->_id = $id;
	}

	public function setTitle($title) {
		$this->_title = $title;
	}

	public function setContent($content) {
		$this->_content = $content;
	}

	public function setPostDate($postdate) {
		$this->_postdate = $postdate;
	}

}