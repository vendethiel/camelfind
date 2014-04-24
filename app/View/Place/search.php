<h1>Recherche de lieu</h1>

<form class="aligned" action="" method="POST">
	<?php echo $form->input('address', 'Adresse') ?><br/>
	<label for="category">Catégorie</label>
	<select name="category">
		<?php foreach ($categories as $category): ?>
		<option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
		<?php endforeach ?>
	</select><br />
	<input type="submit" class="btn btn-primary"/>
</form>