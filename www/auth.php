<?php
    if (isset($_POST['US_login']) and isset($_POST['US_password'])) {
        session_start();
        include 'connect.php';

        ini_set('display_errors', '1');

        $US_login = mysqli_real_escape_string($link,$_POST['US_login']);
        $US_password = mysqli_real_escape_string($link,$_POST['US_password']);

        $sql = "SELECT * FROM utilisateurs WHERE US_login = '$US_login' AND US_password = SHA2('$US_password', 256)";
        $res = mysqli_query($link,$sql);
        if ($res != false) {
            if (mysqli_num_rows($res) > 0) {
                // Utilisateur trouvé dans la base
                $utilisateur = mysqli_fetch_assoc($res);
                $_SESSION['login'] = $utilisateur['US_login'];
                header("Location: home.php");
            } else {
                header("Location: index.php");
            }
        } else {
            header("Location: BADUSER.html");
        }
    }
?>