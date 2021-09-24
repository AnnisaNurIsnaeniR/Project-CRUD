<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style> body{ background-color:#C8C6C6}</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
    <img src="1.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="tambah_siswa.php">TAMBAH SISWA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tambah_kelas.php">TAMBAH KELAS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_siswa.php">TAMPIL SISWA</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil_kelas.php">TAMPIL KELAS</a>
    </li>
  </ul>
</nav>
    <h3>Tampil kelas <a href="tambah_kelas.php" class="btn btn-success">Tambah kelas</a></h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA KELAS</th><th>KELOMPOK</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
$qry_kelas=mysqli_query($conn,"select * from kelas");
            $no=0;
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                $no++;?>
                <tr>
                <td><?=$no?></td>
                <td><?=$data_kelas['nama_kelas']?></td>
                <td><?=$data_kelas['kelompok']?></td>
                
            </tr>  
            <?php
            }
            ?>
            </tbody>
        </table>
        <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bun
dle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
        </body>
        </html>       
   