<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/login.css">
    <title>Login</title>
    <style>
        @font-face {
    font-family: 'PuradakGentleGothicR';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_11-01@1.1/PuradakGentleGothicR.woff2') format('woff2');
    font-weight: normal;
    font-style: normal;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'PuradakGentleGothicR';
    display: grid;
    justify-content: space-around;
}

a {
    text-decoration: none;
    color: #000;
}

.container {
    width: 50vw;
    height: 30vh;
    display: grid;
    place-items: center;
    min-height: 100vh;
}

h1 {
    margin: 30px;
}

.btn {
    font-family: 'PuradakGentleGothicR';
    font-weight: 600;
    font-size: 0.3rem;
    border-radius: 5px;
    border: 1px solid #000;
    width: 170px;
    height: 3vh;
    background-color: #ecedf0;
}

span {
    font-size: 0.5rem;
}

.stick {
    margin-left: 15px;
    margin-right: 15px;
}

.stay {
    font-size: 0.3rem;
}
    </style>
</head>
<body>
    <!--  
    <h1>Login</h1>
    <h3 style="color: red;">
        <?php echo isset($this->errMsg) ? $this->errMsg : ""; ?>
    </h3>
    <form action="/user/login" method="post">  /붙여줘야함(url불어남 방지) 
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <label for="pw">PW</label>
        <input type="text" name="pw" id="pw">
        <button type="submit">Login</button>
    </form>
-->
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