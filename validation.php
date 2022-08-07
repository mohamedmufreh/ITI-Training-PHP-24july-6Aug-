<?php

$data=$_POST;   
// echo '<pre>';
// var_dump($data);
// echo '</pre>';
// die();
$errors=[];
if(empty($data['username']) or empty($data['password']) or empty($data['email'])){
    if(empty($data['username'])){
        $errors["username"]="User Name Required";
    }
    else{
        $olddata["username"]=$data['username'];
    }
    if(empty($data['email'])){
        $errors["email"]="Email Required";
    }
    else{
        $olddata["email"]=$data['email'];
    }
    if(empty($data['password'])){
        $errors["password"]="Password Required";
    }
    else{
        $olddata["password"]=$data['password'];
    }

}

    $error = implode("," , $errors);
    header("location:login_form.php?errors={$error}");



?>