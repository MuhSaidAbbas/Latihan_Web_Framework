{{-- resources/views/story.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita di Balik Buket Bunga Kami - Abyta Florist</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.7;
        }
        header {
            background-color: #212529;
            color: #fff;
            padding: 2rem 0;
            border-bottom: 4px solid #495057;
        }
        header h1 {
            font-weight: bold;
            margin: 0;
        }
        .main-content {
            background: #fff;
            border-radius: 0.5rem;
            padding: 2rem;
            margin-top: 2rem;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }
        .main-content h2 {
            color: #0d6efd;
            margin-top: 1.5rem;
        }
        .main-content img {
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }
        footer {
            background-color: #212529;
            color: #fff;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <header class="text-center">
        <div class="container">
            <h1>Cerita di Balik Buket Bunga Kami</h1>
            <p class="lead mt-2">Setiap bunga punya kisah, setiap buket punya makna</p>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container my-5">
        <div class="main-content">
            <img src="https://via.placeholder.com/800x400.png?text=Toko+Bunga+Kami" alt="Toko Buket Bunga" class="img-fluid">

            <h2>Cinta Kami Pada Bunga</h2>
            <p>
                Selamat datang di <strong>Abyta Florist</strong>! Kami memulai perjalanan ini dari kecintaan
                terhadap keindahan dan keajaiban bunga. Bagi kami, bunga bukan hanya sekadar tanaman —
                tetapi bahasa emosi, simbol kasih, dan wujud perayaan kehidupan. Setiap buket kami rangkai
                dengan hati, perhatian, dan makna.
            </p>
            
            <h2>Mengapa Memilih Kami?</h2>
            <p>
                Kami percaya bahwa setiap momen istimewa layak dirayakan dengan bunga yang sempurna.
                Karena itu, kami hanya menggunakan bunga-bunga terbaik yang dipetik langsung dari
                petani lokal terpercaya. Tim perangkai kami siap menciptakan buket yang indah untuk
                segala acara — mulai dari ulang tahun, wisuda, pernikahan, hingga bela sungkawa.
            </p>

            <h2>Komitmen Kualitas</h2>
            <p>
                Kualitas adalah prioritas utama kami. Kami memastikan setiap tangkai dirawat dengan baik
                agar tetap segar dan memukau saat tiba di tangan Anda. Kepuasan pelanggan adalah kebahagiaan kami,
                dan kami berkomitmen memberikan pelayanan terbaik di setiap pesanan.
            </p>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Abyta Florist. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
