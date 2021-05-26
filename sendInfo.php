<?php include 'top-page/header.php'; ?>
<?php include 'db_conn.php' ?>

<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {


    if (isset($_POST['submit'])) {
        $email = htmlspecialchars($_POST['email']);
        $phnumber = $_POST['phnumber'];
        $experience = $_POST['experience'];
        $age = $_POST['age'];
        $tall = $_POST['tall'];
        $time = $_POST['time'];
        $typeEx = $_POST['typeEx'];
        $goal = $_POST['goal'];
        if ($_SESSION['user_email'] != $email) {
            header("location: personalizedWk.php?error=E-mail should be the same with your login credential");
        } else {
            $sql = "INSERT INTO training_request (email, phnumber, experience, age, tall, time, typeex, goal)
        VALUES ('$email', '$phnumber', '$experience', '$age','$tall','$time','$typeEx','$goal')";
            $result = $conn->query($sql);
            if ($result) {
                header("Location: personalizedWk.php?success=Your request was sent succesfully");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->errorInfo();
            }
        }
    }
?>



<?php } else {
    header("Location: login.php");
} ?>