<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tabel.css">
        <link rel="stylesheet" href="style/button.css">
        <title>Query 5</title>
    </head>
    <body>
    <center>
        <h3>Hasil Query 5</h3>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Belakang</th>
                    <th>Nama Depan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT p.first_name, p.last_name FROM person p JOIN rental t USING(driver_license)");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['last_name']; ?></td>
                        <td><?php echo $d['first_name']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <button>
            <a href="index.php">Kembali</a>
        </button>
    </center>
    </body>
</html>