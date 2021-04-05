<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWpN4rufrnzxxgoFDvf7X019Uo3tey9ww&callback=initMap" type="text/javascript"></script>

    <script>

        let map;



    function initMap() {

    map = new google.maps.Map(document.getElementById("googleMap"), {

        center: { lat: -7.499772, lng: 108.843610 },

        zoom: 10,

    });

    map.data.loadGeoJson('');

    map.data.setMap(map);

    var marker=new google.maps.Marker({

        position: new google.maps.LatLng(-7.692969, 109.025540),

        map: map,

        icon: "./assets/image/pinmappolisi.png"

    });

    var marker1=new google.maps.Marker({

        position: new google.maps.LatLng(-7.659355, 109.149612),

        map: map,       

        icon: "<?php echo base_url('/assets/images/tomb.png')?>"

    });

    var marker2=new google.maps.Marker({

        position: new google.maps.LatLng(-7.543571, 108.874165),

        map: map,

        icon: "<?php echo base_url('/assets/images/tomb.png')?>"

    });
    }

</script>
</head>
<body><br/><br/>
    <div class="container-fluid" style="width:100%;height100%">
        <div class="row">
            <div class="col-md-6">
                    <div id="googleMap" style="width:100%;height:450px;"></div>
            </div>
                <div class="col-md-6 text-white">
                    <h4>Dalam aplikasi ini kita bisa mengetahui lokasi TPU yang dikelola oleh Pemkab Cilacap</h4>
                    <h4>Dalam aplikasi ini kita bisa mengetahui lokasi TPU yang dikelola oleh Pemkab Cilacap</h4>
                    <h4>Dalam aplikasi ini kita bisa mengetahui lokasi TPU yang dikelola oleh Pemkab Cilacap</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-white">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
            </div>
        
            <div class="col-md-6">
                <img src="<?php echo base_url('/assets/images/pintukrsuci.jpg')?>" alt="Responsive image">
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 col-span">
                <img src="<?php echo base_url('/assets/images/kerkoff.jpg')?>" style="width:100%" alt="Responsive image">
            </div>
            <div class="col-md-6 text-white">
                <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
            </div>
        </div>
    </div>