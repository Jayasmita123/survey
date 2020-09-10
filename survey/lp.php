<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Get Current Location Latitude and Longitude Using JavaScript</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
<div class="row">
<div id="get_it">
<h1>Get Current Location Latitude and Longitude Using JavaScript</h1>
<button id="get_location" class="btn btn-primary" onclick="getLoc()">Find Location</button>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-6 card p-2">
<p>Latitude: <span id="get_lat"></span></p>
</div>
<div class="col-md-6 card p-2">
<p>Longitude: <span id="get_lon"></span></p>
</div>
</div>
</div>
<script>
var button = document.getElementById('get_location');
var get_it = document.getElementById("get_it");
var latitude = document.getElementById('get_lat');
var longitude = document.getElementById('get_lon');
function getLoc() {
var startLoc;
var show_location = function() {
get_it.style.display = "block";
};
var hide_location = function() {
get_it.style.display = "none";
};
var getTime_value = setTimeout(show_location, 5000);
var successMes = function(position) {
hide_location();
clearTimeout(getTime_value);
startLoc = position;
latitude.innerHTML = startLoc.coords.latitude;
longitude.innerHTML = startLoc.coords.longitude;
};
var geoFail = function(error) {
switch (error.code) {
case error.TIMEOUT:
show_location();
break;
}
};
navigator.geolocation.getCurrentPosition(successMes, geoFail);
};
</script>
</body>
</html>