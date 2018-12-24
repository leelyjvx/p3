// Suppression d'un post 

if (isset($_POST['id_delete']) && $_POST['id_delete'] !== '' AND isset($_POST['delete'])) {

echo "L'article est supprimé!";

$manager = new PostManager();
$post = $manager->delete($_POST['id_delete']);
var_dump($post);
}

// Modification d'un post

if (isset($_POST['id_update']) && $_POST['id_update'] !== '' AND isset($_POST['update'])) {

$manager = new PostManager();
$post = $manager->readID($_POST['id_update']);

echo '<form action = "#" method = "post">';
	echo '<p> <input type="text" name="id" value="' .$post->getID(). '"> </p>';
	echo '<p> <input type="text" name="title" value="' .$post->getTitle(). '"> </p>';
	echo '<p> <textarea name="content">' .$post->getContent(). '</textarea> </p>';
	echo '<p> <input type="submit" name="modif">' ;
	}

	if (isset($_POST['id']) && $_POST['id'] !== '' AND isset($_POST['title']) && $_POST['title'] !== '' AND isset($_POST['modif'])) {
	
	$post = new Post($_POST['title'], $_POST['content']);
	$post->setID($_POST['id']);
	var_dump($post);
	$manager = new PostManager();
	$manager->update($post);
}


<!DOCTYPE html>
<html>
<head>
	<title> Billet simple pour l'Alaska </title>
	<html lang="fr">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/intro.css">

</head>
<body>
	<div class="intro">
		<div class="container">

			<header>
				<div class="fixed-top">
					<div class="d-flex p-2 m-1 justify-content-center">
						<nav class="navbar navbar-expand-md">
							<nav class="navbar-brand"> <a href="#"><img src="public/pictures/mini.png" height="50"></a></nav>
							<a class="nav-link" href="index?action=home"> Chapitres </a>
							<a class="nav-link" href="index?action=author"> Auteur </a>
							<a class="nav-link" href="index?action=newsletter"> Newsletter </a>
							<a class="nav-link" href="index?action=connect"> Admin </a>
						</nav>
					</div>
				</div>


			</header>
			<nav>

				<h1 class="py-5 text-center"> Billet simple pour l'Alaska.  </h1>

				<img src="public/pictures/logo3.png" height="200">

				
				<a href="#" class="btn btn-outline-dark"> Débuter le voyage. </a>


			</nav>
			<footer>






			</footer>

		</div>
	</div>
</body>
</html>