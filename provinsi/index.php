
<?php

include '../koneksi.php';

$sql = "SELECT * FROM provinsi ORDER BY provinsi";

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
          <h2 class="card-title"><img src="target.png" width="50px" height="50px">DATA PROVINSI DENGAN KASUS TERBANYAK<img src="target.png" width="50px" height="50px"></h2>
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
                  <th scope="col" width="200">Provinsi</th>
                  <th scope="col" width="150">Kasus Positif</th>
                  <th scope="col" width="100">Sembuh</th>
                  <th scope="col" width="100">Meninggal</th>
                    <th scope="col" width="150">Aksi</th>
                </tr></center>
                
              </thead>
              <?php
              $no = 1;
              foreach ($pinjam as $p) { ?>

        <tr>
          <th scope="row"><?= $no ?></th>
          <td><?= $p['provinsi'] ?></td>
          <td><?= $p['kasus'] ?></td>
          <td><?= $p['sembuh'] ?></td>
          <td><?= $p['meninggal'] ?></td>
           <td>
                    <a href="edit.php?id_prov=<?= $p['id_prov'] ?>" class="badge badge-warning">Edit</a>
                    <a href="hapus.php?id_prov=<?= $p['id_prov'] ?>" class="badge badge-danger">Hapus</a>
                  </td>
                </tr>
              <?php
                $no++;
              }
              ?>
              </tbody>
            </table>
            <center>
            <tr>
<button type="button" class="btn btn-outline-info"><a href="tambah.php" class="badge badge-info">+Tambah Data</a></button>
</tr></center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="search.js"></script>
</div>

