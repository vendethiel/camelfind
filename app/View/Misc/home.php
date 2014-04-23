<h1>Bienvenue !</h1>

<div class="col-lg-6"><?php if (count($articles)): ?>
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

<?php if ($session->getUser()): ?>
    <?php echo link_to('article/new', 'Ajouter un article') ?>
<?php endif ?>
</div>
<div class="col-lg-6">
    <b>5 places au hasard :</b>
    <ul>
        <?php foreach ($random_places as $place): ?>
        <li><?php echo link_to('place/'.$place->getPk(), $place['name']) ?></li>
        <?php endforeach ?>
    </ul>
</div>