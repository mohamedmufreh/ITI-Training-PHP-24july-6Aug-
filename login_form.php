<?php
session_start();

echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">';

if(!empty($_GET)){
    $errors=$_GET['errors'];    $olddata=$_GET['olddata'];
    $errors = (array)json_decode($errors);
    $olddata = (array)json_decode($olddata);
}




?>


<div class="container login-form">
    <center><h2>Login Form</h2></center>

        <form action="validation.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input  value="<?php if(isset($olddata['username'])){echo $olddata['username'];}?>" type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <h3 class="text-danger text-"> <?php if(isset($errors["username"])){echo $errors["username"];} ?></h3>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input value="<?php if(isset($olddata['email'])){echo $olddata['email'];}?>" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <h3 class="text-danger text-"> <?php if(isset($errors["email"])){echo $errors["email"];} ?></h3>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input value="<?php if(isset($olddata['password'])){echo $olddata['password'];}?>" type="password" name="password" class="form-control" id="exampleInputPassword1">
                <h3 class="text-danger text-"> <?php if(isset($errors["password"])){echo $errors["password"];} ?></h3>
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>