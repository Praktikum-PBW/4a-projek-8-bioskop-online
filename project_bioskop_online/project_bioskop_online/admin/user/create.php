<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <h4>Tambah User</h4>
            <form action="index.php?page=user_store" method="POST">
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Masukan Username">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="Password" name="password" id="password" class="form-control"
                        placeholder="Masukan Password">
                </div>
                <div class="mb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label><br>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                        placeholder="Masukan Nama Lengkap">
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
                </div>
                <div class="mb-2">
                    <label for="level" class="form-label">Level</label>
                    <select name="level" id="level" class="form-select">
                        <option value="Admin">Admin</option>
                        <option value="Customer">Customer</option>
                    </select>
                </div>
                <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>