<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mahasiswa - Muhammad Dzaki Akmalluddin (2310010603)</title>
  <style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #222;
      margin-bottom: 30px;
    }

    .form-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 25px;
      max-width: 500px;
      margin: auto;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      margin-bottom: 15px;
      transition: 0.2s;
    }

    input[type="text"]:focus {
      outline: none;
      border-color: #2980b9;
      box-shadow: 0 0 5px rgba(41, 128, 185, 0.3);
    }

    .btn-submit {
      background-color: #27ae60;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 15px;
      transition: 0.2s;
      width: 100%;
    }

    .btn-submit:hover {
      background-color: #2ecc71;
    }

    .btn-back {
      display: inline-block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
      color: #2980b9;
      font-weight: bold;
      transition: 0.2s;
      width: 100%;
    }

    .btn-back:hover {
      color: #1a5276;
    }

    .footer {
      text-align: center;
      margin-top: 30px;
      font-size: 14px;
      color: #777;
    }

    .footer span {
      color: #2980b9;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <h1>Form Tambah Mahasiswa</h1>

  <div class="form-container">
    <form action="<?= site_url('mahasiswa/simpan') ?>" method="post">
      <label for="nim">NIM</label>
      <input type="text" name="nim" id="nim" placeholder="Masukkan NIM..." required>

      <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" name="nama_mhs" id="nama_mhs" placeholder="Masukkan Nama Mahasiswa..." required>
      <label for="nim">NIM</label>
      <input type="text" name="nim" id="nim"><br>
      <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" name="nama_mhs" id="nama_mhs"><br>
      <label for="id_prodi">Program Studi</label>
      <select name="id_prodi" id="id_prodi" required>
       <option value="">Pilih Program Studi</option>
       
        <?php foreach ($prodi as $ps) : ?>
        <option value="<?= $ps->id_prodi ?>"><?= $ps->nama_prodi ?></option>
        <?php endforeach; ?>
    </select><br>


      <input type="submit" class="btn-submit" value="Simpan Data">
    </form>

    <a href="<?= site_url('mahasiswa') ?>" class="btn-back">← Kembali ke Daftar Mahasiswa</a>
  </div>

  <div class="footer">
    Dibuat oleh <span>Muhammad Dzaki Akmalluddin</span> - NPM 2310010603
  </div>
</body>
</html>
