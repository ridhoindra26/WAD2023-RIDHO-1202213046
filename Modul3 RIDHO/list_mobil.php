<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Mobil</th>
                        <th>Brand Mobil</th>
                        <th>Warna Mobil</th>
                        <th>Tipe Mobil</th>
                        <th>Harga Mobil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $select = "SELECT * FROM showroom_mobil";
            $query = mysqli_query($conn,$select);
            
            if ($query) {
                while ($data = mysqli_fetch_assoc($query)) {
                    # code...
               
            
            
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
            <tr>
                <th scope="row"><?= $data['id']?></th>
                <td><?= $data['nama_mobil']?></td>
                <td><?= $data['brand_mobil']?></td>
                <td><?= $data['warna_mobil']?></td>
                <td><?= $data['tipe_mobil']?></td>
                <td><?= $data['harga_mobil']?></td>
                <td>
                    <a class="btn btn-outline-primary" href="form_detail_mobil.php?id=<?php echo $data['id'] ?>">
                    Lihat Detail
                </a>
                </td>
            </tr>
            <?php
                }
            }
            else {
                echo "<script>alert('Data Tidak Ditemukan')</script>";
            }
            ?>
            </tbody>
            </table>
        </div>
    </center>
</body>
</html>
