<?php
echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">';

$id = $_GET['id'];
$data=file("users.txt");
$skills=[];

foreach($data as $key => $val){                 // Key is the index of the data array
    $users=trim($val,"\n");                     // val is the value of the data array
    $users=explode("," , $users);               // users is the handled data to check id
    if($users[0]==$id){
        break;
    }
}
$skills[]=explode("-" , $users[6]);             // handling skills (converted str2arr)
$name[]=explode(" ",$users[1]);
// echo"<pre>";        
// var_dump($users); 
//         echo "</pre>"; 
//         die();
?>
<div class="container">
<form action="update.php?id=<?php echo $id;?>" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input value="<?php echo $name[0][0]; ?>" type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">last Name</label>
        <input value="<?php echo $name[0][1]; ?>" type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input value="<?php echo $users[2]; ?>" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Address</label>
        <input value="<?php echo $users[4]; ?>" type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp">
    </div>

<!-- ---------------------------------------------------------------------------------- -->
    <div>
        <select name="country" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php 
                if(isset($users[3])){
                    if($users[3]=="Egypt"){
                        echo '<option selected value="Egypt">Egypt</option>';
                        echo '<option value="England">England</option>';
                        echo '<option value="China">China</option>';
                    }elseif($users[3]=="England"){
                        echo '<option value="Egypt">Egypt</option>';
                        echo '<option selected value="England">England</option>';
                        echo '<option value="China">China</option>';
                    }elseif($users[3]=="China"){
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

<!-- ------------------------------------------------------------------------------ -->
    <div class="form-check">
        <label class="form-check-label">
            Gender:
        </label><br>

        <?php if(isset($users[5])){ 
                if($users[5]=="male"){
                    echo '<input checked class="form-check-input" name="gender" type="radio" value="male" id="gender">';
                    echo '<p>male</p>';
                    echo '<input class="form-check-input" name="gender" type="radio" value="female" id="gender">';
                    echo '<p>Female</p>';
                }elseif($users[5]=="female"){
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

<!-- ------------------------------ -->
    <div class="form-check">
        <label class="form-check-label">
            Skills
        </label><br>
        <?php if(isset($skills)){
                if(count($skills[0])==1)
                { 
                    if($skills[0][0]=="PHP"){
                        echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                        echo '<p>PHP</p>';
                        echo '<input class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                        echo '<p>HTML</p>';
                    }elseif($skills[0][0]=="HTML"){
                        echo '<input class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                        echo '<p>PHP</p>';
                        echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                        echo '<p>HTML</p>';
                    }
                }
                elseif(count($skills[0])==2){
                    echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="PHP">';
                    echo '<p>PHP</p>';
                    echo '<input checked class="form-check-input" name="skill[]" type="checkbox" value="HTML">';
                    echo '<p>HTML</p>';
                }
            }
            else{
                echo '<input class="form-check-input" name="skill[]" type="checkbox" value="PHP">}';
                echo '<p>PHP</p>';
                echo '<input class="form-check-input" name="skill[]" type="checkbox" value="HTML">}';
                echo '<p>HTML</p>';
            }   
        ?>

    </div>
<!-- ------------------------------ -->
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone</label>
        <input value="<?php echo $users[7]; ?>" type="text" name="phone" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">User Name</label>
        <input value="<?php echo $users[8]; ?>" type="text" name="username" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input value="<?php echo $users[9]; ?>" type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
   
    
    <!-- <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Departments</label>
        <input value="<?php echo $users[10]; ?>" type="text" name="department" class="form-control" id="exampleInputPassword1" value="Open Source">
    </div> -->


    <!-- <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">3hY4u</label>
        <input type="text" name="Code" class="form-control" id="exampleInputPassword1" value="3hY4u">
        <p>Please Insert Code Above</p>
    </div> -->


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
