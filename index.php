<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style">
   <title>Tugas 5 Sistem Basis Data</title>
</head>
<body>
   <div class="container">
      <center><h1>Sistem Informasi Klinik_312010068</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM obat';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Obat</h3>
         <table>
          <tr>
            <th>id_obat</th>
            <th>nama_obat</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_obat'];?></td>
               <td><?= $row['nama_obat'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM resep_obat';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel Resep_obat</h3>
         <table>
          <tr>
            <th>id_resep</th>
            <th>id_berobat</th>
            <th>id_obat</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_resep'];?></td>
               <td><?= $row['id_berobat'];?></td>
               <td><?= $row['id_obat'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM pasien';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel Pasien</h3>
         <table>
          <tr>
            <th>id_pasien</th>
            <th>nama_pasien</th>
            <th>jenis_kelamin</th>
            <th>umur</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pasien'];?></td>
               <td><?= $row['nama_pasien'];?></td>
               <td><?= $row['jenis_kelamin'];?></td>
               <td><?= $row['umur'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM berobat';
         $result = mysqli_query($conn, $sql4)
         ?>
         <h3>Tabel berobat</h3>
         <table>
          <tr>
            <th>id_berobat</th>
            <th>id_pasien</th>
            <th>id_dokter</th>
            <th>tgl_berobat</th>
            <th>Keluhan_pasien</th>
            <th>hasil_diagnosa</th>
            <th>penatalaksanaan</th>
         </tr>
         <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_berobat'];?></td>
               <td><?= $row['id_pasien'];?></td>
               <td><?= $row['id_dokter'];?></td>
               <td><?= $row['tgl_berobat'];?></td>
               <td><?= $row['keluhan_pasien'];?></td>
               <td><?= $row['hasil_diagnosa'];?></td>
               <td><?= $row['penatalaksanaan'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql5 = 'SELECT * FROM dokter';
         $result = mysqli_query($conn, $sql5);
         ?>
         <h3>Tabel dokter</h3>
         <table>
          <tr>
            <th>id_dokter</th>
            <th>nama_dokter</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_dokter'];?></td>
               <td><?= $row['nama_dokter'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
            <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql6 = 'SELECT * FROM user';
         $result = mysqli_query($conn, $sql6);
         ?>
         <h3>Tabel user</h3>
         <table>
          <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>nama_lengkap</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id'];?></td>
               <td><?= $row['username'];?></td>
               <td><?= $row['password'];?></td>
               <td><?= $row['nama_lengkap'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>   
      </div>
   </div>
</body>
</html>