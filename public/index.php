<?php

include('../controller/controller.php');

if (isset($_GET['action'])) { // Aller à l'accueil
	if ($_GET['action'] === 'admin') {
		admin();
	}

	if ($_GET['action'] === 'listposts') { // Afficher tous les posts
		listPosts();
	}

	if ($_GET['action'] === 'addpost') { // Formulaire de création de post
		addPost();
	}

	if ($_GET['action'] === 'create' && isset($_POST['title']) AND $_POST['title'] !== '' && isset($_POST['content']) AND $_POST['content'] !== '') {
		createPost();
	}
}

