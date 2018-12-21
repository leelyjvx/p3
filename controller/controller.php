<?php

require_once('../model/PostManager.php');
require_once('../model/Post.php');




function admin() { // Affichage de la page d'administration

require('../view/backend/home.php');
}


function listPosts() { // Affichage de tous les posts

	$manager = new PostManager();
	$posts = $manager->read();
	require('../view/backend/listposts.php');
}

function addPost() {

	$titre = 'Création d\'article';
	require('../view/backend/addpost.php');
}

function createPost() {

	$post = new Post($_POST['title'], $_POST['content']);
	echo $post->getTitle() . '</br>';
	echo $post->getContent();
	$manager = new PostManager();
	$try = $manager->addPost($post);
	var_dump($try);
}

function read() {

	echo $post->getTitle();
	$manager = new PostManager();
	$try = $manager->readID($_GET['id']);
	var_dump($try);
}

function updatePost() {
	echo "maj";
}

function deletePost() {

	echo $post->getID();


}

