<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <h1>Formulir Data Mahasiswa</h1>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <a class="Tambah" href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID Mahasiswa</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Prodi</th>

        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr> 
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>">EDIT</a>
                    <a class="hapus" href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>