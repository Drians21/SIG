<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <title>Peta Tematik</title>
    <style>
        #map { 
            height: 500px; 
            width: 1100px;
            border:2px solid black;
            margin-top: 65px;
            margin-left: 180px;
            border-radius:5px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#dfe5e6;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #575757;
        }
    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <nav>
            <ul>
                <li><a href="{{ route('welcome')}}">Home</a></li>
                <li><a href="{{ route('peta_tematik') }}">Provinsi</a></li>
                <li><a href="{{ route('luas_wilayah') }}">Luas Wilayah</a></li>
                <li><a href="{{ route('jumlah_penduduk') }}">Jumlah Penduduk</a></li>
                <li><a href="{{ route('jumlah_kepala_keluarga') }}">Jumlah Kepala Keluarga</a></li>
                <li><a href="{{ route('jumlah_pendidikan_s1') }}">Jumlah Pendidikan S1</a></li>
                <li><a href="{{ route('jumlah_guru') }}">Jumlah Guru</a></li>
            </ul>
        </nav>
        <div>
            <h2 style='text-align: center'>Luas Wilayah Kabupaten/Kota Jawa Barat</h2>
        </div>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-6.8597099,107.3725057], 8.5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 18,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            let luas_jabars = @json($luas_jabar);
            console.log(luas_jabars);

            function createCircleMarker(luas_jabar) {
                var circle = L.circleMarker([luas_jabar.latitude, luas_jabar.longitude], {
                    radius: 18, // Ukuran radius dari circle
                    fillColor: "#ff7800", // Warna isi dari circle
                    color: "#000", // Warna garis pinggir dari circle
                    weight: 1, // Tebal garis pinggir
                    opacity: 1, // Opasitas dari garis pinggir
                    fillOpacity: 0.5 // Opasitas dari isi circle
                }).addTo(map);

                // Create table content for the popup
                var popupContent = '<table>' +
                    '<tr><th>Kabupaten/Kota</th><td>:</td><td>' + luas_jabar.name + '</td></tr>' +
                    '<tr><th>Luas Wilayah </th><td>:</td><td>' + luas_jabar.luas_wilayah + '</td></tr>' +
                    '</table>';

                circle.bindPopup(popupContent);

                circle.on('mouseover', function (e) {
                    this.openPopup();
                });

                circle.on('mouseout', function (e) {
                    this.closePopup();
                });
            }

            // Apply the function to each data point
            luas_jabars.forEach(createCircleMarker);

        </script>
    </body>
</html>