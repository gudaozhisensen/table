<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
             $mySqlSever='localhost';
             $username='root';
            $password='root';
            $db_select='phpweb';

            if(! $link=  mysqli_connect($mySqlSever, $username, $password)){//连接数据库
                    exit('连接数据库失败！');

            }
            else{
               if(mysqli_select_db($link,$db_select)){//选择数据库
               //   echo $db_select."数据库连接成功！";
                        }else
                            {

                               exit('数据库选择失败！');
                            }
               }
              mysqli_query($link,"set names'utf8'");//设置编码
        
        ?>
    </body>
</html>
