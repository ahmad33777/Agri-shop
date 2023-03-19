<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" />

    <title>Agri Shap</title>
    <style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        text-align: center;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }



    .dropbtn {
        background-color: transparent;
        border: none;
        color: white;
        font-size: 18px;
        padding: 10px;
    }
    </style>
</head>
<!-- Header -->
<header id="home" class="header" style="  background-image: url('../images/background1.jpg');">
    <!-- Navigation -->
    <nav class="nav">
        <div class="navigation container">
            <div class="logo">
                <h1>Agri Shap</h1>
            </div>
            <div class="menu">
                <ul class="nav-list">
                    <!-- <li class="nav-item">
                        <a href="shoping.php" class="nav-link scroll-link">المنتجات</a>
                    </li> -->

                    <li class="nav-item">
                        <!-- <a href="create_new_account.php" class="nav-link scroll-link"> -->
                        <div class="dropdown">
                            <button class="dropbtn">تسجيل دخول</button>
                            <div class="dropdown-content dropdowLi">
                                <a href="login.php" style="font-size:15px ;">كمزارع</a>
                                <a href="login_buyer.php" style="font-size:15px ;">كمشتري</a>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <!-- <a href="create_new_account.php" class="nav-link scroll-link"> -->
                        <div class="dropdown">
                            <button class="dropbtn">إنشاء حساب</button>
                            <div class="dropdown-content dropdowLi">
                                <a href="addFarmer_Form.php" style="font-size:15px ;"> كمزارع</a>
                                <a href="addBuyer_Form.php" style="font-size:15px ;"> كمشتري </a>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link scroll-link"><img src="../images/cart.png" alt="cart"
                                class="cart_logo"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->

    <div class="hero-content">
        <h2><span class="discount">30% </span> خصم</h2>
        <h1>لجميع المنتجات الزراعية </h1>
        <a class="btn" href="index.php">تسوق &nbsp;الأن</a>
    </div>
</header>

</body>

</html>