<?php

include '../db_conn.php';
include '../top-page/header.php';
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST["password"];

    if (empty($email)) {
        header("Location: adminLogin.php?error=Email is required");
    } else if (empty($password)) {
        header("Location: adminLogin.php?error=Password is required");
    } else {
        $stmt = $conn->prepare("SELECT * FROM admin_data WHERE email=?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() === 1) {
            $user = $stmt->fetch();
            $admin_id = $user['id'];
            $admin_email = $user['email'];
            $admin_password = $user['password'];
            $admin_full_name = $user['full_name'];
            if ($email === $admin_email) {
                if (password_verify($password, $admin_password)) {
                    $_SESSION['admin_id'] = $admin_id;
                    $_SESSION['admin_email'] = $admin_email;
                    $_SESSION['admin_full_name'] = $admin_full_name;
                    header("Location: adminindex.php");
                } else {
                    header("Location: adminLogin.php?error=Incorrect password");
                }
            } else {
                header("Location: adminLogin.php?error=Incorrect User name");
            }
        } else {
            header("Location: adminLogin.php?error=Incorrect User name or password");
        }
    }
}
?>

<!DOCTYPE html>
<html>
<title>Log in</title>
<link rel="stylesheet" href="../style.css">

<body>
    <div style="background-color: black;">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <form class="p-5 rounded bg-column shadow" action="" method="post" style="width: 30rem;">
                <h1 class="text-center pb-5 display-4"><img src="../img/logo.png" style="width:35%;" /><br />LOGIN ADMIN</h1>
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
                    <label for="exampleInputEmail1" class="form-label">Email address
                    </label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>