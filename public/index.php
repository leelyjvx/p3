<?php

include('../controller/controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] === 'admin') {
		admin();
	}

	if ($_GET['action'] === 'listposts') {
		listPosts();
	}

	if ($_GET['action'] === 'addpost') {
		addPost();
	}
}

