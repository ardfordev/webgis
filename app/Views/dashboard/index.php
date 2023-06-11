<?= $this->extend('layout/template') ?>

<?= $this->section('title') ?>
	<title>GIS</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
	<section class="section">
		<div class="section-header">
			<h1>WebGIS</h1>
		</div>
		
		<div class="section-body">
			<div class="card">
				<div class="card-header">
					<h4>WebGIS</h4>
				</div>
				<div class="card-body p-0">
					<div class="w-100" style="height: 500px;" id="map"></div>
				</div>
			</div>
		</div>
	</section>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-7.937536741855308,109.8409522976684],[-7.746417807082375,110.14799252050803]]);
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
        map.createPane('pane_GoogleSatelit_0');
        map.getPane('pane_GoogleSatelit_0').style.zIndex = 400;
        var layer_GoogleSatelit_0 = L.tileLayer('http://www.google.cn/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleSatelit_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 18
        });
        layer_GoogleSatelit_0;
        map.addLayer(layer_GoogleSatelit_0);
        function pop_BatasAdmin_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">LEFT_FID</th>\
                        <td>' + (feature.properties['LEFT_FID'] !== null ? autolinker.link(feature.properties['LEFT_FID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">RIGHT_FID</th>\
                        <td>' + (feature.properties['RIGHT_FID'] !== null ? autolinker.link(feature.properties['RIGHT_FID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BatasAdmin_1_0() {
            return {
                pane: 'pane_BatasAdmin_1',
                opacity: 1,
                color: 'rgba(215,25,28,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_BatasAdmin_1');
        map.getPane('pane_BatasAdmin_1').style.zIndex = 401;
        map.getPane('pane_BatasAdmin_1').style['mix-blend-mode'] = 'normal';
        var layer_BatasAdmin_1 = new L.geoJson(json_BatasAdmin_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BatasAdmin_1',
            layerName: 'layer_BatasAdmin_1',
            pane: 'pane_BatasAdmin_1',
            onEachFeature: pop_BatasAdmin_1,
            style: style_BatasAdmin_1_0,
        });
        bounds_group.addLayer(layer_BatasAdmin_1);
        map.addLayer(layer_BatasAdmin_1);
        function pop_13_Posyandu_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SARANA_KPI</th>\
                        <td>' + (feature.properties['SARANA_KPI'] !== null ? autolinker.link(feature.properties['SARANA_KPI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_13_Posyandu_2_0() {
            return {
                pane: 'pane_13_Posyandu_2',
                radius: 10.4,
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
        }
        function style_13_Posyandu_2_1() {
            return {
                pane: 'pane_13_Posyandu_2',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_13_Posyandu_2');
        map.getPane('pane_13_Posyandu_2').style.zIndex = 402;
        map.getPane('pane_13_Posyandu_2').style['mix-blend-mode'] = 'normal';
        var layer_13_Posyandu_2 = new L.geoJson.multiStyle(json_13_Posyandu_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_13_Posyandu_2',
            layerName: 'layer_13_Posyandu_2',
            pane: 'pane_13_Posyandu_2',
            onEachFeature: pop_13_Posyandu_2,
            pointToLayers: [function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_13_Posyandu_2_0(feature));
            },function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_13_Posyandu_2_1(feature));
            },
        ]});
        bounds_group.addLayer(layer_13_Posyandu_2);
        map.addLayer(layer_13_Posyandu_2);
        function pop_12_Posbindu_3(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SARANA_KPI</th>\
                        <td>' + (feature.properties['SARANA_KPI'] !== null ? autolinker.link(feature.properties['SARANA_KPI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_12_Posbindu_3_0() {
            return {
                pane: 'pane_12_Posbindu_3',
                radius: 10.4,
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
        }
        function style_12_Posbindu_3_1() {
            return {
                pane: 'pane_12_Posbindu_3',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_12_Posbindu_3');
        map.getPane('pane_12_Posbindu_3').style.zIndex = 403;
        map.getPane('pane_12_Posbindu_3').style['mix-blend-mode'] = 'normal';
        var layer_12_Posbindu_3 = new L.geoJson.multiStyle(json_12_Posbindu_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_12_Posbindu_3',
            layerName: 'layer_12_Posbindu_3',
            pane: 'pane_12_Posbindu_3',
            onEachFeature: pop_12_Posbindu_3,
            pointToLayers: [function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_12_Posbindu_3_0(feature));
            },function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_12_Posbindu_3_1(feature));
            },
        ]});
        bounds_group.addLayer(layer_12_Posbindu_3);
        map.addLayer(layer_12_Posbindu_3);
        function pop_11_Puskesmas_4(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SARANA_KPI</th>\
                        <td>' + (feature.properties['SARANA_KPI'] !== null ? autolinker.link(feature.properties['SARANA_KPI'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_11_Puskesmas_4_0() {
            return {
                pane: 'pane_11_Puskesmas_4',
                radius: 7.599999999999998,
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
        }
        function style_11_Puskesmas_4_1() {
            return {
                pane: 'pane_11_Puskesmas_4',
                radius: 4.384615384615384,
                opacity: 1,
                color: 'rgba(227,26,28,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,26,28,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_11_Puskesmas_4');
        map.getPane('pane_11_Puskesmas_4').style.zIndex = 404;
        map.getPane('pane_11_Puskesmas_4').style['mix-blend-mode'] = 'normal';
        var layer_11_Puskesmas_4 = new L.geoJson.multiStyle(json_11_Puskesmas_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_11_Puskesmas_4',
            layerName: 'layer_11_Puskesmas_4',
            pane: 'pane_11_Puskesmas_4',
            onEachFeature: pop_11_Puskesmas_4,
            pointToLayers: [function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_11_Puskesmas_4_0(feature));
            },function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_11_Puskesmas_4_1(feature));
            },
        ]});
        bounds_group.addLayer(layer_11_Puskesmas_4);
        map.addLayer(layer_11_Puskesmas_4);
        function pop_10_BANK_5(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Name</th>\
                        <td>' + (feature.properties['Name'] !== null ? autolinker.link(feature.properties['Name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jns_Bangun</th>\
                        <td>' + (feature.properties['Jns_Bangun'] !== null ? autolinker.link(feature.properties['Jns_Bangun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Toponim</th>\
                        <td>' + (feature.properties['Toponim'] !== null ? autolinker.link(feature.properties['Toponim'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius</th>\
                        <td>' + (feature.properties['Radius'] !== null ? autolinker.link(feature.properties['Radius'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_10_BANK_5_0() {
            return {
                pane: 'pane_10_BANK_5',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,104,8,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_10_BANK_5');
        map.getPane('pane_10_BANK_5').style.zIndex = 405;
        map.getPane('pane_10_BANK_5').style['mix-blend-mode'] = 'normal';
        var layer_10_BANK_5 = new L.geoJson(json_10_BANK_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_10_BANK_5',
            layerName: 'layer_10_BANK_5',
            pane: 'pane_10_BANK_5',
            onEachFeature: pop_10_BANK_5,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_10_BANK_5_0(feature));
            },
        });
        bounds_group.addLayer(layer_10_BANK_5);
        map.addLayer(layer_10_BANK_5);
        function pop_9_PASAR_6(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Name</th>\
                        <td>' + (feature.properties['Name'] !== null ? autolinker.link(feature.properties['Name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jns_Bangun</th>\
                        <td>' + (feature.properties['Jns_Bangun'] !== null ? autolinker.link(feature.properties['Jns_Bangun'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Toponim</th>\
                        <td>' + (feature.properties['Toponim'] !== null ? autolinker.link(feature.properties['Toponim'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius</th>\
                        <td>' + (feature.properties['Radius'] !== null ? autolinker.link(feature.properties['Radius'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_9_PASAR_6_0() {
            return {
                pane: 'pane_9_PASAR_6',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(10,177,15,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_9_PASAR_6');
        map.getPane('pane_9_PASAR_6').style.zIndex = 406;
        map.getPane('pane_9_PASAR_6').style['mix-blend-mode'] = 'normal';
        var layer_9_PASAR_6 = new L.geoJson(json_9_PASAR_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_9_PASAR_6',
            layerName: 'layer_9_PASAR_6',
            pane: 'pane_9_PASAR_6',
            onEachFeature: pop_9_PASAR_6,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_9_PASAR_6_0(feature));
            },
        });
        bounds_group.addLayer(layer_9_PASAR_6);
        map.addLayer(layer_9_PASAR_6);
        function pop_8_KantorDesa_7(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Ket_</th>\
                        <td>' + (feature.properties['Ket_'] !== null ? autolinker.link(feature.properties['Ket_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_8_KantorDesa_7_0() {
            return {
                pane: 'pane_8_KantorDesa_7',
                shape: 'triangle',
                radius: 6.399999999999999,
                opacity: 1,
                color: 'rgba(61,128,53,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(190,11,255,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_8_KantorDesa_7');
        map.getPane('pane_8_KantorDesa_7').style.zIndex = 407;
        map.getPane('pane_8_KantorDesa_7').style['mix-blend-mode'] = 'normal';
        var layer_8_KantorDesa_7 = new L.geoJson(json_8_KantorDesa_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_8_KantorDesa_7',
            layerName: 'layer_8_KantorDesa_7',
            pane: 'pane_8_KantorDesa_7',
            onEachFeature: pop_8_KantorDesa_7,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_8_KantorDesa_7_0(feature));
            },
        });
        bounds_group.addLayer(layer_8_KantorDesa_7);
        map.addLayer(layer_8_KantorDesa_7);
        function pop_7_SMA_SMK_8(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_7_SMA_SMK_8_0() {
            return {
                pane: 'pane_7_SMA_SMK_8',
                shape: 'diamond',
                radius: 5.1999999999999975,
                opacity: 1,
                color: 'rgba(128,17,25,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(1,255,230,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_7_SMA_SMK_8');
        map.getPane('pane_7_SMA_SMK_8').style.zIndex = 408;
        map.getPane('pane_7_SMA_SMK_8').style['mix-blend-mode'] = 'normal';
        var layer_7_SMA_SMK_8 = new L.geoJson(json_7_SMA_SMK_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_7_SMA_SMK_8',
            layerName: 'layer_7_SMA_SMK_8',
            pane: 'pane_7_SMA_SMK_8',
            onEachFeature: pop_7_SMA_SMK_8,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_7_SMA_SMK_8_0(feature));
            },
        });
        bounds_group.addLayer(layer_7_SMA_SMK_8);
        map.addLayer(layer_7_SMA_SMK_8);
        function pop_6_SMP_9(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_6_SMP_9_0() {
            return {
                pane: 'pane_6_SMP_9',
                shape: 'diamond',
                radius: 5.1999999999999975,
                opacity: 1,
                color: 'rgba(128,17,25,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,30,42,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_6_SMP_9');
        map.getPane('pane_6_SMP_9').style.zIndex = 409;
        map.getPane('pane_6_SMP_9').style['mix-blend-mode'] = 'normal';
        var layer_6_SMP_9 = new L.geoJson(json_6_SMP_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_6_SMP_9',
            layerName: 'layer_6_SMP_9',
            pane: 'pane_6_SMP_9',
            onEachFeature: pop_6_SMP_9,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_6_SMP_9_0(feature));
            },
        });
        bounds_group.addLayer(layer_6_SMP_9);
        map.addLayer(layer_6_SMP_9);
        function pop_5_SD_10(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_5_SD_10_0() {
            return {
                pane: 'pane_5_SD_10',
                shape: 'diamond',
                radius: 5.1999999999999975,
                opacity: 1,
                color: 'rgba(50,87,128,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(72,123,182,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_5_SD_10');
        map.getPane('pane_5_SD_10').style.zIndex = 410;
        map.getPane('pane_5_SD_10').style['mix-blend-mode'] = 'normal';
        var layer_5_SD_10 = new L.geoJson(json_5_SD_10, {
            attribution: '',
            interactive: true,
            dataVar: 'json_5_SD_10',
            layerName: 'layer_5_SD_10',
            pane: 'pane_5_SD_10',
            onEachFeature: pop_5_SD_10,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_5_SD_10_0(feature));
            },
        });
        bounds_group.addLayer(layer_5_SD_10);
        map.addLayer(layer_5_SD_10);
        function pop_4_TK_11(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_4_TK_11_0() {
            return {
                pane: 'pane_4_TK_11',
                shape: 'diamond',
                radius: 5.1999999999999975,
                opacity: 1,
                color: 'rgba(61,128,53,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(84,176,74,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_4_TK_11');
        map.getPane('pane_4_TK_11').style.zIndex = 411;
        map.getPane('pane_4_TK_11').style['mix-blend-mode'] = 'normal';
        var layer_4_TK_11 = new L.geoJson(json_4_TK_11, {
            attribution: '',
            interactive: true,
            dataVar: 'json_4_TK_11',
            layerName: 'layer_4_TK_11',
            pane: 'pane_4_TK_11',
            onEachFeature: pop_4_TK_11,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_4_TK_11_0(feature));
            },
        });
        bounds_group.addLayer(layer_4_TK_11);
        map.addLayer(layer_4_TK_11);
        function pop_3_Kantor_Polisi_12(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_3_Kantor_Polisi_12_0() {
            return {
                pane: 'pane_3_Kantor_Polisi_12',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,0,30,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_3_Kantor_Polisi_12');
        map.getPane('pane_3_Kantor_Polisi_12').style.zIndex = 412;
        map.getPane('pane_3_Kantor_Polisi_12').style['mix-blend-mode'] = 'normal';
        var layer_3_Kantor_Polisi_12 = new L.geoJson(json_3_Kantor_Polisi_12, {
            attribution: '',
            interactive: true,
            dataVar: 'json_3_Kantor_Polisi_12',
            layerName: 'layer_3_Kantor_Polisi_12',
            pane: 'pane_3_Kantor_Polisi_12',
            onEachFeature: pop_3_Kantor_Polisi_12,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_3_Kantor_Polisi_12_0(feature));
            },
        });
        bounds_group.addLayer(layer_3_Kantor_Polisi_12);
        map.addLayer(layer_3_Kantor_Polisi_12);
        function pop_2_MUSHOLA_100_13(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_2_MUSHOLA_100_13_0() {
            return {
                pane: 'pane_2_MUSHOLA_100_13',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(250,229,0,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_2_MUSHOLA_100_13');
        map.getPane('pane_2_MUSHOLA_100_13').style.zIndex = 413;
        map.getPane('pane_2_MUSHOLA_100_13').style['mix-blend-mode'] = 'normal';
        var layer_2_MUSHOLA_100_13 = new L.geoJson(json_2_MUSHOLA_100_13, {
            attribution: '',
            interactive: true,
            dataVar: 'json_2_MUSHOLA_100_13',
            layerName: 'layer_2_MUSHOLA_100_13',
            pane: 'pane_2_MUSHOLA_100_13',
            onEachFeature: pop_2_MUSHOLA_100_13,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_2_MUSHOLA_100_13_0(feature));
            },
        });
        bounds_group.addLayer(layer_2_MUSHOLA_100_13);
        map.addLayer(layer_2_MUSHOLA_100_13);
        function pop_1_MASJID_14(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">OBJECTID</th>\
                        <td>' + (feature.properties['OBJECTID'] !== null ? autolinker.link(feature.properties['OBJECTID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis</th>\
                        <td>' + (feature.properties['Jenis'] !== null ? autolinker.link(feature.properties['Jenis'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Metadata</th>\
                        <td>' + (feature.properties['Metadata'] !== null ? autolinker.link(feature.properties['Metadata'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Klasifikas</th>\
                        <td>' + (feature.properties['Klasifikas'] !== null ? autolinker.link(feature.properties['Klasifikas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis_Utam</th>\
                        <td>' + (feature.properties['Jenis_Utam'] !== null ? autolinker.link(feature.properties['Jenis_Utam'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kegiatan</th>\
                        <td>' + (feature.properties['Kegiatan'] !== null ? autolinker.link(feature.properties['Kegiatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama_Objek</th>\
                        <td>' + (feature.properties['Nama_Objek'] !== null ? autolinker.link(feature.properties['Nama_Objek'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Radius__M_</th>\
                        <td>' + (feature.properties['Radius__M_'] !== null ? autolinker.link(feature.properties['Radius__M_'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Sarana</th>\
                        <td>' + (feature.properties['Sarana'] !== null ? autolinker.link(feature.properties['Sarana'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_1_MASJID_14_0() {
            return {
                pane: 'pane_1_MASJID_14',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(9,255,1,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_1_MASJID_14');
        map.getPane('pane_1_MASJID_14').style.zIndex = 414;
        map.getPane('pane_1_MASJID_14').style['mix-blend-mode'] = 'normal';
        var layer_1_MASJID_14 = new L.geoJson(json_1_MASJID_14, {
            attribution: '',
            interactive: true,
            dataVar: 'json_1_MASJID_14',
            layerName: 'layer_1_MASJID_14',
            pane: 'pane_1_MASJID_14',
            onEachFeature: pop_1_MASJID_14,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_1_MASJID_14_0(feature));
            },
        });
        bounds_group.addLayer(layer_1_MASJID_14);
        map.addLayer(layer_1_MASJID_14);
        setBounds();
        </script>
<?= $this->endSection() ?>