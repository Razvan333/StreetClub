<?php include 'top-page/header.php'; ?>
<?php include 'db_conn.php' ?>

<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { ?>

    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Chest - Triceps</title>
    <section>

        <head>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color:black !important;">
                <div class="container">
                    <a href="index.php"><img src="img/logo.png" alt="logo" style="width: 90px;" /> </a>
                    <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-uppercase nav-font" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="personalizedWk.php" class="nav-link text-white">Personalized Workout</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Workouts</a>
                                <div class="dropdown-menu text-center nav-font" style="background: rgba(0,0,0,0.7)" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-toggle-split text-white" href="warmUp.php">WarmUp - Stretching</a><br />
                                    <a class="dropdown-toggle-split text-white" href="back.php">Back - Biceps</a><br />
                                    <a class="dropdown-toggle-split text-white" href="legs.php">Legs - Abs</a><br />
                                    <a class="dropdown-toggle-split text-white" href="hit.php">Hiit</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>&ensp;<?= $_SESSION['user_full_name'] ?></a>
                                <div class="dropdown-menu text-center" style="background: rgba(0,0,0,0.7) !important;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-toggle-split text-white nav-font" href="logout.php"><i class="fas fa-sign-out-alt"></i>&ensp;Log-out</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link text-white">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

    </section>
    <h3 class="h3-pos">Chest & Triceps</h3>
    </head>

    <body>
        <section id="chest" style="padding: 0 0;">
            <div class="body-chest">
                <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
                    <thead>
                        <tr>
                            <th scope="col">
                                <p style="color:black;">Warm up before starting a workout program is essential, to avoid any kind of injury.<br /><a href="warmUp.php" class="fas fa-arrow-circle-right"> Warm Up</a></p>
                            </th>
                        </tr>
                    </thead>

                </table>


                <div class="container col-md-4 col-md-offset-4">
                    <?php
                    $sql = "SELECT * FROM chest";
                    $result = $conn->query($sql);
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                    ?><?php if ($row['tip'] === 'h3') { ?>


                    <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">

                        <thead class="table-dark" style="word-spacing:5px">
                            <tr>
                                <th class="border border-dark text-uppercase fs-4" colspan="6" scope="col"><?php echo $row['nume']; ?></th>
                            </tr>
                            <tr>
                                <th class="border border-dark text-uppercase" scope="col">Type ex</th>
                                <th class="border border-dark text-uppercase" scope="col">Reps</th>
                                <th class="border border-dark text-uppercase" scope="col">Rest</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php }
                            if ($row['tip'] === 'antrenament') { ?>
                            <tr class="text-capitalize">
                                <td class="border border-dark" scope='row'><?php echo $row['nume'] ?></td>
                                <td class="border border-dark" scope='row'><?php echo $row['repetari'] ?></td>
                                <td class="border border-dark" scope='row'><?php echo $row["pauza"] ?></td>
                            </tr>
                        <?php
                            }
                            if ($row['tip'] === 'descriere') { ?>
                            <tr>
                                <td class="border border-dark" colspan="6" class="text-bolt"><?php echo $row['descriere'] ?></td>
                            </tr>
                            <tr>
                                <td class="border border-dark" colspan="6"><a href="<?php echo $row['link'] ?>" target="_blank" class=" btn btn-danger">Link YouTube exemple</a></td>
                            </tr>
                <?php }
                        }
                    } ?>
                        </tbody>
                    </table>

                    <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <p style="color:black;">Stretching is mandatory after every training session for a better recovery of the muscle tissue.<br /><a href="warmUp.php" class="fas fa-arrow-circle-right"> Stretching</a></p>
                                </th>
                            </tr>
                        </thead>

                    </table>
                </div>
        </section>
    </body>
    <script src="js/bootstrap.bundle.min.js"></script>
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

    <?php include 'top-page/footer.php'; ?>

    </html>
<?php
} else {
    header("Location: login.php");
}
?>