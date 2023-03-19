<?php
session_start();
include "connectionDB.php";
$id =  $_GET['idOrder'];

$sql = "UPDATE orders set state_order = 1 where  id = $id ";
$result = $conn->query($sql);
header("Location:../view/viewOrder.php");