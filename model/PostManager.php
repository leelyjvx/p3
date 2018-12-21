<?php

include('Manager.php');

class PostManager extends Manager {

	protected $_db;

	public function __construct() {
		$this->_db = $this->dbConnect();
	}

	public function addPost($post) {

		$req = $this->_db->prepare('INSERT INTO posts(id, title, content, postdate) VALUES (?, ?, ?, NOW())');
		$req->execute(array($post->getID(), $post->getTitle(), $post->getContent()));
		return $this->_db->lastInsertId();
	}

	public function read() {

		$posts = [];
		$req = $this->_db->query('SELECT title, content FROM posts');
		while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
			$posts[] = new Post($data['title'], $data['content']);
		}
		return $posts;
	}

	public function readID($id) {

		$req = $this->_db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
		$req->execute(array($id));
		$data = $req->fetch(PDO::FETCH_ASSOC);
		$post = new Post($data['title'], $data['content']);
		$post->setID($data['id']);
		return $post;

	}


	public function delete($id) {

		$req = $this->_db->prepare('DELETE FROM posts WHERE id = :id');
		$req->execute([':id' => $id]);
		return $req;

	}

	public function update($post) {

		$req = $this->_db->prepare('UPDATE posts SET title = :title, content = :content WHERE id = :id');
		$req->execute([':title' => $post->getTitle(), ':content' => $post->getContent(), ':id' => $post->getID()]);
		var_dump($req);
		return $req;
	}
}

