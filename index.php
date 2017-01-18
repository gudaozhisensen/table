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
        <table border="1" align="center">
            <thead>
                <tr>
                    <th>姓名</th>
                    <th>语文成绩</th>
                    <th>数学成绩</th>
                    <th>英语成绩</th>
                </tr>
          
      
       
     
        <?php
      include("func/connect.php");//数据库连接
     
 
                      
      $sql="SELECT name,
SUM(CASE WHEN lesson='语文' THEN grade END) AS 语文,
SUM(CASE WHEN lesson='数学' THEN grade END) AS 数学,
SUM(CASE WHEN lesson='英语' THEN grade END) AS 英语

FROM score GROUP BY name";//列变行，统计数据
      
         $sqlResult=  mysqli_query($link,$sql);//查询到的数据放入$sql结果集中
           $rows=  mysqli_num_rows($sqlResult);//获取行数
          $colums=  mysqli_num_fields($sqlResult);//获取列数
          
          
          while ($result=  mysqli_fetch_array($sqlResult)){     //输出数据
             echo "<tr align=center>";
        
                 echo    "<td>$result[name]</td>"
                         . "<td>$result[语文] </td> "
                         . "<td>$result[数学]</td>"
                         . "<td>$result[英语]</td>";
                      echo"</tr> ";
    
}  
                          
      echo "</table>";
           
      
//*************************************************************************************     
    
      
       $sql1="select * from score order by name ASC";
      
       $sqlResult_1=  mysqli_query($link,$sql1);//查询到的数据放入$sql结果集中
           $rows_1=  mysqli_num_rows($sqlResult_1);//获取行数
          $colums_1=  mysqli_num_fields($sqlResult_1);//获取列数
          
          echo"<table border='1' align='center'>";
          while ($result_1=  mysqli_fetch_array($sqlResult_1)){     //输出数据
             echo "<tr align=center>";
        
                 echo    "<td>$result_1[name]</td>"
                         . "<td>$result_1[lesson] </td> "
                         . "<td>$result_1[grade]</td>";
                        // . "<td>$result_1[英语]</td>";
                      echo"</tr> ";
          }
      
      echo "</table>";
      
        ?>
      
    </body>
    </html>
