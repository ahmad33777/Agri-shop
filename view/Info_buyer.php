 <?php
    session_start();
    include "../controller/connectionDB.php";
    ?>
 <!DOCTYPE html>
 <html lang="ar" dir="rtl">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>معلومات المشتري </title>
     <link rel="stylesheet" href="../css/dashboard_style.css">
     <style>
     .info {
         margin: 150px;
         font-family: 'Courier New', Courier, monospace;
     }
     </style>
 </head>

 <body>
     <div class="text_header">أهلا وسهلا بك في لوحة التحكم </div>
     <nav class="menubar">
         <ul>
             <li>
                 <div class="text">قائمة العمليات</div>
             </li>
             <li><a href="viewOrder.php" style="padding-left: 0px;">عرض الطلبات </a></li>
             <li>
                 <form action="" method="post">
                     <input type="submit" value="خروج" name="logout">
                 </form>
             </li>
         </ul>
     </nav>
     <?php
        $id =  $_GET['ssn_buyer'];
        $sql = "SELECT * FROM buyer where ssn_buyer = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
     <div class="info">
         <h1 class="titel">معلومات المشتري </h1>
         <br>
         <h2 class="name">الأسم : <?php echo $row['name_buyer']; ?> </h2>
         <br>
         <h2 class="snn">رقم الهوية : <?php echo $row['ssn_buyer']; ?> </h2>
         <br>
         <h2 class="addres">العنوان : <?php echo $row['address_buyer']; ?> </h2>
         <br>
         <h2 class="email">البريد الألكتروني : <?php echo $row['email']; ?> </h2>




     </div>

 </body>

 </html>
 <?php
    $conn->close();
    ?>