<?php
session_start();
$_SESSION["cart"];
include "../controller/connectionDB.php";
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prodect_style.css" />

    <title>All Prodects</title>
    <style>
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="home" class="header">
        <!-- Navigation -->
        <nav class="nav">
            <div class="navigation container">
                <div class="logo">
                    <h1>Agri Shap</h1>
                </div>
                <div class="menu">
                    <ul class="nav-list">
                        <Li>
                            <form action="" method="get" class="example">
                                <input type="text" placeholder="الأسم , السعر ,نسبة الخصم" style="text-align: center;"
                                    name=" search"
                                    value="<?php if (isset($_GET['search'])) {
                                                                                                                                                    echo $_GET['search'];
                                                                                                                                                } ?>">
                                <button type="submit"><i class="fa fa-search"></i> بحث</button>
                            </form>
                        </Li>
                        <li class="nav-item">
                            <a href="orders.php" class="nav-link scroll-link"><img src="../images/cart.png" alt="cart"
                                    class="cart_logo"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="prodectContainer ">
        <?php
        if (isset($_GET['search'])) {
            $filtrevalue = $_GET['search'];
            $sql = "SELECT * FROM products WHERE name_product LIKE '%$filtrevalue%' || price_product like '%$filtrevalue%' ||ssn_farmer like '% $filtrevalue%'  ";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
        <div class=" prodects">
            <div class="card">
                <div class="item">
                    <img src="../images/<?php echo $row["image_product"]; ?>" alt="Prodect">
                </div>
                <form action="../controller/manage_cart.php" method="POST">
                    <div class="details">
                        <p> <span>الأسم : </span> <?php echo  $row["name_product"]; ?></p>
                        <p> <span>الكمية : </span> <?php echo  $row["quantity_product"]; ?></p>
                        <p> <span>السعر : </span> <?php echo  $row["price_product"]; ?>$</p>
                        <p class="p"> <span>الخصم : </span><?php echo  $row["discount_value_product"]; ?></p>
                        <input type="hidden" name="name_prodect" value="<?php echo  $row["name_product"]; ?>"
                            id="name_prodect">
                        <input type="hidden" name="price" value="<?php echo  $row["price_product"]; ?>" id="price">
                        <input type="hidden" name="quantity" value="<?php echo  $row["quantity_product"]; ?>"
                            id="quantity">
                        <input type="hidden" name="descount" id="descount"
                            value="<?php echo  $row["discount_value_product"]; ?>">
                        <input type="hidden" name="ssn_farmer" id="ssn_farmer"
                            value="<?php echo  $row["ssn_farmer"]; ?>">
                        <input type="hidden" name="id_prodect" value="<?php echo  $row["id"]; ?>">
                        <div class="btnContainer">
                            <button class="btn" type="submit" name="submit"
                                style="width: 70px;  padding: 6px;">إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
            }
        } else {
            if (isset($_GET['search'])) {
                $filtrevalue = $_GET['search'];
                $sql = "SELECT * FROM products WHERE name_product LIKE '%$filtrevalue%' || price_product like '%$filtrevalue%' ||ssn_farmer like '% $filtrevalue%'  ";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) { ?>
        <div class=" prodects">
            <div class="card">
                <div class="item">
                    <img src="../images/<?php echo $row["image_product"]; ?>" alt="Prodect">
                </div>
                <form action="../controller/manage_cart.php" method="POST">
                    <div class="details">
                        <p> <span>الأسم : </span> <?php echo  $row["name_product"]; ?></p>
                        <p> <span>الكمية : </span> <?php echo  $row["quantity_product"]; ?></p>
                        <p> <span>السعر : </span> <?php echo  $row["price_product"]; ?>$</p>
                        <p class="p"> <span>الخصم : </span><?php echo  $row["discount_value_product"]; ?></p>
                        <input type="hidden" name="name_prodect" value="<?php echo  $row["name_product"]; ?>"
                            id="name_prodect">
                        <input type="hidden" name="price" value="<?php echo  $row["price_product"]; ?>" id="price">
                        <input type="hidden" name="quantity" value="<?php echo  $row["quantity_product"]; ?>"
                            id="quantity">
                        <input type="hidden" name="descount" id="descount"
                            value="<?php echo  $row["discount_value_product"]; ?>">
                        <input type="hidden" name="ssn_farmer" id="ssn_farmer"
                            value="<?php echo  $row["ssn_farmer"]; ?>">
                        <input type="hidden" name="id_prodect" value="<?php echo  $row["id"]; ?>">
                        <div class="btnContainer">
                            <button class="btn" type="submit" name="submit"
                                style="width: 70px;  padding: 6px;">إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
                }
            }
        }
        ?>



    </div><!-- prodectContainer -->



</body>

</html>

</html>