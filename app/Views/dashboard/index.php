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
        }).fitBounds([[-7.87374217364172,109.8685619971937],[-7.766232062632172,110.04127212254087]]);
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
        function pop_NilaiLahan_KecamatanNgombol_1(feature, layer) {
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
                        <th scope="row">ZONA_NI_ID</th>\
                        <td>' + (feature.properties['ZONA_NI_ID'] !== null ? autolinker.link(feature.properties['ZONA_NI_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">AREA</th>\
                        <td>' + (feature.properties['AREA'] !== null ? autolinker.link(feature.properties['AREA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">NOZONE</th>\
                        <td>' + (feature.properties['NOZONE'] !== null ? autolinker.link(feature.properties['NOZONE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">COUNT</th>\
                        <td>' + (feature.properties['COUNT'] !== null ? autolinker.link(feature.properties['COUNT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">SUM</th>\
                        <td>' + (feature.properties['SUM'] !== null ? autolinker.link(feature.properties['SUM'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">MEAN</th>\
                        <td>' + (feature.properties['MEAN'] !== null ? autolinker.link(feature.properties['MEAN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">MAX</th>\
                        <td>' + (feature.properties['MAX'] !== null ? autolinker.link(feature.properties['MAX'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">MIN</th>\
                        <td>' + (feature.properties['MIN'] !== null ? autolinker.link(feature.properties['MIN'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">RANGE</th>\
                        <td>' + (feature.properties['RANGE'] !== null ? autolinker.link(feature.properties['RANGE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">VARIANCE</th>\
                        <td>' + (feature.properties['VARIANCE'] !== null ? autolinker.link(feature.properties['VARIANCE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STDDEV</th>\
                        <td>' + (feature.properties['STDDEV'] !== null ? autolinker.link(feature.properties['STDDEV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">PSTDDEV</th>\
                        <td>' + (feature.properties['PSTDDEV'] !== null ? autolinker.link(feature.properties['PSTDDEV'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">RPBULAT</th>\
                        <td>' + (feature.properties['RPBULAT'] !== null ? autolinker.link(feature.properties['RPBULAT'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">LUAS</th>\
                        <td>' + (feature.properties['LUAS'] !== null ? autolinker.link(feature.properties['LUAS'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Harga</th>\
                        <td>' + (feature.properties['Harga'] !== null ? autolinker.link(feature.properties['Harga'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_NilaiLahan_KecamatanNgombol_1_0(feature) {
            switch(String(feature.properties['RPBULAT'])) {
                case 'Rp. 103.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 104.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(217,35,33,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 105.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(220,45,37,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 114.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(222,54,42,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 123.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(225,64,46,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 139.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,74,51,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 173.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,84,55,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 197.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(232,93,60,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 199.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,103,64,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 218.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(237,113,69,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 221.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,123,73,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 24.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,132,78,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 25.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(245,142,82,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 277.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(247,152,87,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 28.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(250,162,91,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 289.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(252,172,96,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 292.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,178,102,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 297.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,183,108,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 303.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,189,114,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 31.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,194,120,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 34.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,199,127,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 348.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,205,133,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 364.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,210,139,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 37.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,215,145,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 39.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,220,152,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 41.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,226,158,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 415.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,231,164,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 43.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,236,170,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 44.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,242,176,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 45.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,247,183,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 47.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,252,189,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 48.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(252,254,189,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 49.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,251,184,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 50.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(240,249,178,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 51.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(235,246,172,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 52.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(229,244,167,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 54.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(223,241,161,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 55.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(217,239,155,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 57.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(211,236,150,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 58.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(205,234,144,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 61.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(200,231,138,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 62.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(194,229,133,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 64.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(188,226,127,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 65.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(182,224,122,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 67.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(176,221,116,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 68.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(170,219,110,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 69.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(164,216,105,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 72.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(155,212,103,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 73.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(145,207,100,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 74.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(136,203,97,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 75.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(127,198,95,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 77.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(118,194,92,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 78.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(109,190,89,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 81.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(99,185,87,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 82.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(90,181,84,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 83.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(81,176,81,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 84.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(72,172,78,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 88.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(63,168,76,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 93.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(54,163,73,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 94.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(44,159,70,1.0)',
                interactive: true,
            }
                    break;
                case 'Rp. 97.000':
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,154,68,1.0)',
                interactive: true,
            }
                    break;
                default:
                    return {
                pane: 'pane_NilaiLahan_KecamatanNgombol_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,150,65,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_NilaiLahan_KecamatanNgombol_1');
        map.getPane('pane_NilaiLahan_KecamatanNgombol_1').style.zIndex = 401;
        map.getPane('pane_NilaiLahan_KecamatanNgombol_1').style['mix-blend-mode'] = 'normal';
        var layer_NilaiLahan_KecamatanNgombol_1 = new L.geoJson(json_NilaiLahan_KecamatanNgombol_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_NilaiLahan_KecamatanNgombol_1',
            layerName: 'layer_NilaiLahan_KecamatanNgombol_1',
            pane: 'pane_NilaiLahan_KecamatanNgombol_1',
            onEachFeature: pop_NilaiLahan_KecamatanNgombol_1,
            style: style_NilaiLahan_KecamatanNgombol_1_0,
        });
        bounds_group.addLayer(layer_NilaiLahan_KecamatanNgombol_1);
        map.addLayer(layer_NilaiLahan_KecamatanNgombol_1);
        function pop_BatasAdmin_2(feature, layer) {
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
                        <td colspan="2">' + (feature.properties['LEFT_FID'] !== null ? autolinker.link(feature.properties['LEFT_FID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['RIGHT_FID'] !== null ? autolinker.link(feature.properties['RIGHT_FID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_BatasAdmin_2_0() {
            return {
                pane: 'pane_BatasAdmin_2',
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
        map.createPane('pane_BatasAdmin_2');
        map.getPane('pane_BatasAdmin_2').style.zIndex = 402;
        map.getPane('pane_BatasAdmin_2').style['mix-blend-mode'] = 'normal';
        var layer_BatasAdmin_2 = new L.geoJson(json_BatasAdmin_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BatasAdmin_2',
            layerName: 'layer_BatasAdmin_2',
            pane: 'pane_BatasAdmin_2',
            onEachFeature: pop_BatasAdmin_2,
            style: style_BatasAdmin_2_0,
        });
        bounds_group.addLayer(layer_BatasAdmin_2);
        map.addLayer(layer_BatasAdmin_2);
        var baseMaps = {};
        L.control.layers(baseMaps,{'<img src="legend/BatasAdmin_2.png" /> Batas Admin': layer_BatasAdmin_2,'Nilai Lahan_Kecamatan Ngombol<br /><table><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1030000.png" /></td><td>Rp. 103.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1040001.png" /></td><td>Rp. 104.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1050002.png" /></td><td>Rp. 105.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1140003.png" /></td><td>Rp. 114.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1230004.png" /></td><td>Rp. 123.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1390005.png" /></td><td>Rp. 139.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1730006.png" /></td><td>Rp. 173.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1970007.png" /></td><td>Rp. 197.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp1990008.png" /></td><td>Rp. 199.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp2180009.png" /></td><td>Rp. 218.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp22100010.png" /></td><td>Rp. 221.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp2400011.png" /></td><td>Rp. 24.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp2500012.png" /></td><td>Rp. 25.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp27700013.png" /></td><td>Rp. 277.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp2800014.png" /></td><td>Rp. 28.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp28900015.png" /></td><td>Rp. 289.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp29200016.png" /></td><td>Rp. 292.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp29700017.png" /></td><td>Rp. 297.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp30300018.png" /></td><td>Rp. 303.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp3100019.png" /></td><td>Rp. 31.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp3400020.png" /></td><td>Rp. 34.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp34800021.png" /></td><td>Rp. 348.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp36400022.png" /></td><td>Rp. 364.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp3700023.png" /></td><td>Rp. 37.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp3900024.png" /></td><td>Rp. 39.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4100025.png" /></td><td>Rp. 41.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp41500026.png" /></td><td>Rp. 415.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4300027.png" /></td><td>Rp. 43.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4400028.png" /></td><td>Rp. 44.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4500029.png" /></td><td>Rp. 45.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4700030.png" /></td><td>Rp. 47.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4800031.png" /></td><td>Rp. 48.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp4900032.png" /></td><td>Rp. 49.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5000033.png" /></td><td>Rp. 50.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5100034.png" /></td><td>Rp. 51.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5200035.png" /></td><td>Rp. 52.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5400036.png" /></td><td>Rp. 54.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5500037.png" /></td><td>Rp. 55.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5700038.png" /></td><td>Rp. 57.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp5800039.png" /></td><td>Rp. 58.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6100040.png" /></td><td>Rp. 61.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6200041.png" /></td><td>Rp. 62.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6400042.png" /></td><td>Rp. 64.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6500043.png" /></td><td>Rp. 65.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6700044.png" /></td><td>Rp. 67.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6800045.png" /></td><td>Rp. 68.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp6900046.png" /></td><td>Rp. 69.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp7200047.png" /></td><td>Rp. 72.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp7300048.png" /></td><td>Rp. 73.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp7400049.png" /></td><td>Rp. 74.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp7500050.png" /></td><td>Rp. 75.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp7700051.png" /></td><td>Rp. 77.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp7800052.png" /></td><td>Rp. 78.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp8100053.png" /></td><td>Rp. 81.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp8200054.png" /></td><td>Rp. 82.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp8300055.png" /></td><td>Rp. 83.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp8400056.png" /></td><td>Rp. 84.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp8800057.png" /></td><td>Rp. 88.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp9300058.png" /></td><td>Rp. 93.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp9400059.png" /></td><td>Rp. 94.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_Rp9700060.png" /></td><td>Rp. 97.000</td></tr><tr><td style="text-align: center;"><img src="legend/NilaiLahan_KecamatanNgombol_1_61.png" /></td><td></td></tr></table>': layer_NilaiLahan_KecamatanNgombol_1,"Google Satelit": layer_GoogleSatelit_0,}).addTo(map);
        setBounds();
        </script>
<?= $this->endSection() ?>