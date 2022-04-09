<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema 21</title>
    <link rel="icon" href="assets/img/user.png">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html" class="navbar-brand text-dark" style="font-size: 20px;">
                    <img src="assets/img/user.png" alt="" style="margin-right: 5px;" width="45"><strong>Cinema
                        21</strong>
                </a>
            </div>
            <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse"
                aria-expanded="false" aria-label="Toggle Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-btn" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link text-dark">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">Film</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-dark">Contact Us</a>
                    </li>
                    <li>
                        <a href="Login.php" id="btn-sub" class="nav-item btn btn-primary ms-5 w-75">Join Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="carousel slide carousel-style" data-ride="carousel" id="carouselExampleIndicators">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="First slide" class="d-block w-100" src="assets/img/poster1.jpg">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Second slide" class="d-block w-100" src="assets/img/poster2.jpg">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Third slide" class="d-block w-100" src="assets/img/poster3.jpg">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span
                aria-hidden="true" class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span
                aria-hidden="true" class="carousel-control-next-icon"></span></a>
    </div>

    <div class="container film">
        <section id="showoff" class="py-5">
            <div class="container mt-5">
                <div class="row">
                    <?php
                    include "lib/koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM film");
                    foreach ($query as $data) {
                    ?>
                    <div class="col-md-3 mb-5">
                        <div class="card p-2 text-center" style="width:fit-content">
                            <img src="assets/img/<?= $data['poster'] ?>" class="img-fluid" width="200px" alt="">
                            <p class="mt-4" style="font-size: 15px;"><b><?= $data['judul'] ?></b></p>
                            <button type="button" class="btn btn-secondary"
                                style="width: 40px; margin:auto;"><?= $data['rating_usia'] ?></button>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>

</body>

</html>