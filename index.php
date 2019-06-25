<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_uho");

    if($koneksi){
        //echo "Alhamdulillah sudah terkoneksi";
    }else{
        echo "Aduh, gagal nih gan";
    }
?>

<h1>Input Data Mahasiswa</h1>

<form action="" method="post">
<table border="2">
    <tr>
        <td>Nama  </td>
        <td><input type="text" name="Nama"></td>
    </tr>
    <tr>
        <td>NIM  </td>
        <td><input type="text" name="NIM"></td>
    </tr>
    <tr>
        <td>Tempat Lahir  </td>
        <td><input type="text" name="Tempat_Lahir"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir  </td>
        <td><input type="date" name="Tanggal_Lahir"></td>
    </tr>
    <tr>
        <td>Jurusan  </td>
        <td><input type="text" name="Jurusan"></td>
    </tr>
    <tr>
        <td>Alamat  </td>
        <td><input type="text" name="Alamat"></td>
    </tr>
    <tr>
        <td>Nomor Telepon  </td>
        <td><input type="number" name="No_hp"></td>
    </tr>
</table>
    <input type="submit" name="registrasi" value="Registrasi">
</form>
<h1>Hasil Input Data Mahasiswa</h1>
<table border="2">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Nomor Telepon</th>
        <th>Aksi</th>
    </thead>
    <tbody>

        <?php
            $sqlView = "SELECT * FROM `table_mahasiswa`";
            $cekView = mysqli_query($koneksi, $sqlView);

            $nomor = 1;
            while($data = mysqli_fetch_array($cekView)){
        ?>
        <tr>
            <td><?=$nomor ?></td>
            <td><?=$data[1] ?></td>
            <td><?=$data[2] ?></td>
            <td><?=$data[3] ?></td>
            <td><?=$data[4] ?></td>
            <td><?=$data[5] ?></td>
            <td><?=$data[6] ?></td>
            <td><?=$data[7] ?></td>
            <td>
                <a href="index.php?id=<?=$data[0]?>">Delete</a>
            </td>
        </tr>
        <?php
            $nomor++; // ++ = nomor+1; 
            }
        ?>
    <!-- /end -->
    </tbody>
</table>

<?php
    if(isset($_POST['registrasi'])){
        $sqlInput = "INSERT INTO `table_mahasiswa` (`Nama`,`NIM`,`Tempat_Lahir`,`Tanggal_Lahir`,`Jurusan`,`Alamat`,`No_hp`)
                VALUES ('$_POST[Nama]', '$_POST[NIM]', '$_POST[Tempat_Lahir]', '$_POST[Tanggal_Lahir]', '$_POST[Jurusan]', '$_POST[Alamat]', '$_POST[No_hp]')";
        $cekInput = mysqli_query($koneksi, $sqlInput);
        if($cekInput){
            // echo "Datanya udah masuk gan";
            echo "<script> window.location = 'index.php' </script>";
        }else{
            echo "Aduh.. Gagal masuk datanya gan";
        }
    }

    if(isset($_GET['id'])){
        $sqlDelete = "DELETE FROM `table_mahasiswa` WHERE
        `table_mahasiswa`.`id` = '$_GET[id]'";
        $cekDelete = mysqli_query($koneksi, $sqlDelete);

        if($cekDelete){
            // echo "Datanya udah masuk gan";
            echo "<script> window.location = 'index.php' </script>";
        }else{
            echo "Aduh.. Gagal ngehapus datanya gan";
        }
    }
?>