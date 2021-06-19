
<?php include '../db_conn.php' ?>

<?php



if (isset($_POST['submit'])) {

    $email = $_POST['email_user'];
    $tip = $_POST['tip'];
    $nume = $_POST['nume'];
    $repetari = $_POST['repetari'];
    $pauza = $_POST['pauza'];
    $descriere = $_POST['descriere'];
    $link = $_POST['link'];

    $sql = "INSERT INTO personalized_training (email_user, tip, nume, repetari, pauza, descriere, link)
        VALUES ('$email', '$tip', '$nume', '$repetari','$pauza','$descriere','$link')";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: admin/adminindex.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->errorInfo();
    }
}
?>


