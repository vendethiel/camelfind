<h3>Lieux a 5km de votre position actuelle :</h3>
<ul id="matches">
	<li id="searching">(... recherche ...)</li>
</ul>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script>
// PHP generation
var places = [];
<?php foreach ($places as $place): ?>
places.push(<?php echo json_encode($place->getValues()) ?>);
<?php endforeach ?>

var addr = <?php echo json_encode($form->getValues()['address']) ?>
</script>

<script type="text/javascript">
// script itself
Math.radians = function(degrees)
{
	return degrees * Math.PI / 180;
};

var geocoder;
geocoder = new google.maps.Geocoder();

function lat(address, callback) {
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			callback(results[0].geometry.location);
		}
	})
}

function calcul(a, c, b, d)
{
	return res =  6371*Math.acos(Math.sin(Math.radians(a))*Math.sin(Math.radians(b)) + Math.cos(Math.radians(a))*Math.cos(Math.radians(b))*Math.cos(Math.radians(c)-Math.radians(d)));
}

var ul = document.getElementById('matches');
function removeSearching() {
	var searching;
	if (searching = document.getElementById('searching'))
		searching.parentNode.removeChild(searching);
}
lat(addr, function (res) {
	for (var i = 0; i < places.length; ++i) {
		search(places[i]);
	}

	function search(bdd)
	{
		removeSearching();
		if(calcul(bdd.k, bdd.a, res.k, res.A) < 2) {
			var li = document.createElement('li');
			li.innerHTML = bdd.address;
			ul.appendChild(li);
		}
	}
});
</script>
