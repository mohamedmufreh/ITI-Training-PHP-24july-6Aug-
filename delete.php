<?php

$id = $_GET['id'];
$data=file("users.txt");
$check=false;
foreach($data as $key => $val){                 // Key is the index of the data array
    $users=trim($val,"\n");                     // val is the value of the data array
    $users=explode("," , $users);               // users is the handled data to check id
    if($users[0]== $id){
        unset($data[$key]);
        $fileobj = fopen("users.txt","w");
        foreach($data as $u){
            $userinfo = trim($u,"\n");
            fwrite($fileobj,$userinfo.PHP_EOL);
        }
        $check=true;
        break;
    }
}

if($check){
    header('location:view.php?check=true');
}else{
    header('location:view.php?check=false');
}


?>