SecWebSocketKey=$(head -c 16 /dev/urandom | base64)

curl -i -X GET "http://192.168.0.108:8080/ws/" \
  -H "Host: 192.168.0.108:8080" \
  -H "Connection: Upgrade" \
  -H "Upgrade: websocket" \
  -H "Sec-WebSocket-Key: $SecWebSocketKey" \
  -H "Sec-WebSocket-Version: 13" \
  -H "Origin: http://localhost"
