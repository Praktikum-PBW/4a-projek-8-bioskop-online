<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-3">
                <h4>Data User</h4>
                <a href="index.php?page=user_create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table border table-striped table-bordered" id="example" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM user");
                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['username'] ?></td>
                            <td><?= $data['nama_lengkap'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['level'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=user_edit&id_user=<?= $data['id_user'] ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="index.php?page=user_delete&id_user=<?= $data['id_user'] ?>"
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