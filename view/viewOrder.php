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
            <li><a href="dashboard.php" style="padding-left:0px ;">القائمة الرئيسية</a></li>

            <li><a href="viewProduct.php" style="padding-left:0px ;">عرض منتجاتك</a></li>

        </ul>
    </nav>

    <table id="customers" style="width:83.7%">
        <tr>
            <th>هوية المشتري</th>
            <th>كود المنتج</th>
            <th>تاريخ الطلب</th>
            <th>بيانات المشتري</th>
            <th>قبول</th>
        </tr>



        <?php
        $sql = "SELECT * FROM orders";
        $result = $conn->query($sql);











        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["ssn_buyer"] ?></td>
            <td><?php echo $row["id_product"] ?></td>
            <td><?php echo $row["order_date"] ?></td>
            <td> <a class="btnUpdate" href="Info_buyer.php?ssn_buyer=<?php echo $row["ssn_buyer"]; ?>">عرض</a>
            </td>
            <td> <a class=" btnUpdate"
                    href="../controller/updateOrder_code.php?idOrder=<?php echo $row["id"]; ?>"><?php
                                                                                                                            if ($row["state_order"] == 0) {
                                                                                                                                echo "قبول الطلب";
                                                                                                                            } else {
                                                                                                                                echo "الطلب مقبول";
                                                                                                                            }
                                                                                                                            ?>
                </a>
            </td>
        </tr>
        <?php
            }
        }
        ?>




    </table>
    <script>
    function show_alert_info($id_buyer) {
        $name = "";
        // $phone = "";
        <?php
            $sql = "SELECT name_buyer FROM buyer where ssn_buyer  = $id_buyer";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $name = $row['name_buyer'];
            ?>
        alert($name);
    }
    </script>
</body>

</html>
<?php
$conn->close();
?>