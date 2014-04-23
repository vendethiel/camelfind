<h1>Bienvenue !</h1>

<?php if (count($articles)): ?>
	<b>Liste des articles :</b>
	<ul>
		<?php foreach ($articles as $article): ?>
		<li>
			<?php echo link_to('article/'.$article->getPk(), $article['title']) ?>
		</li>
		<?php endforeach ?>
	</ul>
<?php else: ?>
<b>Aucun article trouvé !</b>
<?php endif ?>

<?php echo link_to('article/new', 'Ajouter un article') ?>