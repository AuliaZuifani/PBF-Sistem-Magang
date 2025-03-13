<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Manajemen Magang')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 318px;
            height: 100vh;
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            color: white !important;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #ff9800 !important;
        }

        .sidebar-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            border-bottom: 2px solid white;
            margin-bottom: 15px;
        }

        .content {
            margin-left: 330px; /* Geser isi ke kanan biar tidak tertutup sidebar */
            padding: 20px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="sidebar">
        <div class="sidebar-title">Magang Yuk - PNC</div>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('perusahaan.index') }}" class="nav-link custom-nav-link">
                    <i class="bi bi-buildings me-2"></i> Data Perusahaan
                </a>
            </li>
            <li>
                <a href="{{ route('mahasiswa.index') }}" class="nav-link custom-nav-link">
                    <i class="bi bi-people me-2"></i> Data Mahasiswa
                </a>
            </li>
            <li>
                <a href="{{ route('pembimbing.index') }}" class="nav-link custom-nav-link">
                    <i class="bi bi-person-workspace me-2"></i> Data Pembimbing
                </a>
            </li>
            <li>
                <a href="#" class="nav-link custom-nav-link">
                    <i class="bi bi-clipboard-check me-2"></i> Magang
                </a>
            </li>
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
