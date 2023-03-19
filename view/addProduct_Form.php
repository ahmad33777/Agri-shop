

<!DOCTYPE html>
<html lang="ar" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/formStyle.css">
  <title>إضافة منتجات</title>
</head>
<body>

<form action="../controller/addProduct_code.php" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>إضافة منتجات(خاص بالمزارعين)</h1>
    <p>يرجى ملء هذا النموذج لإضافة المنتج .</p>
    <hr>

    <label for="name_product"><b>اسم المنتج</b></label>
    <input type="text" placeholder="إدخل اسم المنتج" name="name_product" id="name_product" required>

    <label for="price_product"><b>سعر المنتج</b></label>
    <input type="text" placeholder="إدخل سعر المنتج" name="price_product" id="price_product" required>

    <label for="quantity_product"><b>الكمية</b></label>
    <input type="text" placeholder="إدخل الكمية" name="quantity_product" id="quantity_product" required>

    <label for="discount_value_product"><b>نسبة الخصم</b></label>
    <input type="text" placeholder="إدخل نسبة الخصم" name="discount_value_product" id="discount_value_product" required>
   
    <label for="delivery_price"><b>سعر التوصيل</b></label>
    <input type="text" placeholder="إدخل سعر التوصيل" name="delivery_price" id="delivery_price" required>
    <div class="form-group">
                <input class="form-control" type="file" name="product_image" value="" />
            </div>
    <hr>
    <button type="submit" class="registerbtn" name="addProduct">إضافة المنتج</button>
  </div>
  
  
</form>

</body>
</html>