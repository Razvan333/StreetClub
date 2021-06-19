<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- Messenger Plugin pentru chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin pentru chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100437712265408");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
<!--<div class="img-fluid bg-footer w-100 max-width: 100%;height: auto">-->
<footer id="contact">
    <div class="container-fluid" style="background-color:black">
        <div class="row">
            <div class="col-md-4 text-center">
                <br />
                <h5><u>Contact</u></h5><br />
                <a href="mailto:street.club.contact@gmail.com">
                    <p class="fa fa-envelope"> - Bussines e-mail</p>
                </a><br />
                <p class="fas fa-phone-alt"> - 0740942065</p>
                <p></p>
            </div>

            <div class="col-md-4 text-center">
                <br /><a href="#top" class="fas fa-angle-double-up fa-2x"></a>
            </div>

            <div class="col-md-4 col-md-offset-3 text-center social">
                <br />
                <h5>
                    <u>Social media</u>
                </h5><br />
                <a href="https://www.instagram.com/streetclub_workout/" target="_blank"><span class="fab fa-instagram fa-2x "></span></a><br /><br />
                <a href="https://www.facebook.com/streetclubWorkout" target="_blank"><span class="fab fa-facebook fa-2x "></span></a><br /><br />
                <a href="https://www.youtube.com/channel/UC_YayB18y42CHVgwpi1ZBZw" target="_blank"><span class="fab fa-youtube fa-2x"></span></a>
            </div>
        </div>

    </div>
    </div>
</footer>


</html>