<?php

// wat is dit?
use LDAP\Result;
// Verbinding met de database folder
require_once '../actions/db/db_connect.php';
$dbh = getDB();

session_start();
if (!isset($_SESSION['session_email'])) {
    header('Location: ../index.php');
    

} else {
    ?>
    <script>
        console.log("Valid login with email");
    </script>
    <?php    
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../index.php');
}

if (isset($_GET['action'])) {
    

    if ($_GET['action'] == 'deleteallfiles') {
        
        if (isset($_POT['newsletter'])) {
            $user_newsletter = 'Y';
        } else {
            $user_newsletter = 'N';
        }
        if (isset($_POT['share'])) {
            $user_share = 'Y';
        } else {
            $user_share = 'N';
        }
        $displayname = $_POST['displayname'];
        header('Location: ../actions/functions/function.php?action=deleteallfiles&displayname='.$displayname.'&user_newsletter='.$user_newsletter.'&user_share='.$user_share);
    
    }
} 


function loaduserdata($dbh) {
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':email', $_SESSION['session_email']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
}





    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="../mycloud/css/style.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<style>
body {
    background-image: url("../images/background.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>


<html>
<body>
    <div class="header" id="topnav">
        <a class="logo" href="">Jelte's eCloud</a>
        <a href="javascript:void(0);" class="icon" onclick="MenuButtonClick()"><i class="fa fa-bars"></i></a>

        <div class="header-left" id="myLinks">
            <a href="">Mijn Profiel</a>
        </div>
        <div class="header-right" id="myLinks">
            <form style= "margin: 0;" action="" method="post">
            <a href=""><b style="margin-right: 10px"> <?= $_SESSION['session_displayname'] ?></b><!--<img  src="../img/img_avatar.png" alt="Avatar" class="avatar">--></a>
            <input style="color: black; text-align: center; padding: 20px 25px 20px 25px; text-decoration: none; font-size: 18px; cursor: pointer; border: 0; background-color: rgba(255, 255, 255, 0);" id="logout" class="logout" type="submit" name="logout" value="Logout">
        </form>
        </div>
    </div>
    <div style="display:flex; height: 100%;">
        <div class='main-container'>
            <ul class="header-style" id="myLinks">
                <li><a href="../mycloud/">Mijn bestanden</a></li>
                <li><a href="../mycloud/upload/">Upload bestanden</a></li>
                <li><a href="../mycloud/shares/index.php">Gedeelde bestanden</a></li>
            </ul>
        </div>
        <div>
        <!-- <div><p class="alert">Deze cloud is momenteel onder constructie. Als er problemen zijn met de webpage, stuur een email naar support.jeltecost.nl</p></div> -->
        <form id="form_login" action="../actions/functions/function.php?action=updateprofile" method="post">
            <div class="form-group">
                <?php
                if (isset($_GET['alert'])) {
                    $alert = $_GET['alert'];
                    echo "<p class='alert'>$alert</p>";
                }
                if (isset($_GET['notify'])) {
                    $notify = $_GET['notify'];
                    echo "<p class='notify'>$notify</p>";
                }
                ?>
            </div>
            <h2 class=""><b>Dashboard</b></h2>
            <p>Uw laatste data:</p>
            <div class="counter">
                <p class="text">All-time Visits: 
                    <b>
                        <?= '1'; //$result[0]['page_visits_index']; ?>
                    </b>
                </p>
                <p class="text">All-time Visits: 
                    <b>
                        <?= '1'; //$result[0]['page_visits_index']; ?>
                    </b>
                </p>
                <p class="text">All-time Visits: 
                    <b>
                        <?= '1'; //$result[0]['page_visits_index']; ?>
                    </b>
                </p>
            </div>


            <p>Welkom, <?= $_SESSION['session_email']; ?>. Select wat je wilt doen.</p>
            <!-- make a item picker-->

            <form>
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </form>

            <?php
            // load user data
            loaduserdata($dbh);	
            ?>
        


    </div>
    <!-- jelte was here -->
</body>

<!-- Ja die ene go up knopje -->
<a id="myBtn" href="#topnav">Go up</a>

<script>
    var deleteLinks = document.querySelectorAll('.deletealert');
    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();
            var choice = confirm(this.getAttribute('data-confirm'));
            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }

    

    function search() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }


    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }


    function MenuButtonClick() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }


    window.addEventListener("resize", function() {
        if (window.matchMedia("(min-width: 1100px)").matches) {
            console.log("Screen width is at least 1100px")
            var x = document.getElementById("myLinks");
            if (x.style.display === "none") {
                x.style.display = "block";
            }
        }

    })

        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });


        
    </script>



</html>