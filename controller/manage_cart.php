<?php
session_start();

if (isset($_POST['submit'])) {
    $name_prodect = $_POST['name_prodect'];
    $price =  $_POST['price'];
    $quantity =  $_POST['quantity'];
    $descount =  $_POST['descount'];
    $ssn_farmer = $_POST['ssn_farmer'];
    $id_prodect  =  $_POST['id_prodect'];


    $count  =  count($_SESSION['cart']);
    $_SESSION['cart'][$count]  =  array(
        'name_prodect' => $name_prodect,
        'price' => $price,
        'quantity' => $quantity,
        'descount' => $descount,
        'ssn_farmer' => $ssn_farmer,
        'id_prodect' => $id_prodect

    );
    echo "<script>
        alert('Item  Add ');
        window.location.replace('../view/shoping.php');
        </script>";
}


if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name_prodect'] == $_POST['prodect_name']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>
                  alert('Item Removed');
                  window.location.replace('../view/Orders.php');

               </script>";
        }
    }
}