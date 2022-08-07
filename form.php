<?php

echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">';


$alldata = $_GET['data'];
$alldata = (array)json_decode($alldata);

if(!empty($_GET["imgname"])){
    $imgname = $_GET['imgname'];
    $imgtmp  = $_GET['imgtmp'];
}

echo '<div class="container">';

if(isset($alldata['first_name'])){
       $id=time();
       $skills=$alldata['skill'];
       $skills=implode("-" , $skills);
       $userdata="{$id},{$alldata['first_name']} {$alldata['last_name']},{$alldata['email']},{$alldata['country']},{$alldata['address']},{$alldata['gender']},{$skills},{$alldata['phone']},{$alldata['username']},{$alldata['password']},{$imgname}\n";

        $data = fopen("users.txt","a");
        fwrite($data,$userdata);
        fclose($data); 
        
        header("location:view.php");
}else{
    header("location:view.php");
}

echo '</div>';

?>