<?php $title = 'Création d\'article' ?>

<?php ob_start() ?>

<form action="../../controller/controller.php" method="post">
	<p><input type="text" name="title" placeholder="Titre" size="174"></p>
	<p><textarea name="content" rows="50" cols="150"> </textarea></p>
	<input type="submit" name="create" value="Envoyer l'article">
</form>
<a href="home.php"> Retour </a>

<?php $content = ob_get_clean() ?>
<?php require('template.php') ?>

</body>
</html>