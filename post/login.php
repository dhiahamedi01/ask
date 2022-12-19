<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/login.css">
    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="login_process.php" method="POST" class="sign-in-form">
                <h2 class="title">تسجيل الدخول</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="username" name="username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <input type="submit" value="دخول" class="btn" name="login">
            </form>

               
                <p class="account-text">هل لديك حساب ؟<a href="#" id="sign-up-btn2">Sign up</a></p>
            <form action="sign-up.php" class="sign-up-form" method="POST">
                <h2 class="title">اشترك الان</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="username_s">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email_s">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password_s">
                </div>
                <input type="submit" value="تسجيل" class="btn">
                
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">دخول</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                      <h3>هل لديك حساب ؟</h3>
                    <p>آسك إف إم‏ هو موقع تواصل اجتماعي خاص بالأسئلة بإمكان المستخدم إنشاء صفحة من خلاله لإرسال الأسئلة للعديد من المستخدمين ويمكن للمستخدم أيضًا إستقبال الأسئلة من الأصدقاء أو من شخص مجهول على حسب الخيارات التي قام باختيارها المستخدم، ويمكن ايضاً إرسال السؤال لعدة اشخاص،</p>
                    <button class="btn" id="sign-in-btn">دخول</button>
                </div>
                <img src="signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>هل لديك حساب ؟</h3>
                    <p>آسك إف إم ‏ هو موقع تواصل اجتماعي خاص بالأسئلة بإمكان المستخدم إنشاء صفحة من خلاله لإرسال الأسئلة للعديد من المستخدمين ويمكن للمستخدم أيضًا إستقبال الأسئلة من الأصدقاء أو من شخص مجهول على حسب الخيارات التي قام باختيارها المستخدم، ويمكن ايضاً إرسال السؤال لعدة اشخاص،</p>
                    <button class="btn" id="sign-up-btn">تسجيل</button>
                </div>
                <img src="signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>