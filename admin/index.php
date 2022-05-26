<?php
// wat is dit?
use LDAP\Result;
// Verbinding met de database folder
require_once '../../config.php';
require_once '../actions/db/db_connect.php';
$dbh = getDB();
require_once "./actions/.start.php";
   

function Getcount_users() {
    $sqlextra = "administrator_role = 'N'";
    $sql = "SELECT * FROM users WHERE $sqlextra";
    $stmt = getDB()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = count($result);
    echo $count;
}


function Getcount_files() {
    $sql = "SELECT * FROM files";
    $stmt = getDB()->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count = count($result);
    echo $count;
}

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once './assets/html/head.php'; ?>
<html>
<body>
    <div class="header" id="topnav">
        <a class="logo" href=""><?= $config['site_name'];?></a>
        <a href="javascript:void(0);" class="icon" onclick="MenuButtonClick()"><i class="fa fa-bars"></i></a>

        <div class="header-left" id="myLinks">
            <!-- <a href="">Mijn Profiel</a> -->
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
                <!-- <li><a href="../mycloud/">Mijn d</a></li> -->
                <!-- <li><a href="../mycloud/upload/">Upload d</a></li> -->
                <!-- <li><a href="../mycloud/shares/index.php">Gedeelde d</a></li> -->
            </ul>
        </div>
        <div style="width: 100%;">
        <form id="form_login" action="../actions/functions/function.php?action=updateprofile" method="post">
            <div class="form-group">
                <?php require_once './assets/html/alerts.php'; ?>
            </div>
            <h2 class=""><b>Dashboard</b></h2>
            <p style="margin: 0;">Welkom,<b> <?= $_SESSION['session_displayname']; ?></b>. Hier is uw laatste data:</p>
            <div class="counter">
                <p class="text">All-time gebruikers: 
                    <b>
                        <?php
                        Getcount_users();
                        ?>
                    </b>
                </p>
                <p class="text">All uploaded files: 
                    <b>
                        <?php
                        Getcount_files();
                        ?>
                    </b>
                </p>

            </div>
                <div id="donutchart_file_types" style="width: 500px; height: 300px;"></div>
                <div id="donutchart_file_size" style="width: 500px; height: 300px;"></div>
                <br>
                <div id="chart_div" style="width: 40%; height: 500px;"></div>
                <br>
                <div id="chart_div_2" style="width: 40%; height: 500px;"></div>
                <br>


            


            
            
 
    </div>
    <!-- jelte was here -->
</body>

<!-- Ja die ene go up knopje -->
<a id="myBtn" href="#topnav">Go up</a>
<?php require_once './js/javascript.php'; ?>
</html>