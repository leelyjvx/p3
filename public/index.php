<?php

include('../controller/controller.php');

if (isset($_GET['action']) && $_GET['action'] === 'admin') {
	admin();
}

if (isset($_GET['action']) && $_GET['action'] === 'listposts') {
	listPosts();
}