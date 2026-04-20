<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Obat Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #f4fdf7, #eef8f1);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background: linear-gradient(90deg, #198754, #157347);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .brand-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0;
        }

        .brand-subtitle {
            font-size: 0.85rem;
            opacity: 0.85;
            margin-bottom: 0;
        }

        .main-card {
            border: none;
            border-radius: 18px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }

        .stats-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.06);
            transition: 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-3px);
        }

        .table-wrapper {
            border-radius: 14px;
            overflow: hidden;
        }

        .btn-custom {
            border-radius: 10px;
            padding: 8px 16px;
            font-weight: 600;
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px 12px;
        }

        .page-title {
            font-weight: 700;
            color: #198754;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark navbar-custom mb-4">
        <div class="container py-2">
            <div>
                <p class="brand-title text-white">Sistem Data Obat Apotek</p>
                <p class="brand-subtitle text-white">Manajemen data obat</p>
            </div>
        </div>
    </nav>

    <div class="container mb-5">
        @yield('content')
    </div>

</body>
</html>
