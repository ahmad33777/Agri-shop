<?php
session_start();
$ssn_farmer=$_SESSION["ssn_farmer"];
include "connectionDB.php";

$msg = "";
$status = -1;

if (isset($_POST["addProduct"])) {
  $name_product = $_POST['name_product'];
  $price_product = $_POST['price_product'];
  $quantity_product = $_POST['quantity_product'];
  $discount_value_product = $_POST['discount_value_product'];
  $delivery_price=$_POST["delivery_price"];

  $filename = $_FILES["product_image"]["name"];
  $tempname = $_FILES["product_image"]["tmp_name"];
  $folder = "../images/" .$filename;
  move_uploaded_file($tempname, $folder);


$sql = "INSERT INTO products (name_product , image_product , price_product , quantity_product , discount_value_product,ssn_farmer,delivery_price)
VALUES ('$name_product', '$filename ', $price_product,$quantity_product ,$discount_value_product ,'$ssn_farmer',$delivery_price)";

if ($conn->query($sql) === TRUE) {
  $msg = "تم إضافة المنتج بنجاح";
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
     window.location.replace("../view/addProduct_Form.php");
    }
  </script>


</body>

</html>