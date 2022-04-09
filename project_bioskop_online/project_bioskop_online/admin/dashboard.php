<!-- DASHBOARD ADMIN -->

<section class="home py-5">
    <div class="container">
        <div class="row">
            <div class="col text-start">
                <h1>Dashboard</h1>
                <p class="lead">Selamat Datang, <br><?= $_SESSION['level'] ?> BIOSKOP INDONESIA</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body">
                        <img src="../assets/img/user2.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 text-primary">USER</h2>
                        <div class="ms-3 mt-0">
                            <?php
                            include '../lib/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT id_user FROM user ORDER BY id_user");
                            $row = mysqli_num_rows($query);
                            ?>
                            <h2>
                                <?php
                                echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body">
                        <img src="../assets/img/film.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 text-primary">FILM</h2>
                        <div class="ms-3 mt-0">
                            <?php
                            include '../lib/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT id_film FROM film ORDER BY id_film");
                            $row = mysqli_num_rows($query);
                            ?>
                            <h2>
                                <?php
                                echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body">
                        <img src="../assets/img/ticket.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 text-primary">Tiket</h2>
                        <div class="ms-3 mt-0">
                            <?php
                            include '../lib/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT id_tiket FROM tiket ORDER BY id_tiket");
                            $row = mysqli_num_rows($query);
                            ?>
                            <h2>
                                <?php
                                echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body">
                        <img src="../assets/img/studio.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 text-primary">Studio</h2>
                        <div class="ms-3 mt-0">
                            <?php
                            include '../lib/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT id_studio FROM studio ORDER BY id_studio");
                            $row = mysqli_num_rows($query);
                            ?>
                            <h2>
                                <?php
                                echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-body">
                        <img src="../assets/img/wallet.png" width="90px" class="img-fluid float-end p-3 me-3 mt-3">
                        <h2 class="p-3 text-primary">Transaksi</h2>
                        <div class="ms-3 mt-0">
                            <?php
                            include '../lib/koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT id_transaksi FROM transaksi ORDER BY id_transaksi");
                            $row = mysqli_num_rows($query);
                            ?>
                            <h2>
                                <?php
                                echo $row;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>