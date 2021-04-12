<?php
require_once 'models/Pegawai.php';
$model = new Pegawai();
$tampil = $model->tampilData();
?>


<h2>Data Pegawai</h2>
<br>
<a href="index.php?page=formPegawai" class="btn btn-warning">Tambah</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($tampil as $tampil) {
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $tampil['nip']; ?></td>
        <td><?= $tampil['nama']; ?></td>
        <td><?= $tampil['email']; ?></td>
        <td><?= $tampil['agama']; ?></td>
        <td><?= $tampil['divisi']; ?></td>
        <td><?= $tampil['foto']; ?></td>
      <tr>
      <?php $no++;
    } ?>
  </tbody>
</table>