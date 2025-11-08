<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa - Muhammad Dzaki Akmalluddin (2310010603)</title>
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

    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      padding: 25px;
      max-width: 600px;
      margin: auto;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: 600;
      margin-top: 10px;
      color: #333;
    }

    input[type="text"] {
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: 0.2s;
    }

    input[type="text"]:focus {
      border-color: #2980b9;
      box-shadow: 0 0 5px rgba(41,128,185,0.3);
      outline: none;
    }

    .btn-submit {
      background-color: #2980b9;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 10px 15px;
      font-size: 15px;
      margin-top: 20px;
      cursor: pointer;
      transition: 0.2s;
    }

    .btn-submit:hover {
      background-color: #3498db;
    }

    .btn-back {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #2980b9;
      font-weight: bold;
      text-align: center;
      transition: 0.2s;
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
  <div class="container">
    <h1>Edit Data Mahasiswa</h1>
    <form action="<?= site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
      <label for="nim">NIM</label>
      <input type="text" name="nim" id="nim" value="<?= $mahasiswa->NIM ?>" required>

      <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" name="nama_mhs" id="nama_mhs" value="<?= $mahasiswa->nama_mhs ?>" required>
       <label for="id_prodi">Program Studi</label>
    <select name="id_prodi" id="id_prodi" required>
        <option value="">Pilih Program Studi</option>
        <?php foreach ($prodi as $ps) : ?>
        <option value="<?= $ps->id_prodi ?>" <?= $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>>
            <?= $ps->nama_prodi ?>
        </option>
        <?php endforeach; ?>
    </select><br>


      <input type="submit" class="btn-submit" value="Perbaharui">
    </form>

    <a href="<?= site_url('mahasiswa') ?>" class="btn-back">← Kembali ke Daftar Mahasiswa</a>
  </div>

  <div class="footer">
    Dibuat oleh <span>Muhammad Dzaki Akmalluddin</span> - NPM 2310010603
  </div>
</body>
</html>
