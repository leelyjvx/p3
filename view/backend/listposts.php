
<?php $titre = 'Liste' ?>

<?php ob_start()?>

<h2>  Articles </h2>

<?php foreach ($posts as $post) { ?>
	
	<p>Titre : <?= $post->getTitle()?></p>

<?php }?>

<?php $content = ob_get_clean() ?>

<?php require('template.php') ?>