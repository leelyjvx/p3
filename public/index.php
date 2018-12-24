<?php

include('../controller/controller.php');

if (isset($_GET['action'])) { 

if ($_GET['action'] === 'admin') { // Aller à l'accueil
	admin();
}

	if ($_GET['action'] === 'listposts') { // Afficher tous les posts
		listPosts();
	}

	if ($_GET['action'] === 'addpost') { // Formulaire de création de post
		addPost();
	}

	if ($_GET['action'] === 'create' && isset($_POST['title']) AND $_POST['title'] !== '' && isset($_POST['content']) AND $_POST['content'] !== '') { // Créer un post
		createPost();
	}

	if ($_GET['action'] === 'postid') { // Lire un post précis
		read();
	}

	if ($_GET['action'] === 'updatepost') { // MAJ d'un post
		updatePost();
	}

	if ($_GET['action'] === 'deletepost') { // Suppression
		deletePost();
	}

	if ($_GET['action'] === 'intro') {
		homepage();
	}
}

