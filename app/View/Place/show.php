<h3 class="inline">Lieu : <b><?php echo $place['name'] ?></b> &bull; <i><?php echo $place['file'] ?></i></h3>
<br/><br/>

<div id="map" style="width: 100%; height: 100%;"></div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
var latlng = new google.maps.LatLng(<?php echo $place['k'] ?>, <?php echo $place['a'] ?>);
var options = {center: latlng, zoom: 19, mapTypeId: google.maps.MapTypeId.SATELLITE};

var map = new google.maps.Map(document.getElementById('map'), options);
var marker = new google.maps.Marker({position: latlng, map: map});
</script>