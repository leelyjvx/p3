<!DOCTYPE html>
<html>
<head>
	<title> Ajouter un article </title>
</head>
<body>

	<form action="../../controller/controller.php" method="post">
		<p><input type="text" name="title" placeholder="Titre" size="174"></p>
		<p><textarea name="content" rows="50" cols="150"> </textarea></p>
		<input type="submit" name="create" value="Envoyer l'article">
	</form>
	<a href="home.php"> Retour </a>

</body>
</html>