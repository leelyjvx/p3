<?php

require_once('../model/PostManager.php');
require_once('../model/Post.php');

function admin() {

	require('../view/backend/home.php');
}

function add() {

	require('../view/backend/addpost.php');
	$post = new Post($_POST['title'], $_POST['content']);
	var_dump($post);
	$manager = new PostManager();
	$add = $manager->add($post);
	var_dump($add);
}

function listPosts() {

	$manager = new PostManager();
	$posts = $manager->read();
	var_dump($posts);
	require('../view/backend/listposts.php');
}