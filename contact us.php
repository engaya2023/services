<?php 

include 'config.php' ;

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);
 
    $select = "SELECT * FROM contact WHERE email='$email'&& name='$name' 
    && subject='$subject' && message= '$message' && mobile ='$mobile' && name ='$name'";

    $result = mysqli_query($conn, $select);


 
    if(mysqli_num_rows($result) > 0){

            $error[] = 'Duplicated information ' ;

    }else{

        $ins = " INSERT INTO contact (name,mobile,subject,email, message) VALUES ('$name','$mobile','$subject','$email' ,'$message')" ;
        mysqli_query($conn,$ins);


    }

};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    
<form action="contact us.php" method = "post">

    <?php if(isset($error)){
            foreach($error as $error){
                echo '<span class = "error-msg">'.$error. '</span>';
            };
         } ;
         ?> 
<br>
<div>
<label for="name">name</label>
<input type="text" name="name" id="name" required >
</div>
<br>
<div>
<label for="mobile">mobile</label>
<input type="text" name="mobile" id="mobile" required>
</div>
<br>
<div>
<label for="email">email</label>
<input type="email" name="email" id="email" required>
</div>
<br>
<div>
<label for="subject" >subject</label>
<select name="subject" id="subject" required>
            <option value="electricity">electricity</option>
            <option value="carpentry">carpentry</option>
            <option value="plumbing">plumbing</option>
            <option value="conditioning">conditioning</option>
            <option value="ceramic">ceramic</option>
            <option value="Aluminum">Aluminum</option>
            <option value="painting">painting</option>
            <option value="cleaning">cleaning</option>
        </select>
        </div>
        <br>
        
<textarea name="message" id="" cols="30" rows="10"></textarea>
<input type="submit" name="submit" value="send message">



</div>




</form>





</body>
</html>