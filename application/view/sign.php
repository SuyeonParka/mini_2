<?php

$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
// $name=$_POST['name'];

if($pw!==$pwc)
{
    echo "비밀번호가 일치하지 않습니다.";
    echo "<a href=sign.html>back page</a>";
    exit();
}
if($id==NULL || $pw==NULL || $pwc==NULL || $name==NULL)
{
    echo "빈 칸을 모두 채워주세요";
    echo "<a href=sign.html>back page</a>";
    exit();
}

$sql = mysqli_connect("localhost", "root", "root506", "minitwo");

$check = " SELECT "
        ." * "
        ." FROM "
        ." user_info "
        ." WHERE "
        ." u_id='$id'"
        ;
$result=$sql->query($check);
if($result->num_rows==1)
{
    echo "중복된 id입니다.";
    echo "<a href=sign.html>back page</a>";
    exit();
}

$sign = mysqli_query($sql, "INSERT INTO user_info (u_id, u_pw) VALUES ('$id', '$pw')");
if($sign) 
{
    echo "가입이 완료되었습니다.";
}