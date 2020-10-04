<!DOCTYPE html>
<html>
<head>
<style>
ul.guaid {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }/*导航栏*/
li a {
    display: block;
    color: white;
    float: left;
    text-align: center;
    padding: 15px 16px;
    text-decoration: none;
}/*导航栏元素属性*/
li p{
    display: block;
    color: white;
    float: right;
    text-align: center;
    padding-right: 80px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}/*鼠标放上变色*/
.active {
    background-color:  #06b9f0;
}/*目前所处位置变色*/
div.part1{
    width: 20%;
    height: 800px;
    float: left;
        }
div.part2{
    width: 60%;
    height: 1080px;
    float: left;
    background-color: #f2f2f2;
    }
div.cityw{
  margin: 50px 20px;
  border: #333;
  width: 500px;
  height: 450px;
  float: left;
  position: relative;
  left: 10%;
  background-image: url(img/sky.jpg);
}
div.cityd{
  margin: 50px 10px;
  border: #333;
  width: 200px;
  height: 450px;
  float: left;
  position: relative;
  left: 10%;
  background-image: url(img/777.jpeg);

}/*天气查询图框*/
div.cw1{
  width: 100%;
  height: 30%;
  padding: 10px 15px;
}
.cw1 p{
  font-size: 50px;
}
div.cw2{
  width: auto;
  height:33.3%;
  font-size: 50px;
  padding: 10px 100px;
}
div.cw3{
  width: 100%;
  font-size: 20px;
  height: 33.3%;
  padding: 10% 20%;
}/*天气栏内容*/

div.cd1{
    width:auto;
    height: 20%;
    text-align: center;
}
div.cd2{
    width: auto;
    height: 20%;
    text-align: center;
}
div.cd3{
    width:auto;
    height: 20%;
    text-align: center;
}
div.cd4{
    width: auto;
    height: 40%;
    text-align: center;
}/*白日夜晚天气内容*/

div.p7{
    width: 100%;
    font-size: 30px;
    text-align: center;
    float: left;
}
div.sd{
    margin: 10px 15px;
    float: left;
    width: 150px;
    height: 400px;
    background-image: url(img/77.jpg);
}
div.sd1{
    margin: 10px 15px 10px 40px;
    float: left;
    width: 150px;
    height: 400px;
    background-image: url(img/77.jpg);
}
/* 列后清除浮动 */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<ul class="guaid">
    <li ><a href="index.html">主页</a></li>
    <li ><a href="denglu.html">登录注册</a></li>
    <li ><a href="表格.html">关于我们</a></li>
    <li><p><?php echo date("Y年m月d日") ?></p></li>
</ul>
<div class="part1">
  <img src="img\44.jpg">
</div>

<div class="part2">
<div class="cityw">
    <div class="cw1"><p>
        <?php
        echo $_POST["cname"];
        ?></p></div>
    <div class="cw2"><p>
        <?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];
        echo"\n";
        echo $row['temp'];
        echo"℃";
        ?></p></div>
    <div class="cw3"><p>
        <?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo"风向：";
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class'];
        ?></p></div>
    </div><!--当前天气图-->
    
    <div class="cityd">
      <div class="cd1"><p><?php echo date("d") ?>日白天</p></div>
      <div class="cd2"><p><?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];
        ?></p></div>
      <div class="cd3"><p><?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo"℃";
        ?></p></div>
      <div class="cd4"><p><?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo"风向：";
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class'];
        ?></p></div>
    </div><!--白天气温图-->
    
    <div class="cityd">
      <div class="cd1"><p><?php echo date("d") ?>日夜晚</p></div>
      <div class="cd2"><p><?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo $row['condition_night'];
        ?></p></div>
      <div class="cd3"><p><?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo $row['temp_night'];
        echo"℃";
        ?></p></div>
      <div class="cd4"><p><?php
        include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day0 where city='$name'");
        $row=$result->fetch();
        echo"风向：";
        echo $row['wind_night'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];
        ?></p></div>
    </div><!--晚上气温图-->

    <div class="p7"><p><?php echo $_POST["cname"];?>七天天气情况</p></div>

    <div class="sd1">
      <div class="cd1"><?php echo date("m月d日",strtotime("+1 day"));?></div>
      <div class="cd2"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day1 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];?></div>
      <div class="cd3"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day1 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo "~";
        echo $row['temp_night'];?></div>
      <div class="cd4"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day1 where city='$name'");
        $row=$result->fetch();
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];?></div>
    </div>

    <div class="sd">
      <div class="cd1"><?php echo date("m月d日",strtotime("+2 day"));?></div>
      <div class="cd2"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day2 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];?></div>
      <div class="cd3"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day2 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo "~";
        echo $row['temp_night'];?></div>
      <div class="cd4"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day2 where city='$name'");
        $row=$result->fetch();
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];?></div>
    </div>

    <div class="sd">
      <div class="cd1"><?php echo date("m月d日",strtotime("+3 day"));?></div>
      <div class="cd2"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day3 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];?></div>
      <div class="cd3"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day3 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo "~";
        echo $row['temp_night'];?></div>
      <div class="cd4"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day3 where city='$name'");
        $row=$result->fetch();
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];?></div>
    </div>

    <div class="sd">
      <div class="cd1"><?php echo date("m月d日",strtotime("+4 day"));?></div>
      <div class="cd2"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day4 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];?></div>
      <div class="cd3"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day4 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo "~";
        echo $row['temp_night'];?></div>
      <div class="cd4"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day4 where city='$name'");
        $row=$result->fetch();
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];?></div>
    </div>

    <div class="sd">
      <div class="cd1"><?php echo date("m月d日",strtotime("+5 day"));?></div>
      <div class="cd2"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day5 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];?></div>
      <div class="cd3"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day5 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo "~";
        echo $row['temp_night'];?></div>
      <div class="cd4"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day5 where city='$name'");
        $row=$result->fetch();
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];?></div>
    </div>
     
    <div class="sd">
      <div class="cd1"><?php echo date("m月d日",strtotime("+6 day"));?></div>
      <div class="cd2"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day6 where city='$name'");
        $row=$result->fetch();
        echo $row['condition'];?></div>
      <div class="cd3"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day6 where city='$name'");
        $row=$result->fetch();
        echo $row['temp'];
        echo "~";
        echo $row['temp_night'];?></div>
      <div class="cd4"><?php
      include"lianjie.php";
        @$name=$_POST["cname"];
        $result=$dbh->query("select * from day6 where city='$name'");
        $row=$result->fetch();
        echo $row['wind'];
        echo"<br>";
        echo"风力：";
        echo $row['wind_class_nigh'];?></div>
    </div>
</div>
</body>
</html>