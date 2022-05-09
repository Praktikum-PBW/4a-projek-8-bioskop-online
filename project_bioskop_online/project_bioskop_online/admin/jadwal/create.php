<div class="row">
    <div class="col-md-12">
        <h4>Tambah Jadwal</h4>
        <form action="index.php?page=jadwal_store" method="POST">
            <div class="mb-2">
                <label for="id_studio" class="form-label">Studio</label>
                <select name="id_studio" id="id_studio" class="form-select">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM studio");
                    foreach ($query as $data) {
                    ?>
                    <option value="<?= $data['id_studio'] ?>"><?= $data['studio'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="film" class="form-label">Film</label>
                <select name="id_film" id="id_film" class="form-select">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM film");
                    foreach ($query as $data) {
                    ?>
                    <option value="<?= $data['id_film'] ?>"><?= $data['film'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="tgl_tayang" class="form-label">Tanggal Tayang</label>
                <input type="tgl_tayang" name="tgl_tayang" id="tgl_tayang" class="form-control"
                    placeholder="Masukan tanggal tayang">
            </div>
            <div class="mb-2">
                <label for="jam_tayang" class="form-label">Jam Tayang</label>
                <input type="jam_tayang" name="jam_tayang" id="jam_tayang" class="form-control"
                    placeholder="Masukan jam tayang">
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>