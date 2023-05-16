<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/login.css">
    <title>sign up</title>
</head>
<body>
<div class="container">
    <form action="/user/sign" method="post">
    <h1>SIGN</h1>
        <div>
            <label for="id"></label>
            <input type="text" name="id" placeholder="아이디를 입력하세요.">
        </div>
        <br>
        <br>
        <div>
            <label for="pw"></label>
            <input type="text" name="pw" placeholder="비밀번호를 입력하세요.">
        </div>
        <br>
        <br>
        <div>
            <label for="pwc"></label>
            <input type="text" name="pwc" placeholder="비밀번호 확인.">
        </div>
        <br>
        <br>
        <div class="button">
            <input type="submit" value="가입" class="btn">
        </div>
    </form>
</div>    
</body>
</html>