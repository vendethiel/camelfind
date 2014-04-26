<h3 class="inline">Lieu : <b><?php echo $place['address'] ?></b> <i>(<?php echo $category['name'] ?>)</i></h3>
<br/><br/>

<div id="map" style="width: 100%; height: 100%;"></div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
var latlng = new google.maps.LatLng(<?php echo $place['k'] ?>, <?php echo $place['a'] ?>);
var options = {center: latlng, zoom: 19, mapTypeId: google.maps.MapTypeId.SATELLITE};

var map = new google.maps.Map(document.getElementById('map'), options);
var marker = new google.maps.Marker({position: latlng, map: map});
</script>

<hr/>
<?php if ($session->getUser()): ?>
<form class="aligned" action="<?php echo url('place/'.$place['id'].'/comment/new') ?>" method="POST">
    <?php echo $comment_form->input('content', 'Laissez un commentaire') ?>
    <input type="submit"/>
</form>
<?php endif ?>

<?php if (count($comments)): ?>
<ul>
    <?php foreach ($comments as $comment): $commenter = $users[$comment['user_id']]; ?>
        <li>(<b>auteur : <?php echo link_to('profile/'.$commenter->getPk(), $commenter->getFullname()) ?>)</b> <?php echo $comment['content'] ?></li>
    <?php endforeach ?>
</ul>
<?php else: ?>
<b>Aucun commentaire !</b>
<?php endif ?>
