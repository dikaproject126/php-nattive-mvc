<div class="container mt-3">

    <div class="row" >
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs ) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id_mhs']; ?>" class="badge text-bg-primary text-decoration-none float-end ms-2">Detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id_mhs']; ?>" class="badge text-bg-warning text-decoration-none float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id_mhs']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id_mhs']; ?>" class="badge text-bg-danger text-decoration-none float-end" onclick="return confirm('Apakah yakin Menghapus Data ini?');">Hapus</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="form-group">
                <label for="nama" class="my-2">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            
            <div class="form-group">
                <label for="nim" class="my-2">Nim</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>

            <div class="form-group">
                <label for="email" class="my-2">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
            </div>

            <div class="form-group">
                <label for="jurusan" class="my-2">Jurusan</label>
                <select class="form-control" id="jurusan" name="jurusan">
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Sistem Informasi">Sistem Informasi</option>
                  <option value="Teknik Sipil">Teknik Sipil</option>
                  <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                  <option value="Teknik Geologi">Teknik Geologi</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>