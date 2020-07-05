<?php

    // include_once('../../public/php/config.php');
    include_once(RUTA_APP . '/php/device.php');
    include_once(RUTA_APP . '/php/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Online</title>

    <?php
    
        if($tablet_browser > 0)
        {
            echo '<link rel="stylesheet" type="text/css" href="' . RUTA_URL . 'css-chat/stylesMobile.css">';
        }
        else if($mobile_browser > 0)
        {
            echo '<link rel="stylesheet" type="text/css" href="' . RUTA_URL . 'css-chat/stylesMobile.css">';
        }
        else
        {
            echo '<link rel="stylesheet" type="text/css" href="' . RUTA_URL . 'css-chat/styles.css">';
        }
    
    ?>

    <script type="text/javascript">
        var urlPort = '<?=SOCKET_FRONTEND;?>';
    </script>
    <script src="<?=RUTA_URL;?>js-chat/jquery-3.5.0.js" type="text/javascript"></script>
    <script src="<?=RUTA_URL;?>js-chat/fancywebsocket.js" type="text/javascript"></script>
    <script src="<?=RUTA_URL;?>js-chat/myjava.js" type="text/javascript"></script>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            Bienvenido <span id="userName" style="color:#424242;"></span>
        </div>

        <div id="content">
            <ul id="containerMessages"></ul>
        </div>

        <div id="footer">
            <form id="formChat" type="name">
                <table>
                    <tr>
                        <td width="90%"><input type="text" placeholder="¿Cuál es tu nombre?" id="name"
                            autofocus autocomplete="off"></td>
                        <td><input type="submit" value="Ingresar" id="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>