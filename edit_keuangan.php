<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM keuangan WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='keuangan.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='keuangan.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ahmad Fatchul Huda</title>
    <style type="text/css">
    * {
      font-family: "Trebuchet MS";
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      background-color: lightgrey;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      margin: 0;
    }
    h1 {
      text-transform: uppercase;
      color: #3498db;
    }
    button {
      background-color: blue;
      color: darkblue;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
      border: 0px;
      margin-top: 20px;
      cursor: pointer;
      width: 100px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
      color: #333;
    }
    input, select, textarea {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      background: #fff;
      border: 2px solid #3498db;
      outline-color: #3498db;
      margin-bottom: 10px;
    }
    div {
      width: 100%;
      height: auto;
      background: repeating-radial-gradient(circle, #f5f5f5, #f5f5f5 5px, #fff 5px, #fff 10px);
      padding: 20px;
      margin-top: 20px;
      border-radius: 10px;
    }
    .base {
      width: 500px;
      height: auto;
      padding: 40px;
      background: #ecf0f1;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
  </head>
  <body>
      <center>
        <h1>Edit Keuangan <?php echo $data['keterangan']; ?></h1>
      <center>
      <form method="POST" action="proses_editkeuangan.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Keterangan</label>
          <input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Januari</label>
         <input type="text" name="januari" value="<?php echo $data['januari']; ?>" />
        </div>
        <div>
          <label>Februari</label>
         <input type="text" name="februari" value="<?php echo $data['februari']; ?>" />
        </div>
        <div>
          <label>Maret</label>
         <input type="text" name="maret" value="<?php echo $data['maret']; ?>" />
        </div>
        <div>
          <label>April</label>
         <input type="text" name="april" value="<?php echo $data['april']; ?>" />
        </div>
        <div>
          <label>Mei</label>
         <input type="text" name="mei" value="<?php echo $data['mei']; ?>" />
        </div>
        <div>
          <label>Juni</label>
         <input type="text" name="juni" value="<?php echo $data['juni']; ?>" />
        </div>
        <div>
         <button type="submit">Simpan</button>
         <button type="submit"><a style="text-decoration: none" href="halaman_admin.php">
          Kembali</a></button>
        </div>
        </section>
      </form>
  </body>
</html>