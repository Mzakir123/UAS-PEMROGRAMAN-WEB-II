<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?><!DOCTYPE html>
<html>
<head>
<title>Ahmad Fatchul Huda</title>
<link href="gambar/uin.jpg" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="style2.css">
<style>
    .garistepi{border: 7px ridge gray;}
    * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: red;
      }
    table {
      border: solid 1px black;
      border-collapse: collapse;
      border-spacing: 0;
      width: 90%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

</style>
</head>
    <table>
      <thead>
        <tr>
          <th colspan="10" style=background-color:blue width="00"><center>
<font size=3 font=calibri color=white> Data Pegawai </th>
        </tr>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Jurusan</th>
          <th>Fakultas</th>
          <th>Email</th>
          <th>Posisi</th>
          <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM pegawai ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['jeniskelamin']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['jurusan']; ?></td>
          <td><?php echo $row['fakultas']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['posisi']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 120px;"></td>
      </tr>   
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
     <script>
    window.print();
    </script>
</body>

</html>