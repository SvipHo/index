<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 2015/11/24
 * Time: 20:45
 */
error_reporting(E_ALL);
//端口111
$service_port = 4002;
//本地
$address = 'localhost';
//创建 TCP/IP socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket < 0) {
    echo "socket fail: " . socket_strerror($socket) . "\n";
} else {
    echo "OK，HE HE.\n";
}
$result = socket_connect($socket, $address, $service_port);
if ($result < 0) {
    echo "SOCKET fail reason: ($result) " . socket_strerror($result) . "\n";
} else {
    echo "OK.\n";
}
//发送命令
$in = "HEAD / HTTP/1.1\r\n";
$in .= "Connection: Close\r\n\r\n";
$out = '';
echo "Send Command..........";
$in = "\n";
socket_write($socket, $in, strlen($in));
echo "OK.\n";
echo "Reading Backinformatin:\n\n";
while ($out = socket_read($socket, 2048)) {
    echo $out;
}
echo "Close socket........";
socket_close($socket);
echo "OK,He He.\n\n";
?>