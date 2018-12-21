<?php

require_once('../model/PostManager.php');
require_once('../model/Post.php');




function admin() { // Affichage de la page d'administration

require('../view/backend/home.php');
}


function listPosts() { // Affichage de tous les posts

	$manager = new PostManager();
	$posts = $manager->read();
	var_dump($posts);
	require('../view/backend/listposts.php');
}

function addPost() {

	$post = new Post($_POST['title'], $_POST['content']);
	$post->getTitle();
	echo "CC";
}