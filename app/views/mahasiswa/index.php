<div class="container mt-3">
  <!-- pesan -->
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#forModal">
        Tambah Data Mahasiswa
      </button>
      <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
          <?php foreach( $data["mhs"] as $mhs ) : ?>
          <li class="list-group-item"><?= $mhs["nama"]; ?>
          <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs["id"]; ?>" class="badge text-bg-danger rounded text-decoration-none text-end float-end ms-1" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
          <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-success rounded text-decoration-none text-end float-end ms-1">detail</a>
          </li>
          <?php endforeach; ?>
        </ul>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="npm" class="form-label">Npm</label>
            <input type="text" class="form-control" id="npm" placeholder="Masukkan npm" name="npm">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
          </div>
          <label for="jurusan" class="form-label">Jurusan</label>
          <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
            <option selected>Pilih jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Perkebunan">Perkebunan</option>
            <option value="Perikanan">Perikanan</option>
          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>