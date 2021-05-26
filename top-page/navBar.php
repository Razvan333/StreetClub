<!DOCTYPE html>
<html>
<section id="hero">
    <div class="container">
        <nav>
            <ul class="flex">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li id="header-logo" class="street-club.logo">
                    <a href="#">Street<br />Club</a>
                </li>
                <li><a href="#gallery">Workout Gallery</a></li>
                <li><a href="#">Contact</a></li>
                <li><a><?= $_SESSION['user_full_name'] ?></a></li>
                <a href="logout.php">Logout</a>
            </ul>
        </nav>
    </div>
</section>

</html>