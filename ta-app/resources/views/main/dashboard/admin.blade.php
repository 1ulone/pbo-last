<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Koordinator Tugas Akhir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #1A237E; /* Biru Tua */
            margin-top: 20px;
        }

        .tab-buttons {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .tab-buttons button {
            background-color: #1A237E; /* Biru Tua */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .tab-buttons button:hover {
            background-color: #0D1A6A; /* Biru Lebih Gelap */
        }

        .tab {
            display: none;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            margin: 20px auto;
            width: 80%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .tab.active {
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #1A237E; /* Biru Tua */
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        td a {
            color: #1A237E; /* Biru Tua */
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input, select, button {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #1A237E; /* Biru Tua */
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0D1A6A; /* Biru Lebih Gelap */
        }
    </style>
    <script>
        function showTab(tabId) {
            var tabs = document.getElementsByClassName("tab");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }
            document.getElementById(tabId).classList.add("active");
        }

        function addLecturerRole() {
            var lecturerName = document.getElementById("lecturerName").value;
            var role = document.getElementById("role").value;

            var table = document.getElementById("lecturersTable");
            var newRow = table.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);

            cell1.innerHTML = lecturerName;
            cell2.innerHTML = role;
            cell3.innerHTML = '<a href="#">Hapus</a>';

            document.getElementById("lecturerName").value = "";
            document.getElementById("role").value = "Dosen Pembimbing";
        }

        function addSchedule() {
            var activityType = document.getElementById("activityType").value;
            var date = document.getElementById("date").value;

            var table = document.getElementById("schedulesTable");
            var newRow = table.insertRow();
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);

            cell1.innerHTML = table.rows.length; // ID
            cell2.innerHTML = activityType;
            cell3.innerHTML = date;
            cell4.innerHTML = '<a href="#">Lihat Detail</a>';

            document.getElementById("activityType").value = "Seminar Proposal";
            document.getElementById("date").value = "";
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
        <button onclick="showTab('tabLecturerRoles')">Penetapan Role Dosen</button>
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
        
        <!-- Form to Add Schedule -->
        <h4>Tambah Jadwal Seminar/Sidang</h4>
        <form onsubmit="event.preventDefault(); addSchedule();">
            <label for="activityType">Jenis Kegiatan:</label>
            <select id="activityType" required>
                <option value="Seminar Proposal">Seminar Proposal</option>
                <option value="Sidang Tugas Akhir">Sidang Tugas Akhir</option>
            </select><br><br>
            
            <label for="date">Tanggal:</label>
            <input type="date" id="date" required><br><br>
            
            <button type="submit">Tambah Jadwal</button>
        </form>
        
        <!-- Table to Display Schedule -->
        <h4>Daftar Jadwal Seminar dan Sidang</h4>
        <table id="schedulesTable">
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
                <td><a href="#">Lihat Detail</a></td>
            </tr>
        </table>
    </div>

    <!-- Tab 4: Pengelolaan Berita & Pengumuman -->
    <div id="tabNews" class="tab">
        <h3>Berita & Pengumuman Jurusan</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Judul Berita</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Pendaftaran Seminar Tugas Akhir</td>
                <td>2024-11-10</td>
                <td><a href="#">Lihat</a></td>
            </tr>
        </table>
    </div>

    <!-- Tab 5: Penetapan Role Dosen -->
    <div id="tabLecturerRoles" class="tab">
        <h3>Penetapan Role Dosen</h3>
        <form onsubmit="event.preventDefault(); addLecturerRole();">
            <label for="lecturerName">Nama Dosen:</label>
            <input type="text" id="lecturerName" required><br><br>
            
            <label for="role">Role:</label>
            <select id="role">
                <option value="Dosen Pembimbing">Dosen Pembimbing</option>
                <option value="Dosen Penguji">Dosen Penguji</option>
            </select><br><br>
            
            <button type="submit">Tambah Dosen</button>
        </form>
        
        <h4>Daftar Dosen Tugas Akhir</h4>
        <table id="lecturersTable">
            <tr>
                <th>Nama Dosen</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Dr. Budi</td>
                <td>Dosen Pembimbing</td>
                <td><a href="#">Hapus</a></td>
            </tr>
        </table>
    </div>

</body>
</html>
