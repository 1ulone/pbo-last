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
        </ul>
    </div>

    <!-- Tab 5: Penetapan Role Dosen Pembimbing dan Penguji -->
    <div id="tabLecturerRoles" class="tab">
        <h3>Penetapan Role Dosen Pembimbing dan Penguji</h3>
        <form onsubmit="event.preventDefault(); addLecturerRole();">
            <label for="lecturerName">Nama Dosen:</label>
            <input type="text" id="lecturerName" required><br><br>
            
            <label for="role">Peran:</label>
            <select id="role" required>
                <option value="Dosen Pembimbing">Dosen Pembimbing</option>
                <option value="Dosen Penguji">Dosen Penguji</option>
            </select><br><br>
            
            <button type="submit">Tambah Dosen</button>
        </form>
        <table id="lecturersTable">
            <tr>
                <th>Nama Dosen</th>
                <th>Peran</th>
                <th>Aksi</th>
            </tr>
        </table>
    </div>

</body>
</html>
