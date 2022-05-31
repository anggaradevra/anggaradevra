<?php

include "connect.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    

    <body>
        <header>
            <h1>Edit Identitas</h1>
        </header>

        <form class="form" action="proses-edit.php" method="POST">

            <fieldset>
                <input type="hidden" name="id_mahasiswa" value="<?php echo $d['id_mahasiswa']; ?>" />
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $d['nama']; ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea type="text" name="alamat"><?php echo $d['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="telp">Telp: </label>
                    <textarea type="text" name="telp"><?php echo $d['telp'] ?></textarea>
                </p>
                <p>
                    <label for="prodi">Prodi: </label>
                    <input type="text" name="prodi" placeholder="prodi" value="<?php echo $d['prodi'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>