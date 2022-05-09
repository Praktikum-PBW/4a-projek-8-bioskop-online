<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="carousel slide carousel-style" data-ride="carousel" id="carouselExampleIndicators">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
            <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="First slide" class="d-block w-100" src="../assets/img/poster1.jpg">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Second slide" class="d-block w-100" src="../assets/img/poster2.jpg">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img alt="Third slide" class="d-block w-100" src="../assets/img/poster3.jpg">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span
                aria-hidden="true" class="carousel-control-prev-icon"></span></a>
        <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span
                aria-hidden="true" class="carousel-control-next-icon"></span></a>
    </div>

    <section id="showoff" class="py-3">
        <div class="container mt-5">
            <div class="row">
                <?php
                include "../lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM film");
                foreach ($query as $data) {
                ?>
                <div class="col-md-3 mb-5">
                    <div class="card p-2 text-center" style="width:fit-content">
                        <img src="../assets/img/<?= $data['poster'] ?>" class="img-fluid" width="250px" alt="">
                        <p class="mt-2" style="font-size: 15px;"><b><?= $data['judul'] ?></b></p>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="../assets/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
</script>

</html>