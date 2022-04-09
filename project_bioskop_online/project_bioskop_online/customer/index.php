<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema 21</title>
    <link rel="icon" href="../assets/img/user.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>

<body>
    <?php
    session_start();
    ?>
    <!-- NAVBAR CUSTOMER -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
        <div class="container">
            <div class="navbar-brand">
                <a href="index.html" class="navbar-brand text-dark" style="font-size: 20px;">
                    <img src="../assets/img/user.png" alt="" style="margin-right: 5px;" width="45"><strong>Cinema
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
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark" href="PetCare.html" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <?= $_SESSION['username'] ?><i class="bi bi-caret-down-fill"></i>
                        </a>
                        <ul class="dropdown-menu" id="menu1">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php
        include "menu.php";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../assets/js/script.js"></script>
</body>

</html>