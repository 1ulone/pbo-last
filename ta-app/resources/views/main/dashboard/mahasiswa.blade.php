+<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212; /* Dark background */
            color: #f4f4f4; /* Light text */
            margin: 0;
            padding: 0;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #1e1e1e; /* Darker background */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.6rem;
            color: #00bcd4; /* Light blue for branding */
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            background-color: #222; /* Dark card background */
        }

        /* Card Header */
        .card-header {
            background-color: #333; /* Slightly lighter than card */
            color: #00bcd4; /* Light blue for title */
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Table Styles */
        .table {
            background-color: #2c2c2c; /* Dark gray for table */
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
            font-size: 1rem;
            color: #f4f4f4; /* Light text color for all table data */
        }

        .table th {
            background-color: #444; /* Dark header */
            color: #ffffff; /* White text for header */
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #333; /* Slightly lighter for odd rows */
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #555; /* Light border */
        }

        .table td[colspan="8"] {
            color: #bbb; /* Slightly lighter gray for no data text */
            font-style: italic;
        }

        /* Button Styles */
        .btn-upload {
            background-color: #00bcd4; /* button upload dokumen */
            color: white;
            border: none;
            padding: 8px 20px;
            font-size: 1rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-upload:hover {
            background-color: #008c9e; /* Darker blue on hover */
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 0.9rem;
                padding: 8px;
            }

            .navbar-brand {
                font-size: 1.3rem;
            }
        }
        
        /* Spacing */
        .mt-5 {
            margin-top: 50px;
        }

        .mt-3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Dashboard Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <!-- Header Section -->
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 class="mb-0">Nazwa Al Hadiah Pahlevi</h4>
                    </div>
                    <div class="card-body">
                       <!-- Table -->
                        <table class="table table-striped table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Status TA</th>
                                    <th>Jadwal Seminar</th>
                                    <th>Jadwal Sidang</th>
                                    <th>Feedback Dosen</th>
                                    <th>Upload Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Data Mahasiswa (Misalnya 1 data mahasiswa) -->
                                <tr>
                                    <td>Disetujui</td>
                                    <td>10 November 2024</td>
                                    <td>15 November 2024</td>
                                    <td>Baik, lanjutkan</td>
                                    <td>
                                        <button class="btn-upload">Upload Dokumen</button>
                                    </td>
                                </tr>
                                
                             </tbody>
                        </table>
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