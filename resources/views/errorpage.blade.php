{{-- resources/views/errorpage.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! Halaman Tidak Ditemukan - Abyta Florist</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-container {
            background: #fff;
            padding: 3rem;
            border-radius: 0.75rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
        }
        .error-code {
            font-size: 6rem;
            font-weight: 800;
            color: #0d6efd;
            line-height: 1;
        }
        .error-message {
            font-size: 1.5rem;
            color: #212529;
            margin-bottom: 1rem;
        }
        .btn-home {
            background-color: #0d6efd;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            border-radius: 0.5rem;
            color: #fff;
            transition: 0.3s;
        }
        .btn-home:hover {
            background-color: #0b5ed7;
        }
        footer {
            position: absolute;
            bottom: 15px;
            width: 100%;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-message">Oops! Halaman Tidak Ditemukan</h1>
        <p class="mb-4">
            Sepertinya halaman yang Anda cari tidak tersedia atau sudah dipindahkan.<br>
            Jangan khawatir, Anda bisa kembali ke halaman utama kami.
        </p>
        <a href="{{ url('/') }}" class="btn-home">Kembali ke Beranda</a>
    </div>

    <footer>
        &copy; {{ date('Y') }} Abyta Florist. Semua Hak Cipta Dilindungi.
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
