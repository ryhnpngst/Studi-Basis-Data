<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tabel.css">
        <link rel="stylesheet" href="style/button.css">
        <title>Query 8</title>
    </head>
    <body>
    <center>
        <h3>Hasil Query 8</h3>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Rental ID</th>
                    <th>Lama Rental</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT rental_id, ABS(DATEDIFF(from_date, to_date)) 'Jangka Waktu' FROM rental ORDER BY 2 ASC LIMIT 1;");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['rental_id']; ?></td>
                        <td><?php echo $d['Jangka Waktu']; ?></td>
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