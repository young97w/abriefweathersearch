<?php
echo date("m-d"), "<br>";
echo date("m-d",strtotime("+3 day"));
?>
<?php
    include"xunhuan.php";
    @$name=$_POST["cname"];
    $result=$dbh->query("select * from weather where city='$name'");
    while($row=$result->fetch()){
        echo "温度:\t\r\n".$row['temp'];
}?>