<?php include '../db_conn.php';
include '../top-page/header.php';

if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_email'])) { ?>
    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <title>ADMIN</title>
    <section></section>

    <head>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color:black !important;">
            <div class="container">
                <a href="adminindex.php"><img src="../img/logo.png" alt="logo" style="width: 90px;" /> </a>
                <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="adminindex.php" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMIN</a>
                            <div class="dropdown-menu text-center" style="background: rgba(0,0,0,0.7) !important;" aria-labelledby="navbarDropdown">
                                <a class="dropdown-toggle-split text-white" href="adminLogout.php">Log-out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </section>
    </head>

    <body>
        <div class="container col-md-4 col-md-offset-4">
            <?php
            $sql = "SELECT * FROM personalized_training";
            $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?><?php if ($row['tip'] === 'h3') { ?>


            <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">

                <thead class="table-dark" style="word-spacing:5px">
                    <tr>
                        <th class="border border-dark text-uppercase text-center fs-4" colspan="6" scope="col"><?php echo $row['nume']; ?></th>
                    </tr>
                    <tr>
                        <th class="border border-dark text-uppercase" scope="col">User email</th>
                        <th class="border border-dark text-uppercase" scope="col">Type ex</th>
                        <th class="border border-dark text-uppercase" scope="col">Reps</th>
                        <th class="border border-dark text-uppercase" scope="col">Rest</th>
                    </tr>
                </thead>
                <tbody>
                <?php }
                    if ($row['tip'] === 'antrenament') { ?>
                    <tr>
                        <td class="border border-dark" scope="row"><?php echo $row['email_user'] ?></td>
                        <td class="border border-dark text-capitalize" scope='row'><?php echo $row['nume'] ?></td>
                        <td class="border border-dark" scope='row'><?php echo $row['repetari'] ?></td>
                        <td class="border border-dark" scope='row'><?php echo $row["pauza"] ?></td>
                    </tr>
                <?php
                    }
                    if ($row['tip'] === 'descriere') { ?>
                    <tr>
                        <td class="border border-dark text-center" colspan="6" class="text-bolt"><?php echo $row['descriere'] ?></td>
                    </tr>
                    <tr>
                        <td class="border border-dark text-center" colspan="6"><a href="<?php echo $row['link'] ?>" target="_blank" class=" btn btn-danger ">Link YouTube exemplu</a></td>
                    </tr>
                    <tr>
                        <td class="border border-dark text-center" scope='row' colspan="6"><a class="btn btn-primary" href='adminDelTraining.php?id=<?php echo $row["email_user"] ?>'>Delete</a></td>
                    </tr>
        <?php }
                }
            } ?>
                </tbody>
            </table>
        </div>
    </body>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-secondary');
            } else {
                nav.classList.remove('bg-secondary');
            }
        });
    </script>

    </html>
<?php
} else {
    header("Location: adminLogin.php");
}
?>