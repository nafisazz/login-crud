<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/KECAMATANBANDARLAMPUNG_1.php"></script>
        <script src="data/hotel_2.php"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-5.5489272871249,105.04356819882702],[-5.319385227874926,105.45334575017313]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
        .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
        function pop_KECAMATANBANDARLAMPUNG_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">NAMOBJ</th>\
                        <td>' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature.properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>REMARK</strong><br />' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker.link(feature.properties['LUASWH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties['LCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">WADMKK</th>\
                        <td>' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature.properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature.properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker.link(feature.properties['TIPADM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature.properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature.properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">BERBINTANG</th>\
                        <td>' + (feature.properties['BERBINTANG'] !== null ? autolinker.link(feature.properties['BERBINTANG'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NON-BINTANG</th>\
                        <td>' + (feature.properties['NON-BINTANG'] !== null ? autolinker.link(feature.properties['NON-BINTANG'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">JUMLAH</th>\
                        <td>' + (feature.properties['JUMLAH'] !== null ? autolinker.link(feature.properties['JUMLAH'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_KECAMATANBANDARLAMPUNG_1_0(feature) {
            if (feature.properties['JUMLAH'] >= 0.000000 && feature.properties['JUMLAH'] <= 0.000000 ) {
                return {
                pane: 'pane_KECAMATANBANDARLAMPUNG_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['JUMLAH'] >= 0.000000 && feature.properties['JUMLAH'] <= 0.000000 ) {
                return {
                pane: 'pane_KECAMATANBANDARLAMPUNG_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,191,191,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['JUMLAH'] >= 0.000000 && feature.properties['JUMLAH'] <= 0.000000 ) {
                return {
                pane: 'pane_KECAMATANBANDARLAMPUNG_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,128,128,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['JUMLAH'] >= 0.000000 && feature.properties['JUMLAH'] <= 1.000000 ) {
                return {
                pane: 'pane_KECAMATANBANDARLAMPUNG_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,64,64,1.0)',
                interactive: true,
            }
            }
            if (feature.properties['JUMLAH'] >= 1.000000 && feature.properties['JUMLAH'] <= 6.000000 ) {
                return {
                pane: 'pane_KECAMATANBANDARLAMPUNG_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,0,0,1.0)',
                interactive: true,
            }
            }
        }
        map.createPane('pane_KECAMATANBANDARLAMPUNG_1');
        map.getPane('pane_KECAMATANBANDARLAMPUNG_1').style.zIndex = 401;
        map.getPane('pane_KECAMATANBANDARLAMPUNG_1').style['mix-blend-mode'] = 'normal';
        var layer_KECAMATANBANDARLAMPUNG_1 = new L.geoJson(json_KECAMATANBANDARLAMPUNG_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KECAMATANBANDARLAMPUNG_1',
            layerName: 'layer_KECAMATANBANDARLAMPUNG_1',
            pane: 'pane_KECAMATANBANDARLAMPUNG_1',
            onEachFeature: pop_KECAMATANBANDARLAMPUNG_1,
            style: style_KECAMATANBANDARLAMPUNG_1_0,
        });
        bounds_group.addLayer(layer_KECAMATANBANDARLAMPUNG_1);
        map.addLayer(layer_KECAMATANBANDARLAMPUNG_1);
        function pop_hotel_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">id</th>\
                        <td>' + (feature.properties['id'] !== null ? autolinker.link(feature.properties['id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nama</th>\
                        <td>' + (feature.properties['nama'] !== null ? autolinker.link(feature.properties['nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">alamat</th>\
                        <td>' + (feature.properties['alamat'] !== null ? autolinker.link(feature.properties['alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">lat</th>\
                        <td>' + (feature.properties['lat'] !== null ? autolinker.link(feature.properties['lat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">lng</th>\
                        <td>' + (feature.properties['lng'] !== null ? autolinker.link(feature.properties['lng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_hotel_2_0() {
            return {
                pane: 'pane_hotel_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(196,60,57,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_hotel_2');
        map.getPane('pane_hotel_2').style.zIndex = 402;
        map.getPane('pane_hotel_2').style['mix-blend-mode'] = 'normal';
        var layer_hotel_2 = new L.geoJson(json_hotel_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_hotel_2',
            layerName: 'layer_hotel_2',
            pane: 'pane_hotel_2',
            onEachFeature: pop_hotel_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_hotel_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_hotel_2);
        map.addLayer(layer_hotel_2);
        setBounds();
        var i = 0;
        layer_KECAMATANBANDARLAMPUNG_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null?String('<div style="color: #000000; font-size: 10pt; font-family: \'MS Shell Dlg 2\', sans-serif;">' + layer.feature.properties['NAMOBJ']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_KECAMATANBANDARLAMPUNG_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_KECAMATANBANDARLAMPUNG_1]);
        map.on("zoomend", function(){
            resetLabels([layer_KECAMATANBANDARLAMPUNG_1]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_KECAMATANBANDARLAMPUNG_1]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_KECAMATANBANDARLAMPUNG_1]);
        });
        </script>
    </body>
</html>
