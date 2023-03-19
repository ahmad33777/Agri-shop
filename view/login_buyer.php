<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        direction: rtl;
    }

    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 15%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <form action="../controller/loginBuyer_code.php" method="post">
        <div class="imgcontainer">
            <img src="../images/loginImage.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="email_buyer"><b>البريد الإلكتروني</b></label>
            <input type="text" placeholder=" إدخل البريد الإلكتروني" name="email_buyer" required>

            <label for="password_buyer"><b>كلمة المرور</b></label>
            <input type="password" placeholder="إدخل كلمة المرور" name="password_buyer" required>

            <button type="submit" name="login">تسجيل الدخول</button>
        </div>

        <div style="padding: 16px; background-color: white;background-color: #f1f1f1;text-align: center;">
            <p>لا يوجد لديك حساب؟ <a href="addBuyer_Form.php">إنشاء حساب </a>.</p>
            <p><a href="index.php">الصفحة الرئيسية</a></p>

        </div>
    </form>
</body>

</html>