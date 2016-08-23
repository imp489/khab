<?php 
    include ("db.php");
    if(!$_SESSION['username'])
    {
        header('location: index.php');
        exit();
    }
?>
<?php
    $_SESSION['username'] = false;
    echo 
        '
            <!DOCTYPE html>
                <html>
                    <head>
                        <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
                        <meta http-equiv="Pragma" content="no-cache">
                        <meta http-equiv="Cache-Control" content="no-cache">
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <title>ورود</title>
                        <link rel="stylesheet" type="text/css" href="style.css">
                    </head>
                    <body > 
                        <header>
                            <div id="footer" >
                                <img src="images/header.png" style="width: 1366px;">
                            </div> 
                        </header>
                        <div id="login"> 
                            <div style="margin: 100px 0 0 179px;color: green;font-size: 20px;">
                                شما با موفقیت وارد شدید
                                <br>
                                <pre><a href="index.php" style="font-size: 20px;">                خروج</a></pre>
                            </div>   
                        </div>
                        <div id="footer" >
                            <img src="images/footer.png" style="width: 1366px;">
                        </div>
                    </body>
                </html>
        '
    ;
?>
