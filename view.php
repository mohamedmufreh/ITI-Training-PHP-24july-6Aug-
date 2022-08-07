<?php

echo'<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">';

$data=file("users.txt");
echo '<div class="container-fluid">';
    if(isset($_GET['check']) and $_GET['check']=="true"){
      echo '<center><h1 style="background-color:rgb(7, 7, 92);width:40%; padding:10px;
      margin-top:50px;
      border-radius: 10px;
      color: white;"> Deleted Successfully </h1></center>';
    }
    elseif(isset($_GET['check']) and $_GET['check']=="edit"){
        echo '<center><h1 style="background-color:rgb(7, 7, 92);width:40%; padding:10px;
        margin-top:50px;
        border-radius: 10px;
        color: white;"> Update Successfully </h1></center>';
    } 
echo '<table class="table table-danger">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Country</th>
      <th>Address</th>
      <th>Gender</th>
      <th>Skills</th>
      <th>Phone</th>
      <th>User Name</th>
      <th>Password</th>
      <th>Department</th>
      <th colspan="2">Options</th>
    </tr>   ';
if($data){
    foreach($data as $val){
        $user    =  trim($val, "\n");
        $userdata=  explode(",",$user );
        echo '<tr>'; 
        foreach($userdata as $value){
            echo "<td>$value</td>";
        }
        echo "<td><a href='edit_form.php?id={$userdata[0]}' class='btn btn-dark'>Edit</a></td> 
        <td><a href='delete.php?id={$userdata[0]}' class='btn btn-danger'>Delete</a></td>
        </tr>'";
    }
}
else{
    echo" <tr><td colspan='8' style='text-align:center;'> <h2> NO Data </h2> </td> </tr>";
}
 echo'</table>';

echo '</div>';

?>
