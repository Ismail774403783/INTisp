<?php

/*
 * Adaclare IntISP System
 * Copyright Adaclare Technologies 2007-2018
 * https://www.adaclare.com
 * https://github.com/INTisp
 *
 */

require 'config.php';
 $port = rand(1000, 9999);
mkdir('/var/webister/'.$port);
$conn = mysqli_connect("$host", "$user", "$pass", 'webister');
$sql  = "INSERT INTO Users (id, username, password, bandwidth, diskspace, port)
VALUES ('".$port."', '".$_GET['username']."', '".sha1($_GET['password'])."','0','".$_GET['quota']."','".$port."')";
if ($conn->query($sql) === TRUE) {
} else {
    die('1');
}
$conn->close();
echo $port;
