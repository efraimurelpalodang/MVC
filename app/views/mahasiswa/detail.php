<div class="container mt-5">
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><?= $data["mhs"]["nama"]?></div>
  <div class="card-body">
    <h5 class="card-title"><?= $data["mhs"]["npm"]?></h5>
    <p class="card-text"><?= $data["mhs"]["email"]?></p>
    <p class="card-text"><?= $data["mhs"]["jurusan"]?></p>
    <a href="<?= BASEURL; ?>/mahasiswa" class="text-decoration-none">Kembali</a>
  </div>
</div>
</div>