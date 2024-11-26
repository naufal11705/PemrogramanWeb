<?php
$host = "LAPTOP-69O5OEH3\SQLEXPRESS";
$connInfo = array("Database" => "prakdbweb", "UID" => "sa", "PWD" => "12345");
$koneksi = sqlsrv_connect($host, $connInfo);
if (!$koneksi) {
    die(print_r(sqlsrv_errors(), true));
}
?>
