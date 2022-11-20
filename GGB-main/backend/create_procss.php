<?php
    session_start();
     //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $userid = $_SESSION['userid'];
    $money = $_POST['makemoney'];
    $date = date("Y-m-d");
    $checksql = "SHOW TABLE STATUS WHERE name='{$userid}'";
    $checkresult = mysqli_query($conn,$checksql);
    $row1 = mysqli_fetch_array($checkresult);
    if($row1>0){
        echo "<script>alert('이미 가계부가 존재합니다')</script>";
        echo "location.href='/front/main.html'";
        exit;
    }
    $sql = "CREATE TABLE {$userid}(
        money VARCHAR(50),
        da DATE
        );";
    $sql1 = "INSERT INTO {$userid}(money,da) VALUES('{$money}','{$date}')";
    $result = mysqli_query($conn,$sql);
    $result1 = mysqli_query($conn,$sql1);

?>