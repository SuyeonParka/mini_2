
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/login.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <form class="my_form" method="post" action="/user/login">
        <h1>Login</h1>
        <input type="text" name = "id" id="log_id" placeholder="id" required>
        <br>
        <br>
        <input type="password" name = "pw" id="log_pw" placeholder="password" required>
        <br>
        <br>
        <span>
            <input style='zoom:0.7;' type="checkbox" class="stay">
            로그인 상태 유지
        </span>
        <br>
        <span style="color: red; font-size=10px"><?php echo isset($this->errMsg) ? $this->errMsg : ""; ?></span>
        <br>
        <br>
        <input type="submit" value="Login" class="btn">
        <br>
        <br>
        <span><a href="">아이디 저장하기</a></span>
        <span class="stick">|</span>
        <span><a href="">ID/PW 찾기 </a></span>
    </form>
</div>

    
</body>
</html>