<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formStyle.css">
    <title>إنشاء حساب المزارع</title>
    <style>
    /* The alert message box */
    .alert {
        padding: 20px;

        color: white;
        margin-bottom: 15px;
    }

    /* The close button */
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    /* When moving the mouse over the close button */
    .closebtn:hover {
        color: black;
    }
    </style>
</head>

<body>

    <form action="../controller/addFarmer_code.php" method="POST">
        <div class="container">
            <h1>إنشاء حساب (خاص بالمزارعين)</h1>
            <p>يرجى ملء هذا النموذج لإنشاء حساب.</p>
            <hr>

            <label for="ssn_farmer"><b>رقم الهوية</b></label>
            <input type="text" placeholder="إدخل رقم الهوية" name="ssn_farmer" id="ssn_farmer" required>

            <label for="name_farmer"><b>الأسم رباعي</b></label>
            <input type="text" placeholder="إدخل الأسم رباعي " name="name_farmer" id="name_farmer" required>

            <label for="phone_farmer"><b>رقم الجوال</b></label>
            <input type="text" placeholder="إدخل رقم الجوال" name="phone_farmer" id="phone_farmer" required>

            <label for="address_farmer"><b>العنوان</b></label>
            <input type="text" placeholder="إدخل العنوان" name="address_farmer" id="address_farmer" required>

            <label for="password_farmer"><b>كلمة المرور</b></label>
            <input type="password" placeholder="إدخل كلمة المرور" name="password_farmer" id="password_farmer" required>

            <hr>
            <p>من خلال إنشاء حساب فإنك توافق على الشروط والخصوصية.</p>

            <button type="submit" class="registerbtn" name="createAccountFarmer">إنشاء الحساب</button>
        </div>

        <div class="container signin">
            <p>هل لديك حساب؟ <a href="login.php">تسجيل الدخول</a>.</p>
            <p><a href="index.php">الصفحة الرئيسية</a></p>

        </div>
    </form>

</body>

</html>