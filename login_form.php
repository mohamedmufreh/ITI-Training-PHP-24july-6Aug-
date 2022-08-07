<?php

echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">';

?>


<div class="container login-form">
    <center><h2>Login Form</h2></center>

        <form action="validation.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>