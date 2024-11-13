<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Akademik</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #343a40;
            color: #fff;
            min-height: 100vh;
            padding: 20px;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        .sidebar h5 {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .sidebar .nav-link {
            color: #ccc;
            font-weight: 500;
            margin-bottom: 10px;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #495057;
            color: #fff;
        }

        /* Content Styles */
        .content {
            margin-left: 260px;
            padding: 40px;
        }

        .content h2 {
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        /* Card Styles */
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-weight: bold;
            font-size: 1.1rem;
            background-color: #007bff;
            color: #fff;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body p {
            margin: 0;
            color: #555;
        }

        /* Button Styles */
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h5>Menu</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">Dashboard Bagian Akademik</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard Koordinator TA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../dashboard-m">Dashboard Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard Dosen Pembimbing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard Panel Penguji</a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container-fluid">
            <h2>Dashboard Mahasiswa</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Status Tugas Akhir</div>
                        <div class="card-body">
                            <p>Informasi status tugas akhir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Jadwal Seminar/Sidang</div>
                        <div class="card-body">
                            <p>Jadwal seminar dan sidang.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Feedback Dosen</div>
                        <div class="card-body">
                            <p>Feedback dari dosen pembimbing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">Upload Dokumen</div>
                        <div class="card-body text-center">
                            <button class="btn btn-primary">Unggah Dokumen</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
