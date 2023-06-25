<?php    

    include 'config.php';
    
     session_start();

    if(isset($_POST['submit'])){

        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $city = mysqli_real_escape_string($conn,$_POST['city']);
        $service = mysqli_real_escape_string($conn,$_POST['service']);



        $select = " SELECT * FROM users WHERE email='$email' && password ='$pass' ";
        $result = mysqli_query($conn,$select);
       
        if(mysqli_num_rows($result) > 0){
            
            $error[] ='user already exist!' ;

        }else{
            
                $insert = " INSERT INTO  users ( first_name ,last_name,phone,email,password, address,city, service) 
                VALUES ('$first_name','$last_name','$phone','$email','$password','$address','$city','$service')" ;
                 mysqli_query($conn,$insert);
                 header ('location:home.php');

            };
    };       
    

12
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>


    
</head>
<body>




    

<div >

    <form action="register_form.php" method="post" >  
        <!-- id = postForm -->
        <h3>Register now</h3>


        <?php if(isset($error)){
            foreach($error as $error){
                echo '<span class = "error-msg">'.$error. '</span>';
            };
         } ;
         ?>

        <label for="first_name"> first_name</label>
        <input type="text" name="first_name" id="first_name" required >
        <label for="last_name">last_name</label>
        <input type="text" name=" last_name" id="last_name" required >
        <label for="phone"> phone </label>
        <input type="text" name="phone" id="phone" required placeholder="enter 11 number" >
        <label for="email">email</label>
        <input type="email" name="email" id="email" required >
        <label for="password">password</label>
        <input type="text" name="password" id ="password" required placeholder="enter six number">
        <label for="address">address</label>
        <input type="address" name=" address" id="address" required placeholder="123 main st">
        <label for="city">city</label>
        <input type="text" name="city" id="city" required >
        <label for="service"></label>
        <select name="service"  id ="service">
            <option value="electricity">electricity</option>
            <option value="carpentry">carpentry</option>
            <option value="plumbing">plumbing</option>
            <option value="conditioning">conditioning</option>
            <option value="ceramic">ceramic</option>
            <option value="Aluminum">Aluminum</option>
            <option value="painting">painting</option>
            <option value="cleaning">Plastering</option>
            <option value="cleaning">Appliances</option>
            <option value="cleaning">cleaning</option>
        </select>

        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php"> login now</a></p>
    </form>
    
  </div>
  
 

        
    
</body>
</html>