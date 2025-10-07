<!-- resources/views/subscription.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Langganan Bunga - Abyta Florist</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fefcfb;
            color: #4e342e;
        }
        header {
            background: linear-gradient(135deg, #8d6e63, #6d4c41);
            color: #fff;
            padding: 70px 0 50px 0;
            text-align: center;
        }
        header h1 {
            font-weight: 700;
            font-size: 2.5rem;
        }
        header p {
            color: #ffecb3;
            font-size: 1.1rem;
        }
        .section-title {
            color: #6d4c41;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .step-card {
            background: #fff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
        }
        .step-card:hover {
            transform: translateY(-5px);
        }
        .step-icon {
            font-size: 2rem;
            color: #8d6e63;
            margin-bottom: 10px;
        }
        .package-card {
            background-color: #fff8e1;
            border: none;
            border-radius: 10px;
            padding: 20px;
        }
        .cta-button {
            background-color: #795548;
            color: #fff;
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }
        .cta-button:hover {
            background-color: #5d4037;
            text-decoration: none;
        }
        footer {
            background: #6d4c41;
            color: #fff;
            text-align: center;
            padding: 25px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Program Langganan Bunga Segar</h1>
        <p>Hadirkan keindahan bunga segar di rumah atau kantor Anda setiap minggu</p>
    </header>

    <!-- Konten -->
    <div class="container py-5">

        <!-- Intro -->
        <div class="text-center mb-5">
            <h2 class="section-title">Kenapa Harus Langganan?</h2>
            <p class="text-muted">
                Dengan program langganan Abyta Florist, Anda akan selalu mendapatkan rangkaian bunga segar tanpa harus repot memesan ulang.
                Cocok untuk menghiasi rumah, kantor, atau sebagai hadiah rutin untuk orang tercinta.
            </p>
        </div>

        <!-- Langkah-langkah -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="step-card text-center">
                    <div class="step-icon"><i class="bi bi-box-seam"></i></div>
                    <h5 class="fw-bold">1. Pilih Paket Langganan</h5>
                    <p>Pilih frekuensi pengiriman — mingguan atau dua mingguan — serta ukuran buket yang Anda inginkan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card text-center">
                    <div class="step-icon"><i class="bi bi-calendar-check"></i></div>
                    <h5 class="fw-bold">2. Atur Jadwal Pengiriman</h5>
                    <p>Tentukan hari pengiriman pertama Anda, dan kami akan mengurus pengiriman selanjutnya secara otomatis.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="step-card text-center">
                    <div class="step-icon"><i class="bi bi-flower1"></i></div>
                    <h5 class="fw-bold">3. Nikmati Bunga Segar</h5>
                    <p>Terima rangkaian bunga segar dengan desain unik dan berbeda setiap pengiriman. Kejutan indah tiap minggu!</p>
                </div>
            </div>
        </div>

        <!-- Paket -->
        <div class="text-center mb-5">
            <h2 class="section-title">Pilihan Paket Langganan</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5 mb-4">
                <div class="card package-card shadow-sm text-center">
                    <h5 class="fw-bold mb-3">🌷 Paket Klasik</h5>
                    <p class="mb-2">Buket ukuran sedang, cocok untuk meja kerja atau ruang kecil.</p>
                    <p class="text-muted">Pengiriman setiap dua minggu</p>
                    <h4 class="fw-bold text-success mb-3">Rp 250.000 / bulan</h4>
                    <a href="#" class="cta-button">Langganan Sekarang</a>
                </div>
            </div>
            <div class="col-md-5 mb-4">
                <div class="card package-card shadow-sm text-center">
                    <h5 class="fw-bold mb-3">🌸 Paket Premium</h5>
                    <p class="mb-2">Buket besar dengan bunga premium pilihan, cocok untuk hadiah atau dekorasi utama.</p>
                    <p class="text-muted">Pengiriman setiap minggu</p>
                    <h4 class="fw-bold text-success mb-3">Rp 450.000 / bulan</h4>
                    <a href="#" class="cta-button">Langganan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Promo -->
        <div class="text-center mt-5">
            <h4 class="fw-bold mb-2 text-warning">🎉 Promo Spesial</h4>
            <p>Daftar sekarang dan nikmati <strong>diskon 10%</strong> untuk pengiriman pertama Anda!</p>
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
