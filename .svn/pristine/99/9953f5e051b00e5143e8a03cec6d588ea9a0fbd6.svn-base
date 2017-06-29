<!DOCTYPE html>
<html>
<head>
    <title>Geocoding service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            height: 100%;
            width: 100%;
        }
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script>
    var marker;
    var markers = [];

    function initMap() {
        var geocoder = new google.maps.Geocoder();
        var latitudInit = parent.document.getElementById("latitud");
        var longitudInit = parent.document.getElementById("longitud");

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: new google.maps.LatLng(latitudInit.value, longitudInit.value)
        });

        marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            title: 'Direccion del Imputado'
        });

        //INICIALIZA AUTOMATICAMENTE EL MAPA
        //document.getElementById('submit').addEventListener('click', function() {
        geocodeAddress(geocoder, map);
        //});

        google.maps.event.addListener(map, 'click', function (event) {
            updateMarker(event.latLng);
        });

        google.maps.event.addListener(marker, 'drag', function () {
            updateMarkerPosition(marker.getPosition());
        });

        google.maps.event.addListener(marker, 'dragend', function () {
            updateMarkerPosition(marker.getPosition());
        });
    }

    function geocodeAddress(geocoder, resultsMap) {
        marker.setMap(null);
        deleteMarkers();
        var pais = parent.document.getElementById("cmbPaisDomicilioOfendido");
        pais = getTextCombo(pais, pais.value);
        var estado = parent.document.getElementById("cmbEstadoDomicilioOfendido");
        estado = getTextCombo(estado, estado.value);
        var municipio = parent.document.getElementById("cmbMunicipioDomicilioOfendido");
        municipio = getTextCombo(municipio, municipio.value);
        var direccion = parent.document.getElementById("direccionDomicilio");
        var colonia = parent.document.getElementById("coloniaDireccion");
        var cp = parent.document.getElementById("cpDomicilio");
        var address = pais+" "+estado+" "+municipio+" "+direccion.value+" "+colonia.value+" "+cp.value;

        geocoder.geocode({'address': address}, function(results, status) {
            if (status === google.maps.GeocoderStatus.OK) {
                resultsMap.setCenter(results[0].geometry.location);
                marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    title: 'Direccion del Imputado',
                });
                markers.push(marker);
                updateMarkerPosition(marker.getPosition());

                google.maps.event.addListener(marker, 'drag', function () {
                    updateMarkerPosition(marker.getPosition());
                });

                google.maps.event.addListener(marker, 'dragend', function () {
                    updateMarkerPosition(marker.getPosition());
                });
            } else {
                alert('No se pudo realizar la localización: ' + status);
            }
        });
    }

    function updateMarkerPosition(latLng) {
        var latitud = parent.document.getElementById("latitud");
        var longitud = parent.document.getElementById("longitud");
        latitud.value = latLng.lat();
        longitud.value = latLng.lng();
    }

    function updateMarker(location) {
        marker.setPosition(location);
        updateMarkerPosition(location);
    }
    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }
    // Removes the markers from the map, but keeps them in the array.
    function clearMarkers() {
        setMapOnAll(null);
    }

    // Shows any markers currently in the array.
    function showMarkers() {
        setMapOnAll(map);
    }

    // Deletes all markers in the array by removing references to them.
    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

    getTextCombo = function (cmb, cve) {
        for (var index = 0; index < cmb.length; index++) {
            if (cmb.options[index].value == cve) {
                var text = cmb.options[index].text;
                break;
            }
        }
        return text;
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDia0WQeXw249IMPzDLd66Jt_VAiit5qVw&signed_in=true&callback=initMap" async defer></script>
</body>
</html>