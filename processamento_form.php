<?php

    $nome= $_POST['campo_nome'];
    $idade = $_POST['campo_idade'];
    $cor = $_POST['campo_cor'];
    $turno = $_POST['campo_turno'];

    $prato = $_POST['opcoes'];

    print "O nome informado foi: " . $nome . "<br/>";
    print "A idade informada foi: " . $idade . "<br/>";
    print "A cor informada foi: " . $cor . "<br/>";
    print "O turno informado foi: " . $turno . "<br/>";
    print_r($pratos); 

    //arquivos
    $uploadsDir = "uploads/";

    $file = $uploadsDir . $_FILES['campo_arquivo']['name'];

    move_uploaded_file($_FILES['campo_arquivo']['tmp_name'], $file);

    print "O arquivo " . $_FILES['campo_arquivo']['name'] . "foi enviado com sucesso!";
