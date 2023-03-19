<?php

session_start();
include "../controller/connectionDB.php";

if ($_SESSION["farmer_active"] == "") {
  header("Location: login.php");
}

if (isset($_POST["logout"])) {
  session_unset();
  session_destroy();
  header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="../css/dashboard_style.css">

</head>

<body>
    <div class="text_header">أهلا وسهلا بك في لوحة التحكم </div>

    <nav class="menubar">
        <ul>
            <li>
                <div class="text">قائمة العمليات</div>
            </li>
            <li><a href="addProduct_Form.php" style="padding-left: 0px;">إضافة منتج</a></li>
            <li><a href="viewProduct.php" style="padding-left: 0px;">عرض منتجاتك</a></li>
            <li><a href="viewOrder.php" style="padding-left: 0px;">عرض الطلبات</a></li>
            <li>
                <form action="" method="post">
                    <input type="submit" value="خروج" name="logout">
                </form>
            </li>
        </ul>
    </nav>

    <table id="customers" style="width:83.7%">
        <tr>
            <th>اسم المنتج</th>
            <th>سعر المنتج</th>
            <th>كمية المنتج</th>
            <th>نسبة الخصم</th>
            <th>حذف</th>
            <th>تحديث</th>
        </tr>



        <?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

      while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["name_product"] ?></td>
            <td><?php echo $row["price_product"] ?></td>
            <td><?php echo $row["quantity_product"] ?></td>
            <td><?php echo $row["discount_value_product"] ?></td>
            <td> <a class="btnDelete"
                    href="../controller/deleteProduct_code.php?productId=<?php echo $row["id"]; ?>">حذف</a></td>
            <td> <a class="btnUpdate"
                    href="../controller/updateProduct_code.php?productId=<?php echo $row["id"]; ?>">تحديث</a></td>
        </tr>
        <?php }
    }
    $conn->close();
    ?>

    </table>
</body>

</html>