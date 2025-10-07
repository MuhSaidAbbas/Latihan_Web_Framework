{{-- resources/views/about.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Abyta Florist</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        header {
            background-color: #212529;
            color: white;
            padding: 2rem 0;
        }
        header h1 {
            margin: 0;
            font-weight: bold;
        }
        footer {
            background-color: #212529;
            color: white;
            padding: 1.5rem 0;
            margin-top: 40px;
        }
        .main-content {
            background: white;
            border-radius: 0.5rem;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <header class="text-center">
        <div class="container">
            <h1>Tentang Abyta Florist</h1>
            <p class="lead mt-2">Merayakan segala apa yang ada dengan bunga harapan</p>
        </div>
    </header>

    {{-- Main Content --}}
    <main class="container my-5">
        <div class="main-content">
            <div class="mb-4">
                <h2 class="text-primary">Misi Kami</h2>
                <p>
                    Selamat datang di <strong>Abyta Florist</strong>! Kami hadir untuk membantu Anda
                    merayakan setiap momen istimewa dengan bunga yang penuh makna dan harapan.
                </p>
            </div>

            <div class="mb-4">
                <h2 class="text-primary">Visi Kami</h2>
                <p>
                    Menjadi florist pilihan utama yang menghadirkan kebahagiaan melalui keindahan bunga,
                    serta melayani dengan ketulusan di setiap kesempatan.
                </p>
            </div>

            <div>
                <h2 class="text-primary">Tim Kami</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Muh. Said Abbas</li>
                    <li class="list-group-item">Muh. Syafir</li>
                    <li class="list-group-item">Syaban Lahay</li>
                </ul>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') }} Abyta Florist.</p>
        </div>
    </footer>

   
</body>
</html>
