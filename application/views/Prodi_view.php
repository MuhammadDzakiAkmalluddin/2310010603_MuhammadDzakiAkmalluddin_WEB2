<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Prodi - Muhammad Dzaki Akmalluddin (2310010603)</title>
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
      padding: 20px;
      max-width: 900px;
      margin: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 15px;
    }

    thead {
      background-color: #2c3e50;
      color: white;
    }

    th, td {
      padding: 12px;
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #e8f4ff;
      transition: 0.2s;
    }

    th {
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    a {
      text-decoration: none;
      color: #2980b9;
      padding: 5px 10px;
      border-radius: 5px;
      transition: 0.2s;
    }

    a:hover {
      background-color: #2980b9;
      color: white;
    }

    .tambah-btn {
      display: inline-block;
      background-color: #27ae60;
      color: white;
      padding: 8px 14px;
      border-radius: 6px;
      margin-bottom: 15px;
      text-decoration: none;
    }

    .tambah-btn:hover {
      background-color: #2ecc71;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Selamat Datang di Web <br> Muhammad Dzaki Akmalluddin 2310010603</h1>
    <h1>Data Program Studi</h1>

    <a href="<?= site_url('prodi/tambah') ?>" class="tambah-btn">+ Tambah Prodi</a>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Prodi</th>
          <th>Nama Prodi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($prodi)) : ?>
          <?php $no = 1; foreach ($prodi as $row): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row->kode_prodi; ?></td>
              <td><?= $row->nama_prodi; ?></td>
              <td>
                <a href="<?= site_url('prodi/edit/' . $row->id_prodi) ?>">Edit</a>
                <a href="<?= site_url('prodi/hapus/' . $row->id_prodi) ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4">Tidak ada data prodi.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
