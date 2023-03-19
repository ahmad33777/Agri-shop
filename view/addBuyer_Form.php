<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formStyle.css">
    <title>إنشاء حساب مشتري</title>
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

    <form action="../controller/addBuyer_code.php" method="POST">
        <div class="container">
            <h1>إنشاء حساب (خاص بالبائعين)</h1>
            <p>يرجى ملء هذا النموذج لإنشاء حساب.</p>
            <hr>

            <label for="ssn_buyer"><b>رقم الهوية</b></label>
            <input type="text" placeholder="إدخل رقم الهوية" name="ssn_buyer" id="ssn_buyer" required>

            <label for="name_buyer"><b>الأسم رباعي</b></label>
            <input type="text" placeholder="إدخل الأسم رباعي " name="name_buyer" id="name_buyer" required>

            <label for="email_buyer"><b> البريدالإلكتروني</b></label>
            <input type="email"
                style=" width: 100%;padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1;"
                placeholder="إدخل البريدالإلكتروني " name="email_buyer" id="email_buyer" required>

            <label for="phone_buyer"><b>رقم الجوال</b></label>
            <input type="text" placeholder="إدخل رقم الجوال" name="phone_buyer" id="phone_buyer" required>

            <label for="address_buyer"><b>العنوان</b></label>
            <input type="text" placeholder="إدخل العنوان" name="address_buyer" id="address_buyer" required>

            <label for="password_buyer"><b>كلمة المرور</b></label>
            <input type="password" placeholder="إدخل كلمة المرور" name="password_buyer" id="password_buyer" required>

            <hr>
            <p>من خلال إنشاء حساب فإنك توافق على الشروط والخصوصية.</p>

            <button type="submit" class="registerbtn" name="createAccountBuyer">إنشاء الحساب</button>
        </div>

        <div class="container signin">
            <p>هل لديك حساب؟ <a href="login.php">تسجيل الدخول</a>.</p>
            <p><a href="index.php">الصفحة الرئيسية</a></p>

        </div>
    </form>

</body>

</html>