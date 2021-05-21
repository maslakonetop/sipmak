<footer class="bg-light text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgb(7, 7, 7);">
   
    <a class="text-light" href="#"> © 2021 Copyright: DISPERKIMTA</a>
  </div>
  <!-- Copyright -->
</footer>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="assets/js/extention/choices.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.js"></script>
   <script>
   const choices = new Choices('[data-trigger]',
   {
      searchEnabled: false,
      itemSelectText: '',
   });

   </script>
   <script>
      var map;

      function initMap() {

      map = new google.maps.Map(document.getElementById("googleMap"), {

         center: { lat: -7.499772, lng: 108.843610 },

         zoom: 10,

      });

      map.data.loadGeoJson('');

      map.data.setMap(map);

      var marker=new google.maps.Marker({

         position: new google.maps.LatLng(-7.659355, 109.149612),

         map: map,       

         icon: "/assets/image/location.png"

      });
      marker.addListener('click', function() {
         // tampilkan info window di atas marker
         infowindow.open(map, marker);
      });

      var marker2=new google.maps.Marker({

         position: new google.maps.LatLng(-7.543571, 108.874165),

         map: map,

         icon: "/assets/image/location.png"

      });
      }
   </script>
   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWpN4rufrnzxxgoFDvf7X019Uo3tey9ww&callback=initMap" type="text/javascript"></script>