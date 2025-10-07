{{-- resources/views/contact_us.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Abyta Florist</title>

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
        footer {
            background-color: #212529;
            color: #fff;
            padding: 1.5rem 0;
            margin-top: 3rem;
        }
        .contact-info i {
            color: #0d6efd;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <header class="text-center">
        <div class="container">
            <h1>Hubungi Abyta Florist</h1>
            <p class="lead mt-2">Kami siap membantu Anda merayakan setiap momen dengan bunga terbaik</p>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container my-5">
        <div class="main-content">
            <div class="row">
                {{-- Informasi Kontak --}}
                <div class="col-md-6 mb-4">
                    <h2 class="text-primary">Informasi Kontak</h2>
                    <p>Silakan hubungi kami untuk pertanyaan, pemesanan, atau konsultasi mengenai pilihan bunga yang Anda inginkan.</p>

                    <ul class="list-unstyled contact-info">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill"></i><strong>Alamat:</strong> Jl. Mawar No. 45, Makassar, Sulawesi Selatan</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill"></i><strong>Telepon:</strong> (0411) 123-456</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill"></i><strong>Email:</strong> info@abytaflorist.com</li>
                        <li class="mb-2"><i class="bi bi-clock-fill"></i><strong>Jam Operasional:</strong> Senin – Sabtu, 08.00 – 18.00 WITA</li>
                    </ul>
                </div>

                {{-- Formulir Kontak --}}
                <div class="col-md-6">
                    <h2 class="text-primary">Kirim Pesan</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" placeholder="nama@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-4">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Abyta Florist. Semua Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    {{-- Bootstrap JS + Icons --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
