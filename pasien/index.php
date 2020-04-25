<?php
include '../aset/footer.php';
?>
<?php

include '../koneksi.php';

$sql = "SELECT * FROM pasien ORDER BY nama";

$res=mysqli_query($kon, $sql);

$pinjam=array();

while ($data=mysqli_fetch_assoc($res)) {
  $pinjam[]=$data;
}

include '../aset/header.php';
?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
        <div class="card-header">
          <h2 class="card-title"><img src="nurse.png" width="50px" height="50px">DATA PASIEN COVID-19   <button type="button" class="btn btn-outline-info"><center><h4><i><a href="tambah.php" class="badge badge-info">+Tambah Data</a></i></h4></center></i></button></a>
          </h2>
        </div>
        <div class="card-body">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Day</label>
            </div>
            <select class="custom-select " id="inputGroupSelect01">
              <option value="" selected>Choose</option>
              <option value="1">Yesterday</option>
              <option value="3">Three days ago</option>
              <option value="7">A week ago</option>
            </select>
            <form class="form-inline my-2 my-lg-0 ml-5">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="key">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
          <div class="ser">
            <table class="table table-dark">
              <thead>
                <center> <tr>
                  <th scope="col" width="50">No.</th>
                  <th scope="col" width="150">Nama Pasien</th>
                  <th scope="col" width="150">Suhu Tubuh</th>
                  <th scope="col" width="150">Status Pasien</th>
                  <th scope="col" width="250">Tanggal Terakhir Checkup</th>
                  <th scope="col" width="200">Aksi</th>
                </tr></center>
                
              </thead>
              <?php
              $no = 1;
              foreach ($pinjam as $p) { ?>

        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $p['nama'] ?></td>
          <td><?= $p['suhu'] ?></td>
          <td><?= $p['status'] ?></td>
          <td><?= $p['tgl'] ?></td>
                  <td>
                    <a href="detail.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-success">Detail</a>
                    <a href="edit.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-warning">Edit</a>
                    <a href="hapus.php?id_pasien=<?= $p['id_pasien'] ?>" class="badge badge-danger">Hapus</a>
                  </td>
                </tr>
              <?php
                $no++;
              }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="search.js"></script>
</div>

