<?php

session_start();
include "connectionDB.php";
if (isset($_POST["login"])) {
  $email_buyer = $_POST["email_buyer"];
  $password_buyer = md5($_POST["password_buyer"]);
  $sql = "SELECT * FROM buyer where email='$email_buyer' and password_buyer ='$password_buyer'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      $_SESSION["buyer_active"] = "true";
      $_SESSION["ssn_buyer"] = $row["ssn_buyer"];
      $_SESSION["name_buyer"] = $row["name_buyer"];
      $_SESSION["phone_buyer"] = $row["phone_buyer"];
      $_SESSION["address_buyer"] = $row["address_buyer"];
      $_SESSION["email"] = $row["email"];
      header("Location: ../view/shoping.php");
    }
  } else {
    header("Location: ../view/login_buyer.php");
  }
}

$conn->close();