<?php

$servername= "localhost"; /*change when u get online database*/
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem2020RocketInventory";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
