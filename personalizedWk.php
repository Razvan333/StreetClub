<?php include 'top-page/header.php'; ?>
<?php include 'db_conn.php' ?>
<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { ?>

    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Personalized Workout</title>

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
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link text-white dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Workouts</a>
                                <div class="dropdown-menu text-center nav-font" style="background: rgba(0,0,0,0.7)" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-toggle-split text-white" href="warmUp.php">WarmUp - Stretching</a><br />
                                    <a class="dropdown-toggle-split text-white" href="chest.php">Chest - Tricept</a><br />
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
    <h3 class="h3-pos">Personalized workout</h3>
    </head>

    <body>
        <section id="personalizedWk">
            <div class="body-chest">
                <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">
                    <thead>
                        <tr>
                            <th scope="col">
                                <p style="color:black;">Please insert carefully your personal information for a good plan trainning.<br /> After you sent the request you will be contacted very soon by the admin.<br />These personalized workout are paid, and the price will be decided after the consultation with the Personal Trainer.</p>
                            </th>
                        </tr>
                    </thead>

                </table>

                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert"><?= $_GET['error']; ?></div>
                <?php    } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-success" role="alert"><?= $_GET['success']; ?></div>
                <?php  } ?>
                <div class="container col-md-4 col-md-offset-4">
                    <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">

                        <thead class="table-dark" style="word-spacing:5px">
                            <tr>
                                <th class="border border-dark text-uppercase fs-4" colspan="6" scope="col">Insert your personal data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="sendInfo.php" method="post">
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="phnumber">Your phone number</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="phnumber" name="phnumber" placeholder="phone number" required><br><br></td>
                                </tr>
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="experience">Your experience street workout express in year/month</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="experience" name="experience" placeholder="experience" required><br><br></td>
                                </tr>
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="age">your age</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="age" name="age" placeholder="age" required><br><br></td>
                                </tr>
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="tall">How tall you are and how many kg you have</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="tall" name="tall" placeholder="tall: 180cm, kg: 70" required><br><br></td>
                                </tr>
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="time">How long you want your training (express in month)</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="time" name="time" placeholder="ex: 6 month" required><br><br></td>
                                </tr>
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="typeEx">What kind of trainning you want (ex: build force, build muscle, fat loss)</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="typeEx" name="typeEx" placeholder="ex: build force" required><br><br></td>
                                </tr>
                                <tr class="text-uppercase">
                                    <td class="border border-dark" scope='row'><label for="goal">What is your goal</label></td>
                                    <td class="border border-dark" scope='row'> <input type="text" id="goal" name="goal" required><br><br></td>
                                </tr>
                                <tr>
                                    <td class="border border-dark" scope='row' colspan="6"><input class="btn bg-secondary text-white btn-lg btn-block" type="submit" value="Submit" name="submit"></td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>

                <div class="container col-md-4 col-md-offset-4">
                    <?php
                    $sql = "SELECT * FROM personalized_training";
                    $result = $conn->query($sql);

                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            if ($_SESSION['user_email'] === $row['email_user']) {
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
                        }
                    } ?>
                        </tbody>
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
<?php } else {
    header("Location: login.php");
} ?>