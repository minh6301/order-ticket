function initialize() {
    var locations = [
      ['Cinestar Huế', 16.631039280803304, 107.64168439312947, 4],
      ['Cinestar Quốc Thanh', 10.887938056459577, 106.66693528665128, 5],
      ['Cinestar Hai Bà Trưng', 10.995804032812462, 106.69989426912313, 3],
      ['Cinestar Mỹ Tho', 10.585706621146956, 106.33734546193273, 2],
      ['Cinestar Đà Lạt', 12.211861225961487, 108.5236246325658, 1],
      ['Cinestar Bình Dương', 10.875121567797413, 106.80062396812258, 6]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: new google.maps.LatLng(13.657857295388409, 108.03509452942497),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
      'callback=initialize';
  document.body.appendChild(script);
}

window.onload = loadScript;