
<?php 
	
include_once 'header.php';

?>

<link rel="stylesheet" href="style.css">

    <style>
        #map{
            height: 100vh;
        }
    </style>


    <h2 class="display-4 text-center text-primary">Sua Localização</h2>
    <h4 class="display-6 text-center">Consegue ver onde está com exatidão!</h4>

    <h3 class="text-capitalize"></h3>
    <div id="map"></div>
<script>
        let h3 = document.querySelector('h3');
        var map;

        function success(pos){
            console.log(pos.coords.latitude, pos.coords.longitude);
            h3.textContent = `Latitude:${pos.coords.latitude}, Longitude:${pos.coords.longitude}`;

            if(map === undefined){
                map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 15);
            }else{
                map.remove();
                map = L.map('map').setView([pos.coords.latitude, pos.coords.longitude], 15);
            }
            
            //Renderizar mapa
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(map)
            .bindPopup('Minha localização.')
            .openPopup();

            

            //Click para ver latitude
            function onMapClick(e) {
                popup
                .setLatLng(e.latlng)
                .setContent("Clicou no mapa " + e.latlng.toString())
                .openOn(map);
            }

            map.on('click', onMapClick);
        }

        function error(err){
        console.log(err);
        }
        var watchID = navigator.geolocation.watchPosition(success, error);    
</script>    
       

        


<?php
include_once 'footer.php';
?>

<!-- Parte da data -->
 <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	  <script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
      });
		</script>
