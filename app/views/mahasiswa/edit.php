<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <h1>Edit Mahasiswa</h1>

            <form action="<?= BASEURL; ?>/mahasiswa/editdata/<?= $data['mhs']['id']; ?>" method="POST">
                <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="<?= $data['mhs']['nama']; ?>" name="nama">
                </div>

                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="number" class="form-control" id="nrp" value="<?= $data['mhs']['nrp']; ?>" name="nrp">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="<?= $data['mhs']['email']; ?>" name="email">
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option><?= $data['mhs']['jurusan']; ?></option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Penerbangan">Penerbangan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning">Edit Data</button>
                <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>