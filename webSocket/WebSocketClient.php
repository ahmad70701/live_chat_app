<?php


$client = stream_socket_client("tcp://192.168.0.108:8080", $errno, $errstr,$flags = STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT);
if (!$client) {
    echo "$errstr ($errno)<br />\n";
} else {
    echo "connected successfully\n";
    while(true){
        echo fread($client, 100);
        $stdin = fopen('php://stdin', 'r');
        $line = trim(fgets(STDIN));
        fwrite($client, $line);
    }

}
