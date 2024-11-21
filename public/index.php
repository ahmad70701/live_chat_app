<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing</title>
</head>
<body>
    <button onclick= "handleWebSocket()">Send Websocket Request</button>
</body>

<script>
function handleWebSocket(){
        // Define the WebSocket server URL
const serverUrl = "ws://192.168.0.108:8080";  // Use "ws://" for non-secure connection, or "wss://" for secure

// Create a new WebSocket connection
const socket = new WebSocket(serverUrl);



}
</script>
</html>