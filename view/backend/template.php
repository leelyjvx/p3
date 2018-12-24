<!DOCTYPE html>
<html>
<head>
	<title><?= $titre ?></title>
</head>

<body>
	<header>
		<div class="container">
			<div class="navbar navbar-expand-md py-1 fixed-top justify-content-center">
				<div class="d-flex p-2 m-1">
					<div class="navbar-brand"> <a href="../frontend/intro.php"><img src="../../public/pictures/mini.png" height="30"></a> </div>
					<a class="nav-link" href="../frontend/intro.php"> Accueil</a>
					<a class="nav-link" href="index?action=chapters"> Création </a>
					<a class="nav-link" href="index?action=author"> Lecture des chapitres </a>
					<a class="nav-link" href="index?action=newsletter"> Deconnexion </a>
					<a class="nav-link" href="index?action=connect"> Admin </a>
				</div>
			</div>
		</div>
	</header>
	<ul>
		<li><a href="index?action=admin"> Accueil </a></li>
		<li><a href="index?action=addpost"> Creation </a></li>
		<li><a href="index?action=listposts"> Lecture des chapitres </a></li>
		<li><a href="#"> Deconnection </a></li>
	</ul>

	<?= $content ?>

</body>
</html>


