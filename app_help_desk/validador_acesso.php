<?php
    session_start();
    if (!isset($_SESSION['autenticado']) OR $_SESSION['autenticado'] != 'sim') {
      header('Location: index.php?login=erro');
    }