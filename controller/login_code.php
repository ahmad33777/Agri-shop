<?php


session_start();
include "connectionDB.php";
if (isset($_POST["login"])) {
    $name_farmer =$_POST["name_farmer"];
    $password_farmer =md5($_POST["password_farmer"]);

    $sql = "SELECT * FROM farmers where name_farmer='$name_farmer' and password_farmer ='$password_farmer'";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION["farmer_active"]="true";
    $_SESSION["ssn_farmer"]=$row["ssn_farmer"];
    $_SESSION["name_farmer"]=$row["name_farmer"];
    $_SESSION["phone_farmer"]=$row["phone_farmer"];
    $_SESSION["address_farmer"]=$row["address_farmer"];
    $_SESSION["password_farmer"]=$row["password_farmer"];
    header("Location: ../view/dashboard.php");
  }
} else {
  header("Location: ../view/login.php");
}


}

$conn->close();

?>