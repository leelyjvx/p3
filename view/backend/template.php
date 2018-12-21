<!DOCTYPE html>
<html>
<head>
	<title><?= $titre ?></title>
</head>

<body>

	<ul>
		<li><a href="index?action=admin"> Accueil </a></li>
		<li><a href="index?action=addpost"> Creation </a></li>
		<li><a href="index?action=listposts"> Lecture des chapitres </a></li>
		<li><a href="#"> Deconnection </a></li>
	</ul>

	<?= $content ?>

</body>
</html>


