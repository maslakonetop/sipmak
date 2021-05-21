var map;

function initMap() {

map = new google.maps.Map(document.getElementById("googleMap"), {

    center: { lat: -7.499772, lng: 108.843610 },

    zoom: 10,

});

map.data.loadGeoJson('');

map.data.setMap(map);

var marker1=new google.maps.Marker({

    position: new google.maps.LatLng(-7.659355, 109.149612),

    map: map,       

    icon: "/assets/image/location.png"

});

var marker2=new google.maps.Marker({

    position: new google.maps.LatLng(-7.543571, 108.874165),

    map: map,

    icon: "/assets/image/location.png"

});
}