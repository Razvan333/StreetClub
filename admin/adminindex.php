<?php include '../db_conn.php';
include '../top-page/header.php';
if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_email'])) { ?>
    <!DOCTYPE html>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <title>ADMIN</title>
    <section>

        <head>
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="background-color:black !important;">
                <div class="container">
                    <a href="#"><img src="../img/logo.png" alt="logo" style="width: 90px;" /> </a>
                    <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="adminViewTraining.php" class="nav-link text-white">View training</a>
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

        <section id="warmUp">
            <div class="body-chest">
                <div class="container col-md-4 col-md-offset-4">
                    <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">

                        <thead class="table-dark" style="word-spacing:5px">
                            <tr>
                                <th class="border border-dark text-uppercase fs-4" colspan="9" scope="col">Training request</th>
                            </tr>
                            <tr>
                                <th class="border border-dark text-uppercase" scope="col">email</th>
                                <th class="border border-dark text-uppercase" scope="col">phnumber</th>
                                <th class="border border-dark text-uppercase" scope="col">experience</th>
                                <th class="border border-dark text-uppercase" scope="col">age</th>
                                <th class="border border-dark text-uppercase" scope="col">tall</th>
                                <th class="border border-dark text-uppercase" scope="col">time</th>
                                <th class="border border-dark text-uppercase" scope="col">typeEx</th>
                                <th class="border border-dark text-uppercase" scope="col">goal</th>
                                <th class="border border-dark text-uppercase" scope="col">request date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM training_request";
                            $result = $conn->query($sql);
                            if ($result->rowCount() > 0) {
                                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                            ?>

                                    <tr>
                                        <td class="border border-dark" scope='row'><?php echo $row['email'] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row['phnumber'] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row["experience"] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row["age"] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row["tall"] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row["time"] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row["typeex"] ?></td>
                                        <td class="border border-dark" scope='row'><?php echo $row["goal"] ?></td>
                                        <td class="border border-dark" scope="row"><?php echo $row["data_cereri"] ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                    <div class="container col-md-4 col-md-offset-4">
                        <table class="table table-bordered shadow p-3 mb-5 bg-white rounded">

                            <thead class="table-dark" style="word-spacing:5px">
                                <tr>
                                    <th class="border border-dark text-uppercase fs-4" colspan="8" scope="col">Make personal training</th>
                                </tr>

                            </thead>
                            <tbody>
                                <form action="adminSendInfo.php" method="post">
                                    <tr class="text-uppercase">
                                        <td class="border border-dark" scope='row'><label for="email_user">email user</label></td>
                                        <td class="border border-dark" scope='row'> <input type="text" id="email_user" name="email_user" placeholder="e-mail"><br><br></td>
                                        <td class="border border-dark" scope='row'><label for="tip"></label>type</td>
                                        <td class="border border-dark" scope='row'> <input type="text" id="tip" name="tip" placeholder="tip"><br><br></td>
                                        <td class="border border-dark" scope='row'><label for="nume"></label>name</td>
                                        <td class="border border-dark" scope='row'> <input type="text" id="nume" name="nume" placeholder="nume"><br><br></td>

                                    </tr>
                                    <tr class="text-uppercase">
                                        <td class="border border-dark" scope='row'><label for="repetari"></label>reps</td>
                                        <td class="border border-dark" scope='row'> <input type="text" id="repetari" name="repetari" placeholder="repetari"><br><br></td>
                                        <td class="border border-dark" scope='row'><label for="pauza"></label>rest</td>
                                        <td class="border border-dark" scope='row'> <input type="text" id="pauza" name="pauza" placeholder="pauza"><br><br></td>
                                        <td class="border border-dark" scope='row'><label for="descriere"></label>description</td>
                                        <td class="border border-dark" scope='row'> <input type="text" id="descriere" name="descriere" placeholder="descriere"><br><br></td>
                                    </tr>
                                    <tr class="text-uppercase">
                                        <td class="border border-dark" scope='row'><label for="link"></label>youtube link</td>
                                        <td class="border border-dark" scope='row' colspan="6"> <input type="text" id="link" name="link" placeholder="link"><br><br></td>
                                    </tr>
                                    <tr>
                                        <td class="border border-dark" scope='row' colspan="6"><input class="btn bg-secondary text-white btn-lg btn-block" type="submit" value="Submit" name="submit"></td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>

                    </div>
        </section>
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