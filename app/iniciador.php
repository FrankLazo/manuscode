<?php

    require_once('config/configure.php');
    
    spl_autoload_register(
        function($className)
        {
            require_once('libraries/' . $className . '.php');
        });

?>