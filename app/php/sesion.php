<?php

    session_start();
    $_SESSION['sesionName'] = uniqid();
    // El valor devuelto se almacenará en 'data' en myjava.js
    echo $_SESSION['sesionName'];

?>