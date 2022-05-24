<?php
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

loaduserdata($dbh);

?>