<?php
$msg="";
$status=-1;
include "connectionDB.php";
$product_id=$_GET["productId"];
// sql to delete a record
$sql = "DELETE FROM products WHERE id=$product_id";

if ($conn->query($sql) === TRUE) {
  $msg="تم حذف المنتج بنجاح";
  $status=1;
} else {
  $msg="حدثت مشكلة";
  $status=0;
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
      window.location.replace("../view/dashboard.php");
    }
  </script>


</body>

</html>