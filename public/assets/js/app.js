
var coordonnes = [40.7309,-73.98720000000003];
//var coordonnes = [0,0];
var map = L.map('map').setView(coordonnes,6);
L.tileLayer('https://maps.heigit.org/openmapsurfer/tiles/roads/webmercator/{z}/{x}/{y}.png').addTo(map);
var marqueur = L.marker(coordonnes).addTo(map);
marqueur.bindPopup("<b>Hello world!</b><br>Un projet pour ocean stream.").openPopup();