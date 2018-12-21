
<?php $titre = 'Administration' ?>

<?php ob_start()?>

<h2> Articles </h2>

<p><a href="index.php?action=addpost"> Créer un article. </a></p>
<p><a href="index.php?action=listposts"> Lire les articles. </a></p>

<p> Retrouver un article. </p>

<form action="#" method="post">
	<p><input type="text" name="search_post" placeholder="Saisir l'id ou le titre de l'article"></p>
	<p><input type="submit" name="search" value="Trouver l'article"></p>
</form>

<?php $content = ob_get_clean() ?>

<?php require('template.php') ?>