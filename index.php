<?php
//(1) On inclut la classe de Google Maps pour générer ensuite la carte.
require('GoogleMapAPI.class.php');

//(2) On crée une nouvelle carte; Ici, notre carte sera $map.
$map = new GoogleMapAPI('map');

//(3) On ajoute la clef de Google Maps.
$map->setAPIKey('AIzaSyBeEJ5Ds2PY6ZIcD1diD3N2IVciKKj4YSY');
    
//(4) On ajoute les caractéristiques que l'on désire à notre carte.
$map->setWidth("800px");
$map->setHeight("500px");
$map->setCenterCoords ('2', '48');
$map->setZoomLevel (5);

//(5) On applique la base XHTML avec les fonctions à appliquer ainsi que le onload du body.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="text/css" rel="stylesheet" href="style.css">
		<title>WeatheRide</title>
		<?php $map->printHeaderJS(); ?>
		<?php $map->printMapJS(); ?>
		<script type="text/javascript">
		</script>
	</head>
	
	<body onload="onLoad();">
		<h1>WeatheRide</h1>
			<div class = "weather">
			<div style="width: 255px;height: 280px;"><div style="margin:7px 10px;">
				<iframe id="widget-frame" src="http://www.meteovista.fr/Go/ExternalWidgetsNew/TwoDaysCityWithSearch?gid=4266446&activityType=0&titleColor=%23222222&linkColor=%230160b2&temperatureScale=Celsius&defaultSettings=True" width="235" height="235" frameborder="0" scrolling="no" style="border: none;" allowtransparency="true"></iframe><a href="http://www.meteovista.fr/" style="display: block;height: 25px;width: 113px;margin: 0px 10px 8px 0px;outline: none;text-decoration: none;" title="Meteovista.fr la météo autrement" target="_blank"><img src="http://www.meteovista.fr/Shared/Images/variations/fr-FR/new-widget-logo-FR-color.png" width="113" height="25" alt="Meteovista.fr la météo autrement" style="border: none;background-color: transparent;box-shadow: none;" /></a></div></div></div>

	</body>
	</html>
