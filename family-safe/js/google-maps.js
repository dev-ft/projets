/*
  Author: Charlie
*/

//------------------- Google Maps --------------------
var allPos = [];
var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 46.28, lng: 2.71},
    mapTypeId: google.maps.MapTypeId.TERRAIN,
    zoom: 4
  });

  //------------------- Geolocalisation -------------------


  if(navigator.geolocation) {

    var watchID = navigator.geolocation.watchPosition(
      function(position) {
        allPos.push(position);
        
        for (var aPos of allPos) {

          var date = new Date(aPos.timestamp);

          var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat:aPos.coords.latitude, lng:aPos.coords.longitude},
          });
          // marker.addListener('click', toggleBounce(this));

          var infowindow = new google.maps.InfoWindow({content: date.toLocaleString()});
            marker.addListener('click', function() {infowindow.open(map, this);});
            marker.setMap(map);
            setCenter_user();
        }

        if (map) {
          var allPoly = []
          for (var aPos of allPos) {
            allPoly.push({lat: aPos.coords.latitude, lng: aPos.coords.longitude})
          }

          var polyline = new google.maps.Polyline({
            path: allPoly,
            geodesic: true,
            strokeColor: "#FF0000",
            strokeOpacity: 1.0,
            strokeWeight: 2
          });
          polyline.setMap(map)

          map.panTo({lat: aPos.coords.latitude, lng: aPos.coords.longitude});
          map.setZoom(18);
        }
      },
      function(error) {
        alert(error.message);
      },
      {
        enableHighAccuracy: true,
        timeout : 3000
      });


    }

  }

function setCenter_user(userId) {
  var aPos = allPos[allPos.length-1]
  map.panTo({lat: aPos.coords.latitude, lng: aPos.coords.longitude});
}
