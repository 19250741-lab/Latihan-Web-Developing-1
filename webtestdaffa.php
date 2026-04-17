<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndoCity - Informasi Kota</title>
    <style>
        /* Reset & Font Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header dengan Background & Search Bar di Tengah */
        header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                              url('https://images.unsplash.com/photo-1555881400-74d7acaacd8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px; /* Padding lebih besar untuk memberi ruang di tengah */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        header h1 {
            font-size: 64px;
            letter-spacing: 3px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.8);
        }

        /* Search Box dipindahkan ke tengah Header */
        .search-container {
            width: 100%;
            max-width: 600px; /* Lebar maksimal kolom pencarian */
            display: flex;
            gap: 0; /* Membuat input dan tombol menyatu */
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            border-radius: 30px;
            overflow: hidden; /* Agar sudut melengkung memotong input & button */
        }

        .search-container input {
            flex: 1;
            padding: 15px 25px;
            border: none;
            outline: none;
            font-size: 18px;
        }

        .search-container button {
            padding: 0 30px;
            background-color: #00bfff;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: 0.3s;
        }

        .search-container button:hover {
            background-color: #0080ff;
        }

        /* Bagian Utama Konten */
        .main-wrapper {
            display: flex;
            flex: 1;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        /* Sidebar Kiri (Kosong atau untuk navigasi tambahan) */
        aside {
            background-color: #f0f0f0;
            width: 25%;
            padding: 40px 20px;
            border-right: 1px solid #ddd;
        }

        aside h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #333;
        }

        aside ul {
            list-style: none;
        }

        aside ul li a {
            text-decoration: none;
            color: #00569c;
            display: block;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        /* Konten Utama Kanan */
        main {
            background-color: #fff;
            width: 75%;
            padding: 40px 60px;
        }

        main h2 {
            font-size: 32px;
            color: #222;
            margin-bottom: 20px;
        }

        main p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 25px;
            color: #444;
            text-align: justify;
        }

        /* Footer Info Selengkapnya */
        footer a {
            color: #00bfff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsif Layar Kecil */
        @media (max-width: 768px) {
            header h1 { font-size: 40px; }
            .main-wrapper { flex-direction: column; }
            aside, main { width: 100%; border: none; }
            main { padding: 30px; }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header dengan Search Bar di Tengah -->
        <header>
            <h1>IndoCity</h1>
            <div class="search-container">
                <input type="text" placeholder="Mau cari kota apa hari ini?">
                <button>Cari</button>
            </div>
        </header>

        <div class="main-wrapper">
            <!-- Sidebar -->
            <aside>
                <h3>Kategori Populer</h3>
                <ul>
                    <li><a href="#">Wisata Alam</a></li>
                    <li><a href="#">Pusat Perbelanjaan</a></li>
                    <li><a href="#">Kuliner Khas</a></li>
                    <li><a href="#">Sejarah & Budaya</a></li>
                </ul>
            </aside>

            <!-- Isi Konten -->
            <main>
                <h1><i><u>Jakarta</u></i></h1>
                Nama: <input type="text" name="nama"></br>
                Nomor HP: <input type="number" name="no_hp"></br>
                TTL: <input type="date" name="ttl" > </br>
                
                Jenis Kelamin:<input type="radio" name="jk" value="laki-laki"
                input type="radio" name="jk" value="perempuan">
            </main>
        </div>

        <!-- Footer -->
        <footer>
        </footer>
    </div>

</body>
</html>