<?php
session_start();
include "../controller/connectionDB.php";


?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض المنتجات</title>
    <style>
    body {
        direction: rtl;
    }

    .text_header {
        color: white;
        font-size: 25px;
        font-weight: 600;
        line-height: 65px;
        text-align: center;
        background-color: #04AA6D;
        letter-spacing: 1px;
        height: 60px;
    }

    .text_header a {
        color: white;
        font-size: 20px;
        float: left;
        padding-left: 10px;
    }

    /* prodects */
    .prodectContainer {
        width: 99%;
        display: flex;
        flex-wrap: wrap;
        padding: 10px;
        margin-bottom: 60px;
    }

    .prodects {
        margin-top: 80px;
        margin-left: 60px;
        width: 301px;
        direction: rtl;
        box-shadow: 0 0.5rem 1.5rem rgb(0 0 0 / 15%);
        border-radius: 10px;
    }

    .card {
        width: 300px;
        height: 350px;
        background-color: #04AA6D;
        border-radius: 10px;
        padding-bottom: 5px;
    }

    .card .image {
        width: 100%;
        height: 70%;
        background-color: rgba(163, 140, 140, 0.179);
        background-size: contain;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card .image img {
        width: 100%;
        height: 100%;
    }

    .details {
        height: 30%;
        margin-top: 30px;
        text-align: center;
        line-height: 30px;
    }

    .details p {
        display: inline;
        padding: 30px;
        font-weight: 400;
        color: white;
        font-weight: bold;
    }

    .details p span {
        color: black;
        font-weight: bold;
        padding-left: 2px;
    }

    .details .p {
        color: red;
        font-weight: bolder;
    }
    </style>
</head>

<body>
    <div class="text_header">قائمة منتجاتك
        <a href="dashboard.php">رجوع</a>
    </div>
    <div class="prodectContainer">

        <?php
        $ssn_farmer = $_SESSION["ssn_farmer"];
        $sql = "SELECT * FROM products where ssn_farmer='$ssn_farmer'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
        <div class="prodects">
            <div class="card">
                <div class="image">
                    <img src="../images/<?php echo $row["image_product"]; ?>" alt="Prodect">
                </div>
                <div class="details">
                    <p> <span>الأسم : </span> <?php echo  $row["name_product"]; ?></p>
                    <p> <span>الكمية : </span> <?php echo  $row["quantity_product"]; ?></p>
                    <p> <span>السعر : </span> <?php echo  $row["price_product"]; ?>$</p>
                    <p class="p"> <span>الخصم : </span><?php echo  $row["discount_value_product"]; ?></p>
                </div>
            </div>

        </div>
        <?php }
        }  ?>


</body>

</html>