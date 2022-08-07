<?php?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <form action="form.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">last Name</label>
                <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp">
            </div>


            <div>
                <select name="country" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option  selected>Open this select menu</option>
                    <option  value="Egypt">Egypt</option>
                    <option  value="England">England</option>
                    <option  value="China">China</option>
                  </select>
            </div>


            <div class="form-check">
                <label class="form-check-label">
                    Gender:
                </label><br>
                <input class="form-check-input" name="gender" type="radio" value="male" id="gender">
                <!-- <label class="form-check-label" for="flexCheckDefault" style="margin-right: 50px;"> -->
                  <p>male</p>
                <!-- </label> -->
                <input class="form-check-input" name="gender" type="radio" value="female" id="gender">
                <!-- <label class="form-check-label" for="flexCheckDefault"> -->
                <p>Female</p>
                <!-- </label> -->
            </div>


            <div class="form-check">
                <label class="form-check-label">
                    Skills
                </label><br>
                <input class="form-check-input" name="skill[]" type="checkbox" value="PHP" >
                <!-- <label class="form-check-label" for="flexCheckDefault" style="margin-right: 50px;"> -->
                  <p>PHP</p>
                <!-- </label> -->
                <input class="form-check-input" name="skill[]" type="checkbox" value="HTML">
                <!-- <label class="form-check-label" for="flexCheckDefault"> -->
                <p>HTML</p>
                <!-- </label> -->
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Departments</label>
                <input type="text" name="department" class="form-control" id="exampleInputPassword1" value="Open Source">
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">3hY4u</label>
                <input type="text" name="Code" class="form-control" id="exampleInputPassword1" value="3hY4u">
                <p>Please Insert Code Above</p>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>