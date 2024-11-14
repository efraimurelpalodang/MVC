<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#forModal">
        Tambah Data Mahasiswa
      </button>
      <h3>Daftar Mahasiswa</h3>

        <ul class="list-group">
          <?php foreach( $data["mhs"] as $mhs ) : ?>
          <li class="list-group-item d-flex justify-content-between"><?= $mhs["nama"]; ?>
            <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-success rounded-pill text-decoration-none text-end">detail</a>
          </li>
          <?php endforeach; ?>
        </ul>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Understood</button>
      </div>
    </div>
  </div>
</div>