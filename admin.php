<?php 
  include ("db.php");
   if(!$_SESSION['username'])
   {
	   //header('location: index.php');
        //exit();
    }
?>
<?php
    $_SESSION['username'] = false;
    echo 
        '<--git-->
            <!DOCTYPE html>
                <html>
                    <head>
                        <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
                        <meta http-equiv="Pragma" content="no-cache">
                        <meta http-equiv="Cache-Control" content="no-cache">
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <title>صفحه مدیریت</title>
                        <link rel="stylesheet" type="text/css" href="style.css">
                    </head>
                    <body > 
                        <form>
                        <div> 
                            <header>
                                <div>
                                    <img src="images/header.png" style="width: 1366px;">
                                </div> 
                            </header>
                            <div class="admlist">
                                <div style="direction:rtl;padding: 2px 0px 2px 3px;">' ;
                                uspeygiri();
                                echo '
                                </div>
                            </div>
                            <div style="margin: 20px 0 0 550px;">
                                <input type="submit" id="logbt" value="ثبت" style="border-radius: 0px 16px 16px 0px;">
                                <input type="button" id="register" value="خروج" style="border-radius: 16px 0px 0px 16px;">
                                </div> 
                            <div>
                                <img src="images/footer.png" style="width: 1360px;">
                            </div>     
                        </div>  ';
                   
                          echo '
                        </form> 
                       
                       
                    </body>
                </html>
        '
    ;
?>

