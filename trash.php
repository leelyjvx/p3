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
