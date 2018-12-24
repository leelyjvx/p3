<!DOCTYPE html>
<html lang="fr">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/css/intro.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Euphoria+Script|Indie+Flower|Mr+Dafoe|Playfair+Display+SC|Rock+Salt|Tangerine" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Chivo|Lato|Libre+Franklin|Old+Standard+TT|Open+Sans|Open+Sans+Condensed:300|PT+Sans|Rubik|Rubik+Mono+One" rel="stylesheet">

	<title> Billet simple : Alaska. </title>

</head>
<body>

	<header>
		<div class="container">
			<div class="navbar navbar-expand-md py-1 fixed-top justify-content-center">
				<div class="d-flex p-2 m-1">
					<div class="navbar-brand"> <a href="../frontend/intro.php"><img src="../../public/pictures/mini.png" height="30"></a> </div>
					<a class="nav-link" href="../frontend/intro.php"> Accueil</a>
					<a class="nav-link" href="index?action=chapters"> Chapitres </a>
					<a class="nav-link" href="index?action=author"> Auteur </a>
					<a class="nav-link" href="index?action=newsletter"> Newsletter </a>
					<a class="nav-link" href="index?action=connect"> Admin </a>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="flex">
			<nav id="intro">

				<form action="intro.php" method="post">
					<input type="submit" class="btn" value="L'aventure vous attend."></input>
				</form>
				<p><img src="../../public/pictures/mini.png"></p>
				<p> Amicalement, </p>
				<div class="author"><p> Jean Forteroche</p></div>
			</nav>
		</div>
	</div>

	<div class="footer">
		<footer class="navbar navbar-expand-md py-md-1 fixed-bottom justify-content-center">

			<a class="nav-link" href="index?action=newsletter"> Contact </a>
			<a class="nav-link" href="index?action=connect"> Admin </a>

		</footer>
	</div>

</body>
</html>