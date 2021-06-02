<?php include 'top-page/header.php'; ?>
<?php include 'db_conn.php' ?>

<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {


    if (isset($_POST['submit'])) {
        $email = $_SESSION['user_email'];
        $phnumber = htmlspecialchars($_POST['phnumber']);
        $experience = htmlspecialchars($_POST['experience']);
        $age = htmlspecialchars($_POST['age']);
        $tall = htmlspecialchars($_POST['tall']);
        $time = htmlspecialchars($_POST['time']);
        $typeEx = htmlspecialchars($_POST['typeEx']);
        $goal = htmlspecialchars($_POST['goal']);

        $sql = "INSERT INTO training_request (email, phnumber, experience, age, tall, time, typeex, goal)
        VALUES ('$email', '$phnumber', '$experience', '$age','$tall','$time','$typeEx','$goal')";
        $result = $conn->query($sql);
        if ($result) {
            header("Location: personalizedWk.php?success=Your request was sent succesfully");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->errorInfo();
        }
    }
?>



<?php } else {
    header("Location: login.php");
} ?>