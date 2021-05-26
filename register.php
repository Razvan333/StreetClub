<?php include 'top-page/header.php'; ?>
<!DOCTYPE html>
<html>
<title>Registration</title>
<link rel="stylesheet" href="style.css">

<body>

    <div class="img-fluid bg-login max-width: 100%;height: auto">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <form class="p-5 rounded bg-column shadow" action="registerProcess.php" method="post" style="width: 30rem;">
                <h1 class="text-center pb-5 display-4"><img src="img/logo.png" style="width:35%;" /><br />Register</h1>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['error'] ?>
                    </div>
                <?php } ?>

                <div class="mb-3">
                    <label for="InputFullName" class="form-label">Your Name:
                    </label>
                    <input type="text" name="full_name" class="form-control" id="InputFullName" placeholder="Your Full Name">
                </div>
                <div class="mb-3" id="form">
                    <label for="InputEmail" class="form-label">Email:
                    </label>
                    <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email@gmail.com">
                </div>
                <div class="mb-3">
                    <div class="form">
                        <div class=form-element>
                            <label for="password-field" class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" id="password-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password">
                            <div class="toggle-password">
                                <i class="fa fa-eye" style="color: blue"></i>
                                <i class="fa fa-eye-slash"></i>
                            </div>
                            <div class="password-policies">
                                <div class="policy-length">
                                    Minimum 8 characters
                                </div>
                                <div class="policy-number">
                                    At least one number
                                </div>
                                <div class="policy-uppercase">
                                    At least one uppercase
                                </div>
                                <div class="policy-special">
                                    At least one special character
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="InputRePassword" class="form-label">Re-enter password:</label>
                    <input type="password" name="re_password" class="form-control" id="InputRePassword" placeholder="Re-Password">
                </div>
                <div class="form-check checkbox-teal mb-2">
                    <input type="checkbox" class="form-check-input" id="checkbox">
                    <label class="form-check-label" for="tealExample"><a href="terms&condition/termsCondition.html">Terms & Conditions</a></label>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <a href="login.php" class="btn btn-dark" style="float:right;">Already have an account</a>
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
        _id("password-field").addEventListener("focus", function() {
            _class("password-policies")[0].classList.add("active");
        });
        _id("password-field").addEventListener("blur", function() {
            _class("password-policies")[0].classList.remove("active");
        });
        _id("password-field").addEventListener("keyup", function() {
            let password = _id("password-field").value;
            if (/[A-Z]/.test(password)) {
                _class("policy-uppercase")[0].classList.add("active");
            } else {
                _class("policy-uppercase")[0].classList.remove("active");
            }

            if (/[0-9]/.test(password)) {
                _class("policy-number")[0].classList.add("active");
            } else {
                _class("policy-number")[0].classList.remove("active");
            }

            if (/[^A-Za-z0-9]/.test(password)) {
                _class("policy-special")[0].classList.add("active");
            } else {
                _class("policy-special")[0].classList.remove("active");
            }

            if (password.length > 7) {
                _class("policy-length")[0].classList.add("active");
            } else {
                _class("policy-length")[0].classList.remove("active");
            }
        });
    </script>
</body>

</html>