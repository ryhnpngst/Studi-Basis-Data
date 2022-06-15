<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tabel.css">
        <link rel="stylesheet" href="style/button.css">
        <title>Query 7</title>
    </head>
    <body>
    <center>
        <h3>Hasil Query 7</h3>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Presiden</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT p.first_name, p.last_name FROM employee e JOIN person p USING(driver_license) WHERE e.working_location='Hamilton' && e.is_president ='Y'");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['first_name'] . " " . $d['last_name']; ?></td>
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