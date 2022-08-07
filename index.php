<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login_form.php");
}

if(!empty($_GET)){
    $errors=$_GET['errors'];    $olddata=$_GET['olddata'];      $data=$_GET['data'];
    $errors  = (array)json_decode($errors);
    $olddata = (array)json_decode($olddata);
    $data    = (array)json_decode($data);
    // echo '<pre>';var_dump($data);echo '</pre>';die();
}


?>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>    
    <div class="container">
        <form action="validation.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" name="first_name" value="<?php if(isset($data['first_name'])){echo $data['first_name'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">last Name</label>
                <input type="text" name="last_name" value="<?php if(isset($data['last_name'])){echo $data['last_name'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" value="<?php if(isset($olddata['email'])){echo $olddata['email'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <h3 class="text-danger text-"> <?php if(isset($errors["email"])){echo $errors["email"];} ?></h3>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="address" value="<?php if(isset($data['address'])){echo $data['address'];}?>" class="form-control" id="address" aria-describedby="emailHelp">
            </div>


            <div>
                <select name="country" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <?php
                        if(isset($data['country']) and $data['country']!='Open this select menu'){
                            if($data['country']=="Egypt"){
                                echo '<option selected value="Egypt">Egypt</option>';
                                echo '<option value="England">England</option>';
                                echo '<option value="China">China</option>';
                            }elseif($data['country']=="England"){
                                echo '<option value="Egypt">Egypt</option>';
                                echo '<option selected value="England">England</option>';
                                echo '<option value="China">China</option>';
                            }elseif($data['country']=="China"){
                                echo '<option value="Egypt">Egypt</option>';
                                echo '<option value="England">England</option>';
                                echo '<option selected value="China">China</option>';
                            }
                        } 
                        else{
                           echo ' <option  selected>Open this select menu</option>
                            <option  value="Egypt">Egypt</option>
                            <option  value="England">England</option>
                            <option  value="China">China</option>   ';
                        }
                    ?>

                  </select>
            </div>

<!-- -------------------------------------------------------------------- -->
            <div class="form-check">
                <label class="form-check-label">
                    Gender:
                </label><br>
                <?php if(isset($data['gender'])){ 
                if($data['gender']=="male"){
                    echo '<input checked class="form-check-input" name="gender" type="radio" value="male" id="gender">';
                    echo '<p>male</p>';
                    echo '<input class="form-check-input" name="gender" type="radio" value="female" id="gender">';
                    echo '<p>Female</p>';
                }elseif($data['gender']=="female"){
                    echo '<input class="form-check-input" name="gender" type="radio" value="male" id="gender">';
                    echo '<p>male</p>';
                    echo '<input checked class="form-check-input" name="gender" type="radio" value="female" id="gender">';
                    echo '<p>Female</p>';
                }
            }
            else{
                echo '<input class="form-check-input" name="gender" type="radio" value="male" id="gender">';
                echo '<p>male</p>';
                echo '<input class="form-check-input" name="gender" type="radio" value="female" id="gender">';
                echo '<p>Female</p>';
            }   
        ?>
            </div>


            <div class="form-check">
                <label class="form-check-label">
                    Skills
                </label><br>
                <?php if(isset($data['skill'])){
                if(count($data['skill'])==1)
                { 
                    if($data['skill'][0]=="PHP"){
                        echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                        echo '<p>PHP</p>';
                        echo '<input class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                        echo '<p>HTML</p>';
                    }elseif($data['skill'][0]=="HTML"){
                        echo '<input class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                        echo '<p>PHP</p>';
                        echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                        echo '<p>HTML</p>';
                    }
                }
                elseif(count($data['skill'])==2){
                    echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                    echo '<p>PHP</p>';
                    echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                    echo '<p>HTML</p>';
                }
            }
            else{
                echo '<input class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                echo '<p>PHP</p>';
                echo '<input class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                echo '<p>HTML</p>';
            }   
        ?>
            </div>
<!-- ------------------------------------------------------------------- ------------------>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input value="<?php if(isset($data['phone'])){echo $data['phone'];} ?>" type="text" name="phone" class="form-control" id="exampleInputPassword1">
            </div>
<!-- ----------------------------------------------------------------------- ----------------->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">User Name</label>
                <input type="text" name="username" value="<?php if(isset($olddata['username'])){echo $olddata['username'];}?>" class="form-control" id="exampleInputPassword1">
                <h3 class="text-danger text-"> <?php if(isset($errors["username"])){echo $errors["username"];} ?></h3>
            </div>
<!-- ---------------------------------------------------------------------------------- -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="<?php if(isset($olddata['password'])){echo $olddata['password'];}?>" id="exampleInputPassword1">
                <h3 class="text-danger text-"> <?php if(isset($errors["password"])){echo $errors["password"];} ?></h3>
            </div>
<!-- ------------------------------------------------------------------------------- -->
            <!-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Departments</label>
                <input type="text" name="department" class="form-control" id="exampleInputPassword1" value="Open Source">
            </div> -->

<!-- ------------------------------------------------------------------------------------ -->
            <!-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">3hY4u</label>
                <input type="text" name="Code" class="form-control" id="exampleInputPassword1" value="3hY4u">
                <p>Please Insert Code Above</p>
            </div> -->
<!-- ------------------------------------------------------------------------------------- -->

            <div class="mb-3">
                <label class="form-label" for="customFile">Choose your file</label>
                <input type="file" class="form-control" name="img" id="customFile" >
            </div>

<!----------------------------------------------------------------------------------------  -->
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>