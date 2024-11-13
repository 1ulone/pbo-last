<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Koordinator Tugas Akhir</title>
    <style>
        .tab { display: none; }
        .tab.active { display: block; }
        .tab-buttons button { margin: 5px; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
    </style>
    <script>
        function showTab(tabId) {
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }
            document.getElementById(tabId).classList.add("active");
        }
    </script>
</head>
<body>

    <h2>Dashboard Koordinator Tugas Akhir</h2>

    <div class="tab-buttons">
        <button onclick="showTab('tabProposals')">Proposal</button>
        <button onclick="showTab('tabSchedules')">Jadwal Seminar & Sidang</button>
        <button onclick="showTab('tabProgress')">Progres Mahasiswa</button>
        <button onclick="showTab('tabNews')">Berita & Pengumuman</button>
    </div>

    <!-- Tab 1: Pengelolaan Proposal -->
    <div id="tabProposals" class="tab active">
        <h3>Daftar Proposal Tugas Akhir</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul Proposal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Pengembangan Sistem Informasi Akademik</td>
                <td>Disetujui</td>
                <td><a href="#">Review</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Analisis Keamanan Jaringan Komputer</td>
                <td>Ditunda</td>
                <td><a href="#">Review</a></td>
            </tr>
        </table>
    </div>

    <!-- Tab 2: Penjadwalan Seminar dan Sidang -->
    <div id="tabSchedules" class="tab">
        <h3>Jadwal Seminar dan Sidang Tugas Akhir</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Jenis Kegiatan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Seminar Proposal</td>
                <td>2024-11-15</td>
                <td><a href="#">Lihat Detail</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Sidang Tugas Akhir</td>
                <td>2024-11-20</td>
                <td><a href="#">Lihat Detail</a></td>
            </tr>
        </table>
    </div>

    <!-- Tab 3: Pemantauan Progres Mahasiswa -->
    <div id="tabProgress" class="tab">
        <h3>Progres Tugas Akhir Mahasiswa</h3>
        <table>
            <tr>
                <th>ID Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Judul Tugas Akhir</th>
                <th>Status Bimbingan</th>
                <th>Status Seminar</th>
                <th>Status Sidang</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>101</td>
                <td>Asep Sudrajat</td>
                <td>Pengembangan Aplikasi Mobile</td>
                <td>Selesai</td>
                <td>Belum</td>
                <td>Belum</td>
                <td><a href="#">Detail</a></td>
            </tr>
            <tr>
                <td>102</td>
                <td>Rina Sari</td>
                <td>Optimasi Database</td>
                <td>Dalam Proses</td>
                <td>Sudah</td>
                <td>Belum</td>
                <td><a href="#">Detail</a></td>
            </tr>
        </table>
    </div>

    <!-- Tab 4: Pengelolaan Berita dan Pengumuman -->
    <div id="tabNews" class="tab">
        <h3>Berita dan Pengumuman</h3>
        <ul>
            <li>
                <strong>Pengumuman Jadwal Seminar</strong> - 2024-11-10<br>
                Seminar Proposal untuk mahasiswa Tugas Akhir akan dilaksanakan pada 2024-11-15.<br>
                <a href="#">Baca selengkapnya</a>
            </li>
            <li>
                <strong>Ujian Sidang Tugas Akhir</strong> - 2024-11-08<br>
                Ujian Sidang untuk mahasiswa yang telah selesai bimbingan akan dimulai pada 2024-11-20.<br>
                <a href="#">Baca selengkapnya</a>
            </li>
        </ul>
    </div>

</body>
</html>
