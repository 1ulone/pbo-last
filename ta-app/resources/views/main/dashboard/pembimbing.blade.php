<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen Pembimbing</title>
    <style>
        /* Reset dasar untuk margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Style untuk container utama */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        /* Header dan judul */
        h1, h2 {
            margin-bottom: 20px;
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table thead {
            background-color: #4CAF50;
            color: white;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Tombol aksi */
        a, button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a:hover, button:hover {
            background-color: #45a049;
        }

        /* Style untuk log bimbingan dan riwayat mahasiswa */
        .log-bimbingan, .riwayat-mahasiswa {
            margin-top: 20px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            table, tbody, th, td, tr {
                display: block;
                width: 100%;
            }

            table thead {
                display: none;
            }

            table tbody tr {
                margin-bottom: 15px;
                padding: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }

            table tbody td {
                padding: 10px;
                text-align: right;
                position: relative;
            }

            table tbody td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                font-weight: bold;
                text-transform: uppercase;
                color: #333;
            }

            /* Header dan elemen kecil di mobile */
            h1, h2 {
                font-size: 1.5em;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <!-- Panel Utama -->
        <h1>Selamat datang</h1>
        <p>Total Mahasiswa Bimbingan Aktif: </p>
        <p>Bimbingan Menunggu Persetujuan: </p>
        <hr>

        <!-- Daftar Mahasiswa Bimbingan -->
        <h2>Daftar Mahasiswa Bimbingan</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Progres</th>
                    <th>Status Bimbingan</th>
                    <th>Tanggal Terakhir Bimbingan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td data-label="Nama Mahasiswa"></td>
                    <td data-label="NIM"></td>
                    <td data-label="Progres"></td>
                    <td data-label="Status Bimbingan"></td>
                    <td data-label="Tanggal Terakhir Bimbingan"></td>
                    <td data-label="Aksi">
                        <a href="">Lihat Detail</a>
                    </td>
                </tr>
                
            </tbody>
        </table>

        <!-- Log Bimbingan (contoh halaman detail) -->
        <div class="log-bimbingan">
            <h2>Log Bimbingan - </h2>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Aktivitas</th>
                        <th>Catatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td data-label="Tanggal"></td>
                        <td data-label="Aktivitas"></td>
                        <td data-label="Catatan"></td>
                        <td data-label="Status"></td>
                        <td data-label="Aksi">
                            <button>Setujui</button>
                            <button>Koreksi</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <button>Tambah Feedback</button>
        </div>

        <!-- Riwayat Mahasiswa -->
        <div class="riwayat-mahasiswa">
            <h2>Riwayat Mahasiswa Bimbingan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Status Tugas Akhir</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td data-label="Nama Mahasiswa"></td>
                        <td data-label="NIM"></td>
                        <td data-label="Status Tugas Akhir"></td>
                        <td data-label="Semester"></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
