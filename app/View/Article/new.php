<h1>Ajouter un article</h1>

<form action="" method="POST">
	<?php echo $form->input('title', 'Titre') ?><br />
	<?php echo $form->input('content', 'Contenu', 'textarea') ?><br />
	<input type="submit" />
</form>