<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tabel.css">
        <link rel="stylesheet" href="style/button.css">
        <title>Query 10</title>
    </head>
    <body>
    <center>
        <h3>Hasil Query 10</h3>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Car ID</th>
                    <th>Pembuat</th>
                    <th>Model</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT car_id, make, model FROM car WHERE NOT EXISTS (SELECT car_id FROM rental WHERE car.car_id=rental.car_id)");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['car_id']; ?></td>
                        <td><?php echo $d['make']; ?></td>
                        <td><?php echo $d['model']; ?></td>
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