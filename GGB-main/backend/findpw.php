<?php
    //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $email = $_POST['findemail'];
    $name = $_POST['findname'];
    $id = $_POST['findid'];
    function SQLFiltering($name, $email,$id)
    {
        $name = preg_replace("/\s{1,}1\=(.*)+/", "", $name);
        $name = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $name);
        $name = preg_replace("/[\s\t\'\;\=]+/", "", $name);
        $email = preg_replace("/\s{1,}1\=(.*)+/", "", $email);
        $email = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $email);
        $id = preg_replace("/[\s\t\'\;\=]+/", "", $email);
        $id = preg_replace("/\s{1,}1\=(.*)+/", "", $id);
        $id = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $id);
        $id = preg_replace("/[\s\t\'\;\=]+/", "", $id);
        
    }
    if (empty($name)) {
        ?>
        <script>location.href = "/front/findid.html"</script>
        <?php
            exit;
    }
    if (empty($email)) {
        ?>
        <script>location.href = "/front/findid.html"</script>
        <?php
            exit;
    }
    if (empty($id)) {
        ?>
        <script>location.href = "/front/findid.html"</script>
        <?php
            exit;
    }
        $sqlemail = "SELECT password FROM user WHERE email = '{$email}'";
        $sqlname = "SELECT password FROM user WHERE name = '{$name}'";
        $sqlid = "SELECT password FROM user WHERE id = '{$id}'";
        $result1 = mysqli_query($conn,$sqlemail);
        $result2 = mysqli_query($conn,$sqlname);
        $result3 = mysqli_query($conn,$sqlid);
        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);
        $row3 = mysqli_fetch_array($result3);
        if($row1<1){
            ?>
            <script>
                alert("입련된 이메일로 가입된 이메일 존재하지 않습니다");
                location.href="/fornt/findid.html";
            </script>
            <?php
            exit;
        }
        if($row2<1){
            ?>
            <script>
                alert("입련된 이름으로 가입된 아이디가 존재하지 않습니다");
                location.href="/fornt/findid.html";
            </script>
            <?php
            exit;
        }
        if($row3<1){
            ?>
            <script>
                alert("입련된 id로 가입된 아이디가 존재하지 않습니다");
                location.href="/fornt/findid.html";
            </script>
            <?php
            exit;
        } 
        echo "<script>alert('회원님의 비밀번호는 ".base64_decode($row2[0])." 입니다.');history.back();</script>";
        ?>
        <script>
            location.href="/front/login.php";
        </script>