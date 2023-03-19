<?php
session_start();
// session_destroy();
?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <style>
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    html {
        scroll-behavior: smooth;
        box-sizing: border-box;
        font-size: 62.5%;
    }

    body {
        direction: rtl;
        font-size: 1.8rem;
        font-weight: 500;
        background-color: #fff;
        color: white;
        position: relative;
        z-index: 1;
        margin: 0px;
    }

    h1,
    h2,
    h3,
    h4 {
        font-weight: 500;
    }

    a {
        color: inherit;
        text-decoration: none;
    }



    li {
        list-style: none;
    }

    .container {
        max-width: 120rem;
        margin: 0 auto;
    }

    .container-md {
        max-width: 100rem;
        margin: 0 auto;
    }

    @media only screen and (max-width: 1200px) {
        .container {
            padding: 0 3rem;
        }

        .container-md {
            padding: 0 3rem;
        }
    }

    /* Header */
    .header {
        position: relative;
        width: 100%;
        background-color: rgba(225, 220, 220, 0.633);
        overflow: hidden;
    }

    .nav {
        padding: 1.6rem 0;
        background-color: rgb(36, 143, 12);
    }

    .cart_logo {
        width: 30px;
        height: 30px;

    }

    .nav.fix-nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #243a6f;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        z-index: 999;
    }

    .nav.fix-nav .nav-link,
    .nav.fix-nav .logo,
    .nav.fix-nav .cart-icon,
    .nav.fix-nav .hamburger {
        color: #fff;
    }

    .navigation {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .logo h1 {
        font-size: 2.5rem;
    }

    .nav-list {
        display: flex;
        align-items: center;
    }

    .nav-item:not(:last-child) {
        margin-right: 0.5rem;
    }

    .nav-link:link,
    .nav-link:visited {
        padding: 0.8rem 1rem;
        transition: all 300ms ease-in-out;
    }





    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        text-align: center;
        color: #000;
    }

    #customers td,
    #customers th {
        padding: 8px;
        text-align: center;
    }

    #customers tr {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: rgb(36, 143, 12);
        color: white;

    }

    .btnDelete {
        background-color: red;
        color: white;
        border: none;
        font-size: 16px;
        padding: 5px;
        width: 80px;
    }

    .btnDelete:hover {
        background-color: #692525;
        cursor: pointer;
        transition: 0.8s;
    }

    .button {
        background-color: rgb(36, 143, 12);
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 10px;
        font-weight: 400;
    }

    .button:hover {
        background-color: hwb(109deg 11% 78%);
        cursor: pointer;
        transition: 0.8s;
    }
    </style>
</head>



<body>
    <header id="home" class="header">
        <!-- Navigation -->
        <nav class="nav">
            <div class="navigation container">
                <div class="logo">
                    <h1>Agri Shap</h1>
                </div>
                <div class="menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="shoping.php" class="nav-link scroll-link">المنتجات</a>
                        </li>

                        <li class="nav-item">
                            <form action="../controller/logout.php" method="POST">
                                <input type="submit" value=" تسجيل خروج" name="logout"
                                    style="background-color: transparent; border: none; color: white; font-size: 16px;">
                            </form>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <br><br>


    <div class="container">
        <table id="customers">
            <h1 style="direction: rtl; color: #000; padding: 20px; ;">جميع المنتجات المضافة </h1>

            <tr>
                <th>أسم المنتج </th>
                <th>السعر </th>
                <th>الكمية</th>
                <th>الخصم</th>
                <th></th>

            </tr>
            <?php
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) { ?>
            <tr>
                <td> <?php echo $value['name_prodect']; ?> </td>
                <td><?php echo "$" . $value['price']; ?></td>
                <td><input type="number" value="<?php echo $value['quantity']; ?>" min='1' max='250'></td>
                <td><?php echo $value['descount']; ?></td>
                <form action="../controller/manage_cart.php" method="POST">
                    <td><button class="btnDelete" type="submit" name="remove"> حذف</button></td>
                    <input type="hidden" name="prodect_name" value="<?php echo $value['name_prodect']; ?>">
                </form>
            </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
    <br><br><br>

    <form action="../controller/addOrder_code.php" method="POST">
        <div class=" container">
            <input type="submit" class="button" name="save_prodect" value="تأكيد عملية الشراء">
            <!-- <button class="button" name="saveProdect">تأكيد عملية الشراء</button> -->
        </div>

    </form>








</body>

</html>