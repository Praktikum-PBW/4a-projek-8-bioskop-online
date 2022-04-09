<?php
if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <h4>Edit User</h4>
            <form action="index.php?page=user_update" method="POST">
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username"
                        value="<?= $data['username'] ?>">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="Password" name="password" id="password" class="form-control"
                        placeholder="Masukan Password">
                </div>
                <div class="mb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label><br>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                        placeholder="Masukan Nama Lengkap" value="<?= $data['nama_lengkap'] ?>">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email"
                        value="<?= $data['email'] ?>">
                </div>
                <div class="mb-2">
                    <label for="level" class="form-label">Level</label>
                    <select name="level" id="level" class="form-select">
                        <option value="Admin" <?php if ($data['level'] == "admin") echo "selected" ?>>Admin</option>
                        <option value="Customer" <?php if ($data['level'] == "customer") echo "selected" ?>>Customer
                        </option>
                    </select>
                </div>
                <input type="submit" value="Edit" name="edit" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>
<?php
    } else {
        header("Location:index.php?page=user");
    }
} else {
    header("Location:index.php?page=user");
}
?>