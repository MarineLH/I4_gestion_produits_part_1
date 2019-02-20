<?php
    function secu () {
        if(!isset($_SESSION['login']) or $_SESSION['login'] == '') {
            header('Location: index.php');
        }
    }
?>