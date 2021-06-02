<?php include 'top-page/header.php'; ?>
<?php

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { ?>
    <!DOCTYPE html>
    <html>
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">

    <body>
        <div class="img-fluid bg-login max-width: 100%;height: auto">
            <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <form class="p-4 rounded bg-column shadow" action="loginProcess.php" method="post" style="width: 30rem;">
                    <h1 class="text-center pb-5 display-4"><img src="img/logo.png" style="width:35%;" /><br />LOGIN</h1>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['error'] ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_GET['success'] ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address:
                        </label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email@gmail.com">
                    </div>
                    <div class="mb-3">
                        <div class="form">
                            <div class=form-element>
                                <label for="password-field" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" id="password-field" placeholder="Password">
                                <div class="toggle-password">
                                    <i class="fa fa-eye" style="color: blue"></i>
                                    <i class="fa fa-eye-slash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="register.php" class="btn btn-dark" style="float:right;">Create an account</a><br /><br />

                </form>

            </div>
        </div>
        <script>
            function _id(name) {
                return document.getElementById(name);
            }

            function _class(name) {
                return document.getElementsByClassName(name);
            }
            _class("toggle-password")[0].addEventListener("click", function() {
                _class("toggle-password")[0].classList.toggle("active");
                if (_id("password-field").getAttribute("type") == "password") {
                    _id("password-field").setAttribute("type", "text");
                } else {
                    _id("password-field").setAttribute("type", "password");
                }
            });
        </script>

    </body>

    </html>
<?php
} else {
    header("Location: index.php");
}
?>