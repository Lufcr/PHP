<?php
    session_start();

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descrição = str_replace('#', '-', $_POST['descrição']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descrição . PHP_EOL;

    //passando para arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('location: abrir_chamado.php');
?>