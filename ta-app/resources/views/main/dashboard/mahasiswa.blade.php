<!-- Dashboard Mahasiswa (NAJLA) -->
<?php
include '../app/templates/header.php';
?>
        <h3 class="center-align">Mahasiswa</h3>
        <div class="row"><a href="<?php echo BASE_URL; ?>dokter/tambah" class="btn">Tambah Dokter</a></div>

        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>nama mahasiswa</th>
                    <th>nama dosen</th>
                    <th>status TA</th>
                    <th>jadwal seminar</th>
                    <th>jadwal sidang</th>
                    <th>feedback dosen</th>
                    <th>upload dokumen</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo $row['id_mahasiswa']; ?></td>
                        <td><?php echo htmlspecialchars($row['nama_mahasiswa']); ?></td>
                        <td><?php echo htmlspecialchars($row['nama_dosen']); ?></td>
                        <td><?php echo htmlspecialchars($row['status TA']); ?></td>
                        <td><?php echo htmlspecialchars($row['jadawal seminar']); ?></td>
                        <td><?php echo htmlspecialchars($row['jadawal sidang']); ?></td>
                        <td><?php echo htmlspecialchars($row['feedback dosen']); ?></td>
                        <td>
                            <a href="<?php echo BASE_URL; ?>dokter/edit/<?php echo $row['id_mahasiswa']; ?>" class="btn">upload</a> <!-- button upload -->
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <?php


include '../app/templates/footer.php';
?>
