<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Program Studi</title>
  <style>
    body { font-family: Segoe UI, sans-serif; background: #f4f6f8; padding: 20px; }
    .form-box { background: #fff; padding: 20px; border-radius: 10px; max-width: 600px; margin: auto; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    h2 { text-align: center; margin-bottom: 20px; }
    label { display: block; margin-top: 10px; font-weight: bold; }
    input { width: 100%; padding: 8px; margin-top: 5px; border-radius: 6px; border: 1px solid #ccc; }
    button { margin-top: 15px; padding: 10px 20px; border: none; background: #27ae60; color: white; border-radius: 6px; cursor: pointer; }
    button:hover { background: #2ecc71; }
    a { text-decoration: none; color: #2980b9; display: inline-block; margin-top: 15px; }
  </style>
</head>
<body>
  <div class="form-box">
    <h1>Selamat Datang di Web <br> Muhammad Dzaki Akmalluddin 2310010603</h1>
    <h2>Tambah Program Studi</h2>
    <form action="<?= site_url('prodi/simpan') ?>" method="post">
      <label>Kode Prodi</label>
      <input type="text" name="kode_prodi" required>

      <label>Nama Prodi</label>
      <input type="text" name="nama_prodi" required>

      <button type="submit">Simpan</button>
    </form>
    <a href="<?= site_url('prodi') ?>">Kembali</a>
  </div>
</body>
</html>
