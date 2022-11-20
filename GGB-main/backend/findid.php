<?php
    //$conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    $conn = mysqli_connect('localhost', 'root', 'sunlove8421!', 'ggb');
    $email = $_POST['findemail'];
    $name = $_POST['findname'];
    function SQLFiltering($name, $email)
    {
        $name = preg_replace("/\s{1,}1\=(.*)+/", "", $name);
        $name = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $name);
        $name = preg_replace("/[\s\t\'\;\=]+/", "", $name);
        $email = preg_replace("/\s{1,}1\=(.*)+/", "", $email);
        $email = preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i", " ", $email);
        $email = preg_replace("/[\s\t\'\;\=]+/", "", $email);
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
        $sqlemail = "SELECT id FROM user WHERE email = '{$email}'";
        $sqlname = "SELECT id FROM user WHERE name = '{$name}'";
        
        $result1 = mysqli_query($conn,$sqlemail);
        $result2 = mysqli_query($conn,$sqlname);
        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);
        if($row1<1){
            ?>
            <script>
                alert("입련된 이메일로 가입된 이메일 존재하지 않습니다");
                location.href="/front/findid.html";
            </script>
            <?php
            exit;
        }
        if($row2<1){
            ?>
            <script>
                alert("입련된 이름으로 가입된 아이디가 존재하지 않습니다");
                location.href="/front/findid.html";
            </script>
            <?php
            exit;
        }
        echo "<script>alert('회원님의 ID는 ".$row2[0]." 입니다.');</script>";
        ?>
        <script>
            location.href="/front/login.php";
        </script>