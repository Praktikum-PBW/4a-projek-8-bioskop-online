<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema 21</title>
    <link rel="icon" href="../assets/img/user.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>

<body>
    <?php
    session_start();
    ?>
    <!-- SIDEBAR ADMIN -->

    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../assets/img/user.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"><?= $_SESSION['username'] ?></span>
                    <span class="profession"><?= $_SESSION['level'] ?></span>
                </div>
            </div>

        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="">
                    <a href="index.php">
                        <i class='bi bi-house icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="">
                    <a href="index.php?page=user">
                        <i class="bi bi-people icon"></i>
                        <span class="text nav-text">User</span>
                    </a>
                </li>

                <li class="">
                    <a href="index.php?page=film">
                        <i class='bi bi-film icon'></i>
                        <span class="text nav-text">Film</span>
                    </a>
                </li>

                <li class="">
                    <a href="index.php?page=studio">
                        <i class='bi bi-bank2 icon'></i>
                        <span class="text nav-text">Studio</span>
                    </a>
                </li>

                <li class="">
                    <a href="index.php?page=tiket">
                        <i class='bi bi-ticket-perforated icon'></i>
                        <span class="text nav-text">Tiket</span>
                    </a>
                </li>

                <li class="">
                    <a href="index.php?page=jadwal">
                        <i class='bi bi-wallet2 icon'></i>
                        <span class="text nav-text">Transaksi</span>
                    </a>
                </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bi bi-box-arrow-left icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</body>

</html>