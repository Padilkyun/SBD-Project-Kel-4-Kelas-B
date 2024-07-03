
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home">Copyin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cetak">Cetak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home">Buy</a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </div>
</nav>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Tambah/Edit Data
            </div>
            <div class="card-body">
                <?php
                include "koneksi.php";
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        echo $error;
                        ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php
                        echo $sukses;
                        ?>
                    </div>
                <?php
                }
                ?>
                
                <form action="koneksi.php" method="POST" id="simpan" name="simpan">
                    <div class="mb-3">
                        <label for="customer" class="form-label">Kostumer</label>
                        <input type="text" class="form-control" id="customer" name="customer" value="<?php echo $customer; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nm_barang" class="form-label">Barang</label>
                        <select class="form-control" name="nm_barang" id="nm_barang">
                            <option value="">-Pilih Barang-</option>
                            <option value="pena" <?php if ($nm_barang == "pena") echo "selected"; ?>>Pena</option>
                            <option value="pensil" <?php if ($nm_barang == "pensil") echo "selected"; ?>>Pensil</option>
                            <option value="buku" <?php if ($nm_barang == "buku") echo "selected"; ?>>Buku</option>
                            <option value="binder" <?php if ($nm_barang == "binder") echo "selected"; ?>>Binder</option>
                            <option value="tipe-x" <?php if ($nm_barang == "tipe-x") echo "selected"; ?>>Tipe-X</option>
                            <option value="penghapus" <?php if ($nm_barang == "penghapus") echo "selected"; ?>>Penghapus</option>
                            <option value="penggaris" <?php if ($nm_barang == "penggaris") echo "selected"; ?>>Penggaris</option>
                            <option value="spidol" <?php if ($nm_barang == "spidol") echo "selected"; ?>>Spidol</option>
                            <option value="folio" <?php if ($nm_barang == "folio") echo "selected"; ?>>Double Folio(Selembar)</option>
                            <option value="peruncing" <?php if ($nm_barang == "peruncing") echo "selected"; ?>>Peruncing</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="banyak" class="form-label">Banyak</label>
                        <input type="text" class="form-control" id="banyak" name="banyak" value="<?php echo $banyak; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nm_staff" class="form-label">Staff</label>
                        <select class="form-control" name="nm_staff" id="nm_staff">
                            <option value="">-Pilih Staff-</option>
                            <option value="fadhil" <?php if ($nm_staff == "fadhil") echo "selected"; ?>>Fadhil</option>
                            <option value="arjuna" <?php if ($nm_staff == "arjuna") echo "selected"; ?>>Arjuna</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>