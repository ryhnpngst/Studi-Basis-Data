<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tabel.css">
        <link rel="stylesheet" href="style/button.css">
        <title>Query 9</title>
    </head>
    <body>
    <center>
        <h3>Hasil Query 9</h3>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Rental ID</th>
                    <th>Baya Sewa Terendah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT rental_id,SUM(count + drop_off_charge) 'Total Biaya' FROM rental_rate,promotion_rate,dropOff_charge WHERE rental_rate.duration=promotion_rate.duration AND rental_rate.class_code=promotion_rate.class_code AND promotion_rate.class_code = dropOff_charge.class_code GROUP BY rental_id ORDER BY 2 ASC LIMIT 1");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['rental_id']; ?></td>
                        <td><?php echo $d['Total Biaya']; ?></td>
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