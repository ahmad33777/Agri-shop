

<?php

include "connectionDB.php";
if(isset($_POST["updateProduct"])){
  $product_id=$_GET["productId"];
  $price_product = $_POST['price_product'];
  $quantity_product = $_POST['quantity_product'];
  $discount_value_product = $_POST['discount_value_product'];
  $delivery_price=$_POST["delivery_price"];
  $sql = "UPDATE products SET price_product =$price_product , quantity_product=$quantity_product ,discount_value_product=$discount_value_product , delivery_price =$delivery_price WHERE id=$product_id";

  if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('تم التحديث بنجاح');
 </script>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}


$conn->close();

?>
<!DOCTYPE html>
<html lang="ar" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/formStyle.css">
  <title>تحديث المنتج</title>
</head>
<body>

<form action="" method="POST">
  <div class="container">

    <label for="price_product"><b>سعر المنتج</b></label>
    <input type="text" placeholder="إدخل سعر المنتج" name="price_product" id="price_product" required>

    <label for="quantity_product"><b>الكمية</b></label>
    <input type="text" placeholder="إدخل الكمية" name="quantity_product" id="quantity_product" required>

    <label for="discount_value_product"><b>نسبة الخصم</b></label>
    <input type="text" placeholder="إدخل نسبة الخصم" name="discount_value_product" id="discount_value_product" required>

    <label for="delivery_price"><b>سعر التوصيل</b></label>
    <input type="text" placeholder="إدخل سعر التوصيل" name="delivery_price" id="delivery_price" required>
    
    <hr>
    <button type="submit" class="registerbtn" name="updateProduct">تحديث المنتج</button>
  </div>
  
  
</form>

</body>
</html>