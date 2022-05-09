<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-3">
                <h4>Data Studio</h4>
                <a href="index.php?page=studio_create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Jenis Studio</th>
                            <th>Jumlah Kursi</th>
                            <th>Jadwal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM studio");
                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['jns_studio'] ?></td>
                            <td><?= $data['jml_kursi'] ?></td>
                            <td><?= $data['id_jadwal'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=studio_edit&id_studio=<?= $data['id_studio'] ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="index.php?page=studio_delete&id_studio=<?= $data['id_studio'] ?>"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            ?>
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger">Tidak ada data...</div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>