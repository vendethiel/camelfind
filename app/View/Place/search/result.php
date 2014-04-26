<h1>Votre recherche</h1>

<b>Catégorie :</b> <?php echo $category['name'] ?>.
<script>
var places = [];
<?php foreach ($places as $place): ?>
places.push(<?php json_encode($place->getValues()) ?>;
<?php endforeach ?>
</script>