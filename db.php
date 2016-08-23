<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    mysql_connect("localhost", "root", "");
    mysql_select_db("Khabgah"); 
    mysql_query("SET NAMES 'utf8'"); 
    function user_login ($username, $password) 
    { 
        $username = mysql_real_escape_string($username); 
        $password = md5($password);
        $result = mysql_query("SELECT * FROM usersystem WHERE username = '".$username."' AND password = '".$password."' LIMIT 1"); 
        $rows = mysql_num_rows($result);
        $result2 = mysql_query("SELECT * FROM usersystem WHERE username = '".$username."' AND password = '".$password."' and taeed='1' LIMIT 1"); 
        $rows2=mysql_num_rows($result2);
        if ((empty($_POST['username'])) OR (empty($_POST['password'])))
        {                
            echo 
            '<style type="">
                        #karbari1
                        {
                           -webkit-box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                           -moz-box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                           box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                           background-image: -webkit-linear-gradient(bottom, #ececec, #f5f4f4);
                           background-image: -moz-linear-gradient(bottom, #ececec, #f5f4f4);
                           background-image: -o-linear-gradient(bottom, #ececec, #f5f4f4);
                           background-image: -ms-linear-gradient(bottom, #ececec, #f5f4f4);
                           background-image: linear-gradient(to top, #ececec, #f5f4f4);
                           width: 200px;
                           height: 41px;
                           float: right;
                           border-radius: 0px 20px 20px 0px ;
                           font-size: 20px;
                           border-color: aqua;
                        }
            </style>','<pre>نام کاربری یا رمز عبور وارد نشده است</pre>'; 
        }
        else if($rows<=0 )
        {
            echo 
            '<style type="">
                #karbari1
                {
                    -webkit-box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                    -moz-box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                    box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                    background-image: -webkit-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: -moz-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: -o-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: -ms-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: linear-gradient(to top, #ececec, #f5f4f4);
                    width: 200px;
                    height: 41px;
                    float: right;
                    border-radius: 0px 20px 20px 0px ;
                    font-size: 20px;
                    border-color: aqua;
                }
            </style>','<p>نام کاربری یا رمز عبور اشتباه میباشد</p>'  ;
        }
        else if (($rows2!=1) AND (isset($_POST['username'])) AND (isset($_POST['password'])) AND (!empty($_POST['username'])) AND (!empty($_POST['password'])))
        {                
            echo 
            '<style type="">
                #karbari1
                {
                    -webkit-box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                    -moz-box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                    box-shadow: 0 0 14px rgba(255,255,255,.16), inset 0 0 18px rgba(0,0,0,.32);
                    background-image: -webkit-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: -moz-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: -o-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: -ms-linear-gradient(bottom, #ececec, #f5f4f4);
                    background-image: linear-gradient(to top, #ececec, #f5f4f4);
                    width: 200px;
                    height: 41px;
                    float: right;
                    border-radius: 0px 20px 20px 0px ;
                    font-size: 20px;
                    border-color: aqua;
                }
            </style>','<pre>  تایید نگردیده اید لطفا پیگیری کنید</pre>'; 
        }                        
        else if ((!empty($_POST['username'])) OR (!empty($_POST['password'])))
        { 
            $_SESSION['username'] = true;
            echo 
            "<script type='text/javascript'>
                location='logout.php';
            </script>";
        } 
    }
     function insert()
    {
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
                            { 
                                $firstname=$_POST['firstname'];
                                $lastname=$_POST['lastname'];
                                $melicode=$_POST['melicode'];
                                $mobilenumber=$_POST['mobilenumber'];
                                $reshte=$_POST['reshte'];
                                $dore=$_POST['dore'];
                                $maghta=$_POST['maghta'];
                                $fathername=$_POST['fathername'];
                                $username = mysql_real_escape_string($_POST['username']); 
                                $email = mysql_real_escape_string($_POST['email']); 
                                $password = md5($_POST['password']);
                                $peygiri=rand(1000000000,9999999999); 
                                $sql = mysql_query("SELECT username FROM usersystem WHERE username = '".$username."'");
                                if(mysql_num_rows($sql)>0)
                                { 
                                    die("Username taken."); 
                                } 
                                echo $peygiri,"   :شماره پیگیری";
                                $aref=mysql_query("
                                INSERT INTO usersystem
                                VALUES(
                                'Null',
                                '$firstname',
                                '$lastname',
                                '$melicode',
                                '$mobilenumber',
                                '$reshte',
                                '$dore',
                                '$maghta',
                                '$fathername',
                                '$username',
                                '$password',
                                '$email',
                                '0',
                                '$peygiri',
                                '1')")
                                 or die (mysql_error());
                                 
                            }
    }  
    function  uspeygiri()
    {   
    $a=mysql_query("SELECT MAX(userid) FROM usersystem") ;    
    $aref2=mysql_fetch_array($a);
    $s=$aref2['MAX(userid)'] ;
  
        for($i=0;$i<=$s;$i++)
        {
            $a4=mysql_query("SELECT taeed FROM usersystem WHERE userid='$i'") ;
            $aref4=mysql_fetch_array($a4);
            $s1=$aref4['taeed'];
            if($s1=='0')
            {  
                $a2=mysql_query("SELECT * FROM usersystem WHERE userid='$i'");
                $aref3=mysql_fetch_array($a2);
                echo '<input type="checkbox" style="font-color:black; name="';
                echo $aref3[userid];
                echo '"';
                echo 'value="';
                echo $aref3[userid];
                echo '"';
                echo '>';
                echo 'نام:  ', $aref3['firstname'],' | نام خانوادگی: ',$aref3['lastname'],' | نام پدر:  ', $aref3['fathername'],' | کدملی:  ',$aref3['melicode'],' | شماره تماس: ',
                 $aref3['mobilenumber'],' | مقطع:  ',$aref3['maghta'],' | کد پیگیری:  ', $aref3['peygiri'],' | ','<br><hr>';
            }
        }   
    }  
?>                    