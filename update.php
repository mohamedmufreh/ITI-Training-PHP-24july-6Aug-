<?php

$id=$_GET["id"];
$data=$_POST;
$skills=$_POST['skill'];
$skills=implode("-" , $skills);
$edited_user="{$id},{$_POST['first_name']} {$_POST['last_name']},{$_POST['email']},{$_POST['country']},{$_POST['address']},{$_POST['gender']},{$skills},{$_POST['phone']},{$_POST['username']},{$_POST['password']},{$_POST['department']}\n";

$file=file("users.txt");

$check=false;
foreach($file as $key => $val){                 // Key is the index of the data array
    $users=trim($val,"\n");                     // val is the value of the data array
    $users=explode("," , $users);               // users is the handled data to check id
    if($users[0]== $id){
        $file[$key]=$edited_user;
        // echo"<pre>";        
        // var_dump($file); 
        // echo "</pre>"; 
        // die();
        $fileobj = fopen("users.txt","w");
        foreach($file as $u){
            $userinfo = trim($u,"\n");
            fwrite($fileobj,$userinfo.PHP_EOL);
        }
        $check=true;
        break;
    }
} 

if($check){
    header('location:view.php?check=edit');
}else{
    header('location:view.php?check=noedit');
}



?>