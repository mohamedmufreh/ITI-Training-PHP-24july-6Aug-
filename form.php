<?php

echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">';


echo '<div class="container">';
        echo " <h3>Saved In Your File</h3> <br>"; 
        // echo"<pre>"; 
        // var_dump($_POST); 
        // echo "</pre>"; 
        // die();
     /*   if($_POST['gender']=='male')
        {
            echo "<h2> thanks to Mr {$_POST['first_name']} {$_POST['last_name']} </h2>";
        }
        else
        {
            echo "<h2> thanks to Miss {$_POST['first_name']} {$_POST['last_name']} </h2>";
        }   */
     //    echo "<br> {$skills} <br>";  die();
       $id=time();
       $skills=$_POST['skill'];
       $skills=implode("-" , $skills);
       $userdata="{$id},{$_POST['first_name']} {$_POST['last_name']},{$_POST['email']},{$_POST['country']},{$_POST['address']},{$_POST['gender']},{$skills},{$_POST['phone']},{$_POST['username']},{$_POST['password']},{$_POST['department']}\n";
    //    echo"<pre>"; 
    //    var_dump($userdata); 
    //    echo "</pre>"; 
    //    die();
        $data = fopen("users.txt","a");
        fwrite($data,$userdata);
        fclose($data); 
        
        header("location:view.php");


echo '</div>';

?>