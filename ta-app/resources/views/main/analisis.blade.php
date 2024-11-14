<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Data Sidang Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .search-box {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Analisis Data Sidang Mahasiswa</h2>

        <!-- Kotak input untuk pencarian nama mahasiswa -->
        <div class="search-box">
            <input type="text" id="searchInput" class="form-control" placeholder="Cari Nama Mahasiswa">
        </div>

        <!-- Tabel untuk menampilkan data -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                    <th>Feedback</th>
                    <th>Hasil Sidang</th>
                </tr>
            </thead>
            <tbody id="dataTabel">
                <!-- Data mahasiswa -->
                <tr>
                    <td>Nazwa al</td>
                    <td>90</td>
                    <td>Sangat Baik</td>
                    <td>Lulus</td>
                </tr>
                <tr>
                    <td>Najla</td>
                    <td>90</td>
                    <td>Sangat Baik</td>
                    <td>Lulus</td>
                </tr>
                <tr>
                    <td>luthfiyyah</td>
                    <td>90</td>
                    <td>Sangat Baik</td>
                    <td>Lulus</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('#dataTabel tr');

            tableRows.forEach(row => {
                const namaMahasiswa = row.cells[0].textContent.toLowerCase();
                row.style.display = namaMahasiswa.includes(searchValue) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
