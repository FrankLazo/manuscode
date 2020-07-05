<?php

    session_start();

    $name = $_POST['name'];
    $message = $_POST['message'];
    $dateTime = '<br><span>' . date('d M Y H:i:s') . '</span>';
    $array[] = array('name' => $name,
                     'message' => $message,
                     'sesion' => $_SESSION['sesionName'],
                     'dateTime' => $dateTime);
    // El valor devuelto se almacenará en 'data' en myjava.js
    echo json_encode($array);

?>