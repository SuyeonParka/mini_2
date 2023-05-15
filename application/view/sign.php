<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <h1>회원 가입</h1>
    <form action="/user/sign" method="post">
        <div>
            <label for="id">ID</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for="pw">PW</label>
            <input type="text" name="pw">
        </div>
        <div class="button">
            <input type="submit" value="가입">
        </div>
    </form>
</body>
</html>