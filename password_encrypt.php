<?php

$pass = "vikrant";
$str_pass = password_hash($pass,PASSWORD_BCRYPT);

echo $str_pass;

$pass_check =  password_verify($pass,$str_pass);

if($pass_check){
    echo"login successfully";

}else{
    echo"login failed";
}


?>

