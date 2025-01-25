<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <title>Peta Tematik</title>
    <style>
      
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

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(65vh - 50px);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 15px;
            overflow: hidden;
            background-color: white;
            margin: 25px;
            margin-top: 55px;
        }

        .illustration {
            flex: 1;
            background-image: url('image/Google_Maps.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            width: 300px;
            margin-left:50px;
        }

        .content {
            flex: 2;
            padding: 20px;
            text-align: left;
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

        <h2 style='text-align:center'>Sistem Informasi Geografis Wilayah Jawa Barat</h2>
        <div class="container">
            <div class="illustration"></div>
            <div class="content">
                <p>Website ini adalah sistem informasi geografis yang memberikan informasi detail mengenai berbagai aspek wilayah di Provinsi Jawa Barat, berdasarkan data dari kabupaten dan kota. Sistem ini dirancang untuk memudahkan masyarakat dalam mengakses informasi mengenai wilayah administrasi di Jawa Barat.
                    Informasi yang disajikan mencakup luas wilayah, jumlah penduduk, jumlah kepala keluarga, tingkat pendidikan, dan jumlah guru di setiap kabupaten dan kota. <br><br>
                    Luas wilayah adalah data penting yang menunjukkan seberapa besar suatu daerah, yang dapat digunakan untuk berbagai keperluan seperti perencanaan pembangunan dan pengelolaan sumber daya. 
                    Informasi jumlah penduduk memberikan gambaran mengenai kepadatan dan distribusi populasi, yang penting untuk perencanaan layanan publik dan infrastuktur.
                    Jumlah kepala keluarga adalah indikator yang sering digunakan dalam statistik demografi untuk memahami struktur rumah tangga di suatu daerah. <br><br>
                    Sementara itu, data mengenai tingkat pendidikan, khususnya jumlah lulusan S1, memberikan insight tentang kualitas sumber daya manusia dan potensi tenaga kerja yang terdidik di wilayah tersebut. 
                    Jumlah guru juga menjadi indikator penting dalam menilai kualitas pendidikan di setiap kabupaten dan kota.
                    Dengan informasi yang lengkap dan terstruktur, website ini menjadi sumber data yang handal bagi pemerintah, peneliti, dan masyarakat umum yang memerlukan informasi terkini mengenai Provinsi Jawa Barat.
                    Melalui tampilan yang user-friendly, pengguna dapat dengan mudah mengakses dan memahami berbagai data yang disajikan.
            </div>
        </div>
</body>
</html>