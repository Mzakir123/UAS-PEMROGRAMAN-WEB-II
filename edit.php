<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM pegawai WHERE id='$id'";
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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='halaman_admin.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='halaman_admin.php';</script>";
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
        <h1>Edit Pegawai <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Nim</label>
         <input type="text" name="nim" value="<?php echo $data['nim']; ?>" />
        </div>
        <div>
        <label for="jeniskelamin">Jenis Kelamin</label>
    <select id="jeniskelamin" name="jeniskelamin" value="<?php echo $data['jeniskelamin']; ?>" />
      <option value="Laki-Laki">Pria</option>
      <option value="Perempuan">Wanita</option>
    </select>
  </div>
  <div>
        <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat" rows="4" value="<?php echo $data['alamat']; ?>" /></textarea>
  </div>
        <div>
          <label>Jurusan</label>
         <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>" />
        </div>
        <div>
          <label>Fakultas</label>
         <input type="text" name="fakultas" value="<?php echo $data['fakultas']; ?>" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" value="<?php echo $data['email']; ?>" />
        </div>
        <div>
          <label for="posisi">Posisi</label>
    <select id="posisi" name="posisi" value="<?php echo $data['posisi']; ?>" />
      <option value="Unit_SDM">Unit_SDM</option>
      <option value="Unit_KOMINFO">Unit_Kominfo</option>
      <option value="Unit_Usaha">Unit_Usaha</option>
      <option value="Unit_Pengembangan">Unit_Pengembangan</option>
    </select>
        </div>
        <div>
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
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