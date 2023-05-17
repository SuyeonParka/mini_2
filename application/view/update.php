<?php

$user = $_SESSION[_STR_LOGIN_ID];

$arr = ["id" => $_SESSION["u_id"]];
$result = $this->model->getUser($arr,false);
// var_dump($result);


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
    <h1>회원정보 수정</h1>
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
            <input type="text" name="id" id="id" value="<?php echo $result[0]["u_id"]?>" readonly>
            <span id="errMsgId">
            <br>
                <?php if(isset($this->arrError["id"])) {
                        echo $this->arrError["id"];
                } ?>
            </span>
            </div>
            <br>
            <div>
            <label for="pw">pw</label>
            <input type="text" name="pw" id="pw" value="<?php echo $result[0]["u_pw"]?>"placeholder="비밀번호를 입력하세요.">
            <br>
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
            <br>
                <?php if(isset($this->arrError["pwc"])) { 
                    echo $this->arrError["pwc"];
                } ?>
            </span>
        </div>
        <br>
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name" value="<?php echo $result[0]["u_name"]?>"placeholder="이름을 입력하세요.">
            <span>
            <br>
                <?php if(isset($this->arrError["name"])) {
                    echo $this->arrError["name"];
                } ?>
            </span>
        </div>
        <br>
        <div class="button">
            <input type="submit" value="수정" class="btn1">
            <a href=""><input type="submit" value="탈퇴" class="btn1"></a>
        </div>
    </form>
</div> 



<script src="/application/view/js/common.js"></script>
</body>
</html>