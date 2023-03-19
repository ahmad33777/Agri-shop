<?php

include "connectionDB.php";

$msg = "";
$status = -1;

if (isset($_POST["createAccountFarmer"])) {
  $ssn_farmer = $_POST['ssn_farmer'];
  $name_farmer = $_POST['name_farmer'];
  $phone_farmer = $_POST['phone_farmer'];
  $address_farmer = $_POST['address_farmer'];
  $password_farmer = md5($_POST['password_farmer']);

  $sql = "INSERT INTO farmers (ssn_farmer , name_farmer , phone_farmer , address_farmer , password_farmer)
VALUES ('$ssn_farmer', '$name_farmer', '$phone_farmer','$address_farmer','$password_farmer')";

  if ($conn->query($sql) === TRUE) {
    $msg = "تم إنشاء الحساب بنجاح";
    $status = 1;
  } else {
    $msg = "$conn->error حدث مشكلة وهي ";
    $status = 0;
  }
}




$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>result</title>
  <style>
    /* The alert message box */
    .alert {
      padding: 20px;
      color: white;
      margin-bottom: 15px;
    }

    /* The close button */
    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    /* When moving the mouse over the close button */
    .closebtn:hover {
      color: black;
    }
  </style>
</head>

<body>
  <?php

  if ($status == 1) {
  ?>
    <div class="alert" style="background-color: #57cc99;">
      <span class="closebtn" id="closebtn" onclick="closebtn()">&times;</span>
      <?php echo $msg; ?>
    </div>
  <?php
  } elseif ($status == 0) {
  ?>
    <div class="alert" style="background-color: red;">
      <span class="closebtn" id="closebtn" onclick="closebtn()">&times;</span>
      <?php echo $msg; ?>
    </div>
  <?php
  }
  ?>

  <script>
    $closeElement = document.getElementById("closebtn");

    function closebtn() {
      $closeElement.parentElement.style.display = "none";
      window.location.replace("../view/login.php");
    }
  </script>


</body>

</html>