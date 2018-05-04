<!DOCTYPE html>
<html>

<head>
    <title>Leaflet-Test</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
            integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>

    <script type="text/javascript" src="//brauchbar.de/services/clock-100.js"></script>

</head>

<body onload="clock_update('uhr');">

    <?php
    echo "Erste Zeile der Seite"."<br/>";
    echo "<br/>";
    echo date("d.m.Y ");
    ?>

    <span id="uhr"></span>

    <div id="karte" style="width: 100%; height: 600px;"></div>
    <br/>
    <p>Eingabezeile</p><input type="text" name="Max" value="">

    <script>

       var map = L.map('karte').setView([50.972621,11.045364],13);

        L.tileLayer('http://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
            attribution: 'Map tiles by Carto, under CC BY 3.0. Data by OpenStreetMap, under ODbL.'
        }).addTo(map);

       var marker = L.marker([51.00199933251160,11.043569]).addTo(map);
            marker.bindPopup("<b>Guten Tag </b> <br/> Ich bin dein PopUp");

       var circle = L.circle([51.002, 11.11], {
            color: '#e283e4',
            fillColor: '#fd9dff',
            fillOpacity: 0.5,
            radius: 825
        }).addTo(map);
            circle.bindPopup("<b>Guten Tag </b> <br/> Ich bin dein zweites PopUp");

    </script>

</body>
</html>
