
<?php    

@include 'config.php';
session_start();

if(isset($_POST['submit'])){
   
       
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);
       

        $select = "SELECT * FROM users WHERE email='$email'&& password='$password'";
        $result = mysqli_query($conn, $select);


       
       
        if(mysqli_num_rows($result) > 0){ 
            
            $error[]= 'incorrect email or password!' ;
       

            }else{

                $insert = "INSERT INTO login_form(email , password) Values ('$email','$password')" ;
                mysqli_query($conn,$insert);
                header('location:home.php');
        }
   
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>


</head>
<body>


<div class="form-container">
    <form action="login_form.php" method="post">
        <h3>login now</h3>
        

        <?php if(isset($error)){
            foreach($error as $error){
                echo '<span class = "error-msg">'.$error. '</span>';
            };
         } ;
         ?>
        <label  for="email">email</label>
        <input type="text"name="email" required >
        <label  for="password">password</label>
        <input type="password" name="password" required  placeholder="enter 6 digit only">
        <input type="submit" name="submit" value="login now" class="form-btn">
        <p>don't have an account? <a href="register_form.php">  register now</a></p>
        <p>visit our <a href="about me.php">  about me page</a></p>
        <p> visit our<a href="home.php">  home page</a></p>
        <p>visit our <a href="contact us.php">  contact us page</a></p>

    </form>
    </div>
    
    
</body>
</html>
