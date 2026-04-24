<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Persona Verse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cinzel', serif;
            background: url(https://i.pinimg.com/originals/d0/50/6e/d0506e820f5a13d3951ce7d6b93dae10.gif) no-repeat center center fixed;
            background-size: cover;
            color: #f7f7f7;
        }

        .container-fluid {
            background: rgba(0, 0, 0, 0.8);
        }

        header {
            background: linear-gradient(135deg, #0f0f23 0%, #1e1e3f 50%, #2a2a5e 100%);
            background: url(https://i.pinimg.com/originals/97/65/72/97657295a2c10716b58191adf07d4345.gif) no-repeat center center;
            background-size: cover;
            border-bottom: 2px solid #efeeee;
            box-shadow: 0 0 20px rgba(11, 11, 11, 0.3);
        }

        header h1 {
            font-weight: 700;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: #ffffff;
        }

        header p {
            color: #b8c5d6;
        }

        .btn-primary {
            background: linear-gradient(45deg, #4a0e4e, #16213e);
            border: 1px solid #ff6b6b;
            color: #ffffff;
        }

        .btn-primary:hover {
            background: linear-gradient(45deg, #16213e, #4a0e4e);
            box-shadow: 0 0 10px rgba(255, 107, 107, 0.5);
        }

        .card {
            background: rgba(26, 26, 46, 0.9);
            border: 1px solid #4a0e4e;
            box-shadow: 0 0 15px rgba(74, 14, 78, 0.3);
        }

        .card.bg-primary {
            background: linear-gradient(135deg, #4a0e4e 0%, #16213e 100%);
            border: 1px solid #ff6b6b;
            box-shadow: 0 0 20px rgba(255, 107, 107, 0.4);
        }

        .form-control {
            background: rgba(0, 0, 0, 0.5);
            border: 1px solid #4a0e4e;
            color: #ffffff;
        }

        .form-control:focus {
            background: rgba(0, 0, 0, 0.7);
            border-color: #ff6b6b;
            box-shadow: 0 0 5px rgba(255, 107, 107, 0.5);
        }

        .form-label {
            color: #b8c5d6;
        }

        footer {
            background: linear-gradient(135deg, #0f0f23 0%, #1e1e3f 100%);
            border-top: 2px solid #ff6b6b;
            color: #b8c5d6;
        }

        footer a {
            color: #ff6b6b;
        }

        aside ul li a:hover {
            color: #ff6b6b !important;
            text-shadow: 0 0 5px rgba(255, 107, 107, 0.5);
        }

        /* Character image placeholder */
        .character-image {
            position: absolute;
            top: 20px;
            right: 40px;
            width: 150px;
            height: 200px;
            background-image: url('https://i.pinimg.com/736x/8a/91/80/8a9180cfa22f82ef15be68c4f9bc1a01.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            animation: swapCharacterImage 6s infinite step-start;
            border-radius: 16px;
            box-shadow: 0 0 40px rgba(251, 250, 255, 0.92);
            opacity: 2.5;
        }

        @keyframes swapCharacterImage {
            0%, 49.99% {
                background-image: url('https://i.pinimg.com/736x/8a/91/80/8a9180cfa22f82ef15be68c4f9bc1a01.jpg');
            }
            50%, 100% {
                background-image: url('https://i.pinimg.com/736x/87/76/bd/8776bd5ec781f938924889a9bab21f55.jpg');
            }
        }

        @media (max-width: 768px) {
            .character-image {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid min-vh-100 d-flex flex-column p-0">
        <header class="bg-dark text-white text-center py-5 position-relative">
            <div class="character-image"></div>
            <div class="container">
                <h1 class="display-4 mb-3">Explore Persona Verse</h1>
                <p class="lead mb-4">Find Your Characters.</p>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="input-group rounded overflow-hidden shadow-sm">
                            <input type="text" class="form-control" placeholder="Type Your Character Name!" aria-label="Search">
                            <button class="btn btn-primary" type="button">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container my-5 flex-grow-1">
            <div class="row g-4">
                <aside class="col-lg-3">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body">
                            <h3 class="card-title">Kategori Populer</h3>
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item bg-primary border-0 p-0"><a class="text-white text-decoration-none" href="#">Wisata Alam</a></li>
                                <li class="list-group-item bg-primary border-0 p-0"><a class="text-white text-decoration-none" href="#">Pusat Perbelanjaan</a></li>
                                <li class="list-group-item bg-primary border-0 p-0"><a class="text-white text-decoration-none" href="#">Kuliner Khas</a></li>
                                <li class="list-group-item bg-primary border-0 p-0"><a class="text-white text-decoration-none" href="#">Sejarah & Budaya</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>

                <section class="col-lg-9">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h2 class="h4 mb-4">Formulir Informasi</h2>
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomer HP</label>
                                    <input type="text" class="form-control" name="no_hp" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">TTL</label>
                                    <input type="text" class="form-control" name="ttl" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Tugas 1</label>
                                    <input type="text" class="form-control" name="tugas1" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Tugas 2</label>
                                    <input type="text" class="form-control" name="tugas2" required>
                                </div>
                                <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                            </form>

                            <?php if (isset($_POST['kirim'])): ?>
                                <div class="mt-4">
                                    <h5>Hasil Submit</h5>
                                    <p>Nama : <?php echo ($_POST['nama']) ? $_POST['nama'] : 'Nama tidak diisi'; ?></p>
                                    <p>Nomer HP : <?php echo ($_POST['no_hp']) ? $_POST['no_hp'] : 'Nomer HP tidak diisi'; ?></p>
                                    <p>TTL : <?php echo ($_POST['ttl']) ? $_POST['ttl'] : 'TTL tidak diisi'; ?></p>
                                    <p>Nilai Tugas 1 : <?php echo ($_POST['tugas1']) ? $_POST['tugas1'] : 'Nilai Tugas 1 tidak diisi'; ?></p>
                                    <p>Nilai Tugas 2 : <?php echo ($_POST['tugas2']) ? $_POST['tugas2'] : 'Nilai Tugas 2 tidak diisi'; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-dark text-light text-center py-4 mt-auto">
            &copy; 2026 IndoCity - Penjelajah Kota Indonesia Terbaik.
            <br>
            <a class="text-info text-decoration-none" href="#">Info Selengkapnya</a> |
            <a class="text-info text-decoration-none" href="#">Kontak Kami</a> |
            <a class="text-info text-decoration-none" href="#">Syarat & Ketentuan</a>
        </footer>
    </div>

</body>
</html>