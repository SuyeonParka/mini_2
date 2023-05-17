<?php
$http_method = $_SERVER["REQUEST_METHOD"];
$arr_get = $_POST;
// 이전페이지 값 가져오기
// $id = $_POST["u_id"];
// $pw = $_POST["u_pw"];
// $name = $_POST["u_name"];

var_dump($arr_get);


?>



<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/login.css">
    <title>Update</title>
</head>
<body>
<div class="container">
    <form action="/user/update" method="post">
    <h1>Update</h1>
    <br>
    <br>
    <?php if(isset($this->errMsg)) { ?>
            <div>   
                <span>
                    <?php echo $this->errMsg ?>
                </span>
            </div> 
    <? } ?>
            <div>
            <label for="id">id</label>
            <input type="text" name="id" id="id" placeholder="아이디를 입력하세요.">
            <button type="button" onclick="chkDuplicationId()">id중복확인</button>
            <span id="errMsgId">
                <?php if(isset($this->arrError["id"])) {
                        echo $this->arrError["id"];
                } ?>
            </span>
            </div>
            <br>
            <div>
            <label for="pw">pw</label>
            <input type="text" name="pw" id="pw" placeholder="비밀번호를 입력하세요.">
            <span>
                <?php if(isset($this->arrError["pw"])) {
                    echo $this->arrError["pw"];
                } ?>
            </span>
            </div>
            <br>
            <div>
            <label for="pwc">pwc</label>
            <input type="text" name="pwc" id="pwc" placeholder="비밀번호 확인.">
            <span>
                <?php if(isset($this->arrError["pwc"])) { 
                    echo $this->arrError["pwc"];
                } ?>
            </span>
        </div>
        <br>
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name" placeholder="이름을 입력하세요.">
            <span>
                <?php if(isset($this->arrError["name"])) {
                    echo $this->arrError["name"];
                } ?>
            </span>
        </div>
        <br>
        <div class="button">
            <input type="submit" value="Update" class="btn">
        </div>
    </form>
</div> 



<script src="/application/view/js/common.js"></script>
</body>
</html>