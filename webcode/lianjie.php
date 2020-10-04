<?php
 $dsn = 'mysql:host=localhost;dbname=weather;';
 $user = 'root';
 $passworld = '1212';
 
 
 try{    
    $dbh = new  PDO($dsn,$user,$passworld);
    $dbh->query('set names utf8');
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    #s$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 }catch(PDOException $e){
    echo $e->getMessage();
    exit;
 }

 try{
    $name='';
    @$name=$_POST["cname"];
    $sql="select * from day0 where city = '$name'";
    $res=$dbh->query($sql);

    
    foreach($res as $key => $value){
    
    }
 }catch(PDOException $e){
    echo $e->getMessage();
    exit;
 }
?>
