<!-- resources/views/team.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Kami - Abyta Florist</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fefcfb;
            color: #4e342e;
        }
        header {
            background: linear-gradient(135deg, #8d6e63, #6d4c41);
            color: #fff;
            padding: 60px 0 40px 0;
            text-align: center;
            position: relative;
        }
        header h1 {
            font-weight: 700;
            font-size: 2.8rem;
        }
        header p {
            font-size: 1.1rem;
            color: #ffe0b2;
        }
        .card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-top: 20px;
            border: 4px solid #f3e5f5;
        }
        .card-title {
            color: #6d4c41;
            font-weight: 600;
        }
        footer {
            background: #6d4c41;
            color: #fff;
            text-align: center;
            padding: 25px 0;
            margin-top: 50px;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Tim Kami</h1>
        <p>Orang-orang hebat di balik setiap rangkaian bunga yang penuh makna</p>
    </header>

    <!-- Section Tim -->
    <div class="container py-5">
        <div class="row text-center mb-4">
            <div class="col-lg-8 mx-auto">
                <h2 class="fw-bold mb-3">Kenali Kami Lebih Dekat</h2>
                <p class="text-muted">
                    Di Abyta Florist, kami percaya bahwa setiap bunga bercerita.  
                    Dan di balik setiap cerita itu, ada tim yang penuh semangat, kreatif, dan berdedikasi.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Anggota 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center p-3">
                    <img src="https://via.placeholder.com/150" class="mx-auto d-block" alt="Andini Putri">
                    <div class="card-body">
                        <h5 class="card-title">Clarita Risma Saputri</h5>
                        <p class="text-muted mb-1">Founder,Lead AbytaFlorist, dan Mahasiswi UAG Prodi Manajemen Bisnis</p>
                        <p class="small">
                            Dengan kecintaannya pada seni dan bunga, Ceya menciptakan setiap buket dengan penuh perasaan dan makna untuk setiap pelanggan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Anggota 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center p-3">
                    <img src="https://via.placeholder.com/150" class="mx-auto d-block" alt="Bima Santoso">
                    <div class="card-body">
                        <h5 class="card-title">Muh. Syafir</h5>
                        <p class="text-muted mb-1">Marketing, DKV, Mahsiswa UAG Prodi Sistem Informasi</p>
                        <p class="small">
                            Selalu siap membantu pelanggan dengan senyum dan solusi terbaik agar setiap pengalaman belanja terasa menyenangkan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Anggota 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm text-center p-3">
                    <img src="https://via.placeholder.com/150" class="mx-auto d-block" alt="Citra Lestari">
                    <div class="card-body">
                        <h5 class="card-title">Muh. Said Abbas</h5>
                        <p class="text-muted mb-1">Operations, Product Owner, dan Mahasiswa UAG Prodi Ilmu Komputer</p>
                        <p class="small">
                            Menjaga kualitas setiap bunga agar tetap segar dan sempurna hingga sampai ke tangan Anda — karena setiap detail itu penting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Hak Cipta &copy; 2025 Abyta Florist. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
