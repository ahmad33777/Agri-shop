<?php
session_start();
include "connectionDB.php";

if (isset($_POST['save_prodect'])) {
  if (isset($_SESSION['cart'])) {
    $ssn_buyer =  $_SESSION["ssn_buyer"];
    foreach ($_SESSION['cart'] as $key => $value) {
      $ssn_farmer =  $value['ssn_farmer'];
      $id_prodect = $value['id_prodect'];

      $sql = "INSERT INTO orders (ssn_farmer ,ssn_buyer ,id_product ,state_order)
                          VALUES ('$ssn_farmer', '$ssn_buyer', $id_prodect,0)";
      $result =  $conn->query($sql);
      if ($result == true) {
        echo "
          <script> alert('تم تأكيد عملية الشراء بنجاح');
          window.location.href = '../view/shoping.php';
          </script>
          ";
      } else {
        echo "
        <script> 
          alert('فشل تأكيد الطلب . يرجى المحاولة لاحقاَ');
          window.location.href = '../view/shoping.php';
         </script>
          ";
        // echo $conn->error;
      }
    } //end for loop
  } else {
    echo     "<script> 
              alert('فشل تأكيد الطلب . يرجى المحاولة لاحقاَ');
              window.location.href = '../view/shoping.php';
             </script>";
  }
}
// $sql = "INSERT INTO orders (ssn_farmer , ssn_buyer , id_product )
// VALUES ('123321', '222', 1)";

// if ($conn->query($sql) === TRUE) {
// echo "New record created successfully";
// } else {
// echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();