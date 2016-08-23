<?php
include("db.php"); 
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
            <meta http-equiv="Pragma" content="no-cache">
            <meta http-equiv="Cache-Control" content="no-cache">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>register</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body > 
<?php // akse balaye safe ?>     
            <header>
                <div id="footer" >
                    <img src="images/header.png" style="width: 1366px;">
                </div> 
            </header>
<?php // form safe aval ?> 
            <form action="index.php" method="POST">
                <div id="login"> 
                    <div id="karbari">
                        <input id="karbari1" name="username">
                        <div id="karbari2">
                            <p id="text_karbari">نام کاربری</p>
                        </div>
                    </div>
                    <br>
                    <div id="karbari">
                        <input id="karbari1" name="password" type="password">
                        <div id="karbari2">
                            <p id="text_karbari">رمز عبور</p> 
                        </div>
                    </div>
                    <div id="lg">
                        <input type="submit" id="register" value="ورود">
                        <a href="#peygiri_form" id="jointop">
                            <input type="button" id="peygiri" value="پیگیری">
                        </a>
                        <a href="#signup_form" id="jointop">
                            <input type="button" id="logbt" value="ثبت نام">  
                        </a>
                    </div>
                    <div style="margin:0 0 10px 140px;color:aqua;font-size:20px;font-style:italic;">
                        <?php
                            if(isset($_POST['username']) && isset($_POST['password']))
                            {   
                                user_login($_POST['username'], $_POST['password']); 
                            }
                        ?>
                        <?php 
                        insert(); 
                        ?>
                    </div>
                </div>
            </form>
<?php // akse paeene safe ?>             
            <div id="footer" >
                <img src="images/footer.png" style="width: 1366px;">
            </div>
<?php // form sabtenam ke bad az click bar roye sabtenam zaher mishavad ?> 
            <a href="" class="overlay" id="signup_form"></a>    
            <div class="box">
                <h2>ثبت نام خوابگاه</h2>
                <form action="#signup_form" id="jointop" method="post">
                    <input name="firstname" type="text" class="text-field" placeholder="نام" /> 
                    <input name="lastname" type="text" class="text-field" placeholder="نام خانوادگی" />
                    <input name="fathername" type="text" class="text-field" placeholder="نام پدر" />
                    <input name="melicode" type="text" class="text-field" placeholder="کد ملی" />
                    <input name="mobilenumber" type="text" class="text-field" placeholder="شماره موبایل" /> 
                    <input name="reshte" type="text" class="text-field" placeholder="رشته تحصیلی" /> 
                    <input name="dore" type="text" class="text-field" placeholder="دوره" /> 
                    <input name="maghta" type="text" class="text-field" placeholder="مقطع" />
                    <input name="username" type="text" class="text-field" placeholder="نام کاربری" />
                    <input name="password" type="text" class="text-field" placeholder="رمز عبور" />
                    <input name="email" type="text" class="text-field" placeholder="پست الکترونیکی" />
                    <input type="submit" value="ثبت نام"class="ozv"></br>
                    <p class="" style="font-size:15px;"><a href="index.php">ثبت نام کرده ام</a></p>
                    <a class="close" href="#close"></a>
                </form>                                                  
            </div>
<?php // form peygiri ?> 
            <a href="" class="overlay" id="peygiri_form"></a>    
            <div class="box2">
                <h2>پیگیری ثبت نام</h2>
                <form action="#signup_form" method="post">
                    <input name="peygiri" type="text" class="text-field" placeholder="کد پیگیری" /> 
                    <input name="melicode" type="text" class="text-field" placeholder="کد ملی" />
                    <input type="submit" value="پیگیری" class="ozv"></br>
                    <a class="close" href="#close"></a>
                </form>
            </div>
        </body>
    </html>
<?php //پایان کد ?>