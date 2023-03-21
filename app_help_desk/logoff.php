<?php
    session_start();

    //remove indice do array
    unset($_SESSION['autenticado']);
    header('Location: index.php');

?>