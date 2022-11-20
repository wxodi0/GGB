<?php
     //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    SQLFiltering($id, $pw);
    function SQLFiltering($id, $pw)
    {
        $id = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $id);
        $id = preg_replace("/\s{1,}1\=(.*)+/", "", $id);
        $id = preg_replace("/[\s\t\'\;\=]+/", "", $id);
        $pw = preg_replace("/\s{1,}1\=(.*)+/", "", $pw);
        $pw = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $pw);
        $pw = preg_replace("/[\s\t\'\;\=]+/", "", $pw);
    }
    $sql = "SELECT * FROM user WHERE id ='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hashedPassword = $row['password'];
    $passwordResult = base64_decode($hashedPassword) == $pw;
    if($passwordResult == true){
        session_start();
        $_SESSION['userid'] = $row['id'];
        ?>
        <script>
            alert("로그인에 성공");
            location.href = "/front/main.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("로그인에 실패하였습니다");
        location.href = "/backend/login.php";
        </script>
        <?php
    }
?>