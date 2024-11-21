<?php
set_time_limit(0);
ob_implicit_flush();
$server = stream_socket_server("tcp://192.168.0.108:8080", $errno, $errstr, $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN);

if (!$server) {
    echo "$errstr ($errno)<br />\n";
} else {
    while ($conn = stream_socket_accept($server, null, $peer_name)) {
        // $buffer = '';
        // while ($buffer === '') {
        // $buffer = fread($conn, 1024); // Read in chunks
        // if (strpos($buffer, "\r\n\r\n") !== false) { // Check for end of headers
        //     break;  // End of headers, continue processing
        //     }
        // }
        // // Normalize line breaks and split the headers into an array
        // $buffer = str_replace("\r\n", "\n", $buffer);
        // $lines = explode("\n", $buffer);
        // var_dump($lines);

        $header = fread($conn, 1024);
        $header = str_replace("\r\n", "\n", $header);
        $header = explode("\n", $header);
        $header01 = [];
        foreach ($header as $head) {
            $head = explode(":", $head);
            $header01[$head[0]] = $head[1]??0;
        }
        var_dump($header01);
        // var_dump(trim($header01["Sec-WebSocket-Key"]));
    }
    fclose($server);
}
