<?php
$dsn = 'mysql:host=localhost;dbname=weather;';
$user = 'root';
$passworld = '1212';

$dbh = new  PDO($dsn,$user,$passworld);
$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//从数据库里把表的数据提出来（获取记录集）
//$query = "SELECT * FROM day0";
//从数据库中选择数据，并将结果赋予一个变量,user为数据库表
$result=$dbh->query("select * from weather where city='武汉'");
//将查询出的数据输出
while($row=$result->fetch()){
    
}


?>