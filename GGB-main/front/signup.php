<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="signup.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <link rel="icon" href="../favicon/favicon.ico" type="favicon/x-icon">
  <title>Sign_up</title>
</head>
<body>
  
  <form action="/backend/signup_procss.php" method="post">
    <div class="form">
      <h2 class="header">회원가입</h2>
      <input type="text" name="makename" placeholder="고객님의 성함을 입력해주세요" class="name" id="NAME">
      <input type="text" name="makeid" placeholder="희망하시는 ID를 입력해주세요" class="id" id="ID">
      <input type="password" name="makepw" placeholder="비밀번호를 입력해주세요" class="pw" id="PW">
      <input type="email" name="makeemail" placeholder="이메일을 입력해주세요" class="email" id="mail">
      <button class="maker" id="maker" onclick="pushAll();">제출</button>
    </div>
  </form>
  <script>
            const pushAll= function(){
                let userNewId = document.querySelector("#ID");
                let userNewEmail = document.querySelector("#mail");
                let userNewPw = document.querySelector("#PW");
                let userNewName = document.querySelector("#NAME");
                
                if(userNewId.value==""){
                    alert("ID 를 입력해주세요.");
                    document.getElementsByName("makeid").focus();
                    
                }
                if(userNewEmail.value==""){
                    alert("email을 입력해주세요.");
                    document.getElementsByName("makeemail").focus();
                
                }
                if(userNewPw.value == ""){
                    alert("비밀번호를 입력해주세요.");
                    document.getElementsByName("makepw").focus();
                
                }
                if(userNewNAME.value == ""){
                    alert("이름을 입력해주세요.");
                    document.getElementsByName("makename").focus();
                
                }
            }
  </script>
</body>
</html>