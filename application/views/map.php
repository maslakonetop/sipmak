<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWpN4rufrnzxxgoFDvf7X019Uo3tey9ww&callback=initMap" type="text/javascript"></script>

    <script>

        let map;



    function initMap() {
        var karangsuci = {lat:-7.720159, lng:108.998627};
        var kerkoff = {lat:-7.740985, lng:109.017375};

        map = new google.maps.Map(document.getElementById("googleMap"), {

            center: { lat: -7.724200, lng:109.011377 },

            zoom: 14,

        });
        var contentString = '<h4>TPU Karangsuci</h4>';
        

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          position: karangsuci
        });
        var contentString1 = '<h4>TPU Arimatea</h4>';

        var infowindow1 = new google.maps.InfoWindow({
            content: contentString1,
            position: kerkoff
        });

        var marker=new google.maps.Marker({

            position: karangsuci,

            map: map,       

            icon: "<?php echo base_url('/assets/images/location.png')?>",

            title: "TPU Karangsuci"

        });
            marker.addListener('click', function() {
            // tampilkan info window di atas marker
            infowindow.open(map, marker);
        });

        var marker1=new google.maps.Marker({

            position: kerkoff,

            map: map,

            icon: "<?php echo base_url('/assets/images/location.png')?>",

            title: "TPU Arimatea Kerkoff"

        });
            marker1.addListener('click', function() {
            // tampilkan info window di atas marker
            infowindow1.open(map, marker1);
        });
    }

</script>
<div class="container-fluid" style="width:100%;height100%"><br/><br/>
        <div class="row">
            <div class="col-md-8">
                <div id="googleMap" style="width:100%;height:450px;"></div>
            </div>
            <div class="col-md-4 text-white">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
            </div>
        </div>