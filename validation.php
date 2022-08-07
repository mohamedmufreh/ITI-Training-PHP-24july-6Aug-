<?php
session_start();

$data=$_POST; 
$errors=[];

$imgname = $_FILES['img']['name'];
$imgtmp =  $_FILES['img']['tmp_name'];




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

    $errors=json_encode($errors);
    if(count($data)>3){
        $olddata=json_encode($olddata);     $data=json_encode($data);
        header("Location:index.php?errors={$errors}&olddata={$olddata}&data={$data}");
    }
    else
    {
        if(count($olddata)>0){
            // $olddata = implode("," ,$olddata);
            $olddata=json_encode($olddata);
            header("Location:login_form.php?errors={$errors}&olddata={$olddata}");
        }else{
            header("Location:login_form.php?errors={$errors}");
        }
    }
}
else{
    $_SESSION['username']=$data['username'];
    $_SESSION['password']=$data['password'];
    $data=json_encode($data);
    $img=json_encode($img);
    $result=move_uploaded_file($imgtmp , "images/{$imgname}");
    header("Location:form.php?data={$data}&imgname={$imgname}&imgtmp={$imgtmp}"); 
}

   


?>