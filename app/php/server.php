<?php

    include_once('config.php');

    // Prevent the server from timing out
    set_time_limit(0);

    // Include the web sockets server script (the server is started at the far bottom of this file)
    require 'class.PHPWebSocket.php';

    // When a client sends data to the server
    function wsOnMessage($clientID, $message, $messageLength, $binary)
    {
        global $Server;
        $ip = long2ip($Server->wsClients[$clientID][6]);

        // Check if message length is 0
        if($messageLength == 0)
        {
            $Server->wsClose($clientID);
            return;
        }

        // The speaker is the only person in the room. Don't let them feel lonely.
        if(sizeof($Server->wsClients) == 1)
            $Server->wsSend($clientID, "");
        else
            // Send the message to everyone but the person who said it
            foreach($Server->wsClients as $id => $client)
                // if ($id != $clientID)
                    // $Server->wsSend($id, "Visitor $clientID ($ip) said \"$message\"");
                    // Aquí recibimos la acción con los demás parámetros e identificadores
                    $Server->wsSend($id, $message);
    }

    // When a client connects
    function wsOnOpen($clientID)
    {
        global $Server;
        $ip = long2ip($Server->wsClients[$clientID][6]);

        $Server->log("");

        // Send a join notice to everyone but the person who joined
        foreach($Server->wsClients as $id => $client)
            if($id != $clientID)
                $Server->wsSend($id, "");
    }

    // When a client closes or lost connection
    function wsOnClose($clientID, $status)
    {
        global $Server;
        $ip = long2ip($Server->wsClients[$clientID][6]);

        $Server->log("");

        // Send a join notice to everyone but the person who joined
        foreach($Server->wsClients as $id => $client)
            $Server->wsSend($id, "");
    }

    $Server = new PHPWebSocket();
    $Server->bind('message', 'wsOnMessage');
    $Server->bind('open', 'wsOnOpen');
    $Server->bind('close', 'wsOnClose');

    $Server->wsStartServer(SOCKET_BACKEND_IP, SOCKET_BACKEND_PORT);

?>