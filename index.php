<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="index.css" />
	<title>Wifouse</title>
	
	<!-- mapbox gl -->
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
	<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />
	
	<!-- mapbox -->
	<script src='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.js'></script>
	<link href='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.css' rel='stylesheet' />
	
	<!-- mapbox gl geocoding -->
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.6/mapbox-gl-geocoder.min.js'></script>
	<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v3.1.6/mapbox-gl-geocoder.css' type='text/css' />   
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	
	<!-- leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>


	<!--  ChartJS -->
	
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	
	
	<!-- Fonts Google-->
	
	<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

</head>
	
	<body>
		<div class="container-fluid" id="carteTop"  >
			<div class="row" id="navigation">
				<div class ="col">
					<div class ="nav">
						<img src="logo/logo.png" alt="Header + Logo" />
						<form class="form-inline">
							
							<input id="research" class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
							<button id="reponse" class="btn btn-outline-success my-2 my-sm-0" type="button">Rechercher</button>
						</form>
						<button type="button" id="ajout-borne" class="btn btn-outline-success btn-sg" onclick="addTerminal(map.getCenter())"> Ajouter borne </button>
						<button type="button" id="geolocalisation" class="btn btn-outline-success btn-sg">
							<i class="fa fa-crosshairs"></i>
						</button>
						
						
						
						<button  type="button" id="graph" class="btn btn-outline-success "> <a id="transition" onclick="updateNbTerminal()" href="#graphique" style="text-decoration: none; color: green;"> Graphiques </a> <i class="fa fa-chevron-down"></i> </button>
					</div>
				</div>
			</div>
			<div class="row" id="resultats">
				
				<div id="results" class="sidebar">
				</div>
				
				<div id="carte" class="col" >
					<button id = "listmap" class="btn btn-outline-info" onclick="Changemap()"> <i class="fa fa-clone"></i>  </button>
					<div id='map'>
						
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div id="espace" style="height: 25px;"></div>
		
		
	</div>
	<div class="container-fluid" id="graphique">
		<div class="row" id="navigation">
			<div class ="col">
				<div class ="nav">
					<img src="logo/logo.png" alt="Header + Logo" />
					<form class="form-inline">
					</form>
					<div id ="choixgraph" class="form-group col-md-4">
						<select id="inputState" class="form-control">
							<option selected>Lignes</option>
							<option>Colonnes</option>
							<option>Radar</option>
							<option>Polaire</option>
							<option>Donuts</option>
						</select>
					</div>
					
					<button type="button" id="graph" class="btn btn-outline-success "> <a id="transition" href="#carteTop" style="text-decoration: none; color: green;"> Carte </a> <i class="fa fa-chevron-up"></i> </button>
				</div>
			</div>
		</div>
		<div class="section_graph">
			
			<div id="checkboxdiv"  class ="col-md-8" style="max-width:17.099999995%;">
				<label id="lab" for="inputState">Trier par</label>
				<select id="inputSort" class="form-control" value="Trier par">
					<option>Ordre alphabetique</option>
					<option>Nombre de borne</option>
					<option>Distance centre ville</option>
				</select>
				<button id="coche" class="btn btn-secondary btn-sm" onclick='toutCocher()'>Tout cocher</button>
				<button id="coche" class="btn btn-secondary btn-sm" onclick='toutDecocher()'>Tout decocher</button>
				<div id="checkbox" class="form-check">
					
				</div>
				
			</div>
			
			<div id="Les_graphs" style=" width:72%; min-height: 100vh;">
				
				<canvas id="Charts" style="position:relative; top:50px;"></canvas>
				
				
			</div>
			
		</div>
		
	</div>
	
	
	
	<!-- Start Database script -->
	<script type="text/javascript" src="js/indexedDB.js"></script>
	<!-- Start Map Script -->
	<script type="text/javascript" src="js/map.js"></script>
	
	<script type="text/javascript" src="js/uselyFunction.js"></script>
	
	<script type="text/javascript" src="js/main.js"></script>
	
	<?php

	echo("hi");

	?>
	
	
	
	
</body>

</html>