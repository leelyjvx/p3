
<?php $titre = 'Liste' ?>

<?php ob_start()?>

<h2>  Articles </h2>

<?php foreach ($posts as $post) { ?>
	
	<p>Titre : <?= $post->getTitle()?></p>
	<p><?= $post->getContent() ?></p>

	<p><form action="index.php?action=deletepost" method="post">
		<input type="submit" name="delete_post" value="Supprimer">
	</form>
	<form action="index.php?action=updatepost" method="post">
		<input type="submit" name="update_post" value="Modifier">
	</form></p>

<?php }?>

<?php $content = ob_get_clean() ?>

<?php require('template.php') ?>