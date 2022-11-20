<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <link rel="icon" href="../favicon/favicon.ico" type="favicon/x-icon">
  <title>Login</title>
</head>
<body>
  <form action="../backend/login_procss.php" method="POST">
    <h2>로그인</h2>
    <input type="text" name="id" placeholder="아이디를 입력해주세요" id="ID">
    <input type="password" name="pw" placeholder="비밀번호를 입력해주세요" id="PW">
    <button type="submit" name="login" onclick="pushAll();">로그인</button>
    <ul>
        <li><a href="findid.html">아이디찾기</a></li>
        <li><a href="findpw.html">비밀번호찾기</a></li>
      </ul>
  </form>

  <script>
            const pushAll= function(){
                let userNewId = document.querySelector("#ID");
                let userNewPw = document.querySelector("#PW");
                
                if(userNewId.value==""){
                    alert("ID 를 입력해주세요.");
                    document.getElementsByName("id").focus();
                    
                }
                if(userNewPw.value == ""){
                    alert("비밀번호를 입력해주세요.");
                    document.getElementsByName("pw").focus();
                
                }
            }
  </script>

</body>
</html>