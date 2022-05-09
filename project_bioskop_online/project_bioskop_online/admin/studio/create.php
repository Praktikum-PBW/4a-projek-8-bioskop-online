<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <h4>Tambah Studio</h4>
            <form action="index.php?page=studio_store" method="POST">
                <div class="mb-2">
                    <label for="jns_studio" class="form-label">Jenis Studio</label>
                    <select name="jns_studio" id="jns_studio" class="form-select">
                        <option value="Deluxe">Deluxe</option>
                        <option value="Dolby Atmos">Dolby Atmos</option>
                        <option value="The Premiere">The Premiere</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="jml_kursi" class="form-label">Jumlah Kursi</label>
                    <input type="text" name="jml_kursi" id="jml_kursi" class="form-control"
                        placeholder="Masukan Jumlah Kursi">
                </div>
                <div class="mb-2">
                    <label for="id_jadwal" class="form-label">ID Jadwal</label>
                    <input type="id_jadwal" name="id_jadwal" id="id_jadwal" class="form-control" <?php $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                                                                    foreach ($query as $data) {
                                                                                                    ?>
                        value="<?= $data['id_studio'] ?>"><?= $data['tgl_tayang'] ?>
                    <?php
                                                                                                    }
                    ?>>
                </div>
                <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>