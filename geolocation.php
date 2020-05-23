
<!DOCTYPE html>
<html>
<head>
	<style>
      
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        background:url(images/6.jpg);
        background-size: cover;
background-postion:center;
background-repeat: no-repeat;
background-attachment: fixed;
font-size:20px;
color:blue;
      }
      .container{
     width: 20%;
     margin:0px 500px 0px 500px;
      padding: 50px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999;

  }
  .form{
    width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
  }
    .form div label {
      display:block;
      padding-bottom:5px;
      }
    input[type=text]{
  width: 80%;
  padding: 12px 20px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}
    </style>
	
</head>
<body>
	<script>
      
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ_ufVRbknWhj-PMnhiTv0iKMzvNccfZ8&callback=initMap">
    </script>

</body>
</html>



<?php

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();


$geoplugin->locate();

echo "Geolocation results for {$geoplugin->ip}: <br />\n".
	"City: {$geoplugin->city} <br />\n".
	"Region: {$geoplugin->region} <br />\n".
	"Region Code: {$geoplugin->regionCode} <br />\n".
	"Region Name: {$geoplugin->regionName} <br />\n".
	
	"Country Name: {$geoplugin->countryName} <br />\n".
	"Country Code: {$geoplugin->countryCode} <br />\n".
	
	"Latitude: {$geoplugin->latitude} <br />\n".
	"Longitude: {$geoplugin->longitude} <br />\n".

	"Timezone: {$geoplugin->timezone} <br />\n".
	"Currency Code: {$geoplugin->currencyCode} <br />\n";


?>

<?php
	if (isset($_POST["submit_address"]))
	{
		$address = $_POST["address"];
		$address = str_replace(" ", "+", $address);
		?>

		<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

		<?php
	}
	if (isset($_POST["submit_coordinates"]))
	{
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		?>

		<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>

		<?php
	}
?>
  <div class="container">
<form method="POST">
  <p>
  <lable>enter address:</lable>
		<input type="text" name="address" placeholder="Enter address">
	</p>

	<input type="submit" name="submit_address">
</form>

<form method="POST">
  <p>
  <lable>Enter latitude:</lable>
		<input type="text" name="latitude" placeholder="Enter latitude">
	</p>
  <p>
<lable>Enter longitude:</lable>
		<input type="text" name="longitude" placeholder="Enter longitude">
	</p>

<input type="submit" name="submit_coordinates">
</form>

</div>