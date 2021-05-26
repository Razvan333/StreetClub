<?php
include '../db_conn.php';



if (isset($_GET['id'])) {
    $training = $_GET['id'];
    $sql = "DELETE FROM personalized_training WHERE email_user='$training'";
    $result = $conn->query($sql);
    header('location:adminViewTraining.php');
}
