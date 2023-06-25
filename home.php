<?php 

include 'config.php';

session_start();


 if(isset($_POST['submit'])){




                $service1 = mysqli_real_escape_string($conn,$_POST['Electricity']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service1')" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');
                        

                $service2 = mysqli_real_escape_string($conn,$_POST['Carpentry']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service2')" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');
                        

                $service3 = mysqli_real_escape_string($conn,$_POST['Cleaning']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service3')" ;
                            mysqli_query($conn,$insert);
                           header ('location:client.php');
                        

                $service4 = mysqli_real_escape_string($conn,$_POST['Plumping']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service4')" ;
                            mysqli_query($conn,$insert);
                             header ('location:client.php');

                $service5 = mysqli_real_escape_string($conn,$_POST['Ceramic']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service5')" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');

                $service6 = mysqli_real_escape_string($conn,$_POST['Painting']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service'6)" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');

                $service7 = mysqli_real_escape_string($conn,$_POST['Conditioning']);
                           $insert = " INSERT INTO  client (service) VALUES ('$service7')" ;
                           mysqli_query($conn,$insert);
                            header ('location:client.php');


                $service8 = mysqli_real_escape_string($conn,$_POST['Aluminum']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service8')" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');

                $service9 = mysqli_real_escape_string($conn,$_POST['Satellite']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service9')" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');

                $service10 = mysqli_real_escape_string($conn,$_POST['Gypsum Board']);
                                $insert = " INSERT INTO  client (service) VALUES ('$service10')" ;
                                mysqli_query($conn,$insert);
                                header ('location:client.php');

                $service11 = mysqli_real_escape_string($conn,$_POST['Appliances']);
                                $insert = " INSERT INTO  client (service) VALUES ('$service11')" ;
                                mysqli_query($conn,$insert);
                                header ('location:client.php');

                $service12 = mysqli_real_escape_string($conn,$_POST['Sterilization & Disinfection']);
                
                                $insert = " INSERT INTO  client (service) VALUES ('$service12')" ;
                                mysqli_query($conn,$insert);
                                header ('location:client.php');

                $service13 = mysqli_real_escape_string($conn,$_POST['Pest Control']);
                                $insert = " INSERT INTO  client (service) VALUES ('$service13')" ;
                                mysqli_query($conn,$insert);
                                header ('location:client.php');

                $service14 = mysqli_real_escape_string($conn,$_POST['Plastering']);
                            $insert = " INSERT INTO  client (service) VALUES ('$service14')" ;
                            mysqli_query($conn,$insert);
                            header ('location:client.php');

    

   
   

 
    };



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div> <a href="about me.php">about me</a></div> 
        <div><a href="contact us.php">contact us</a></div> 
        <div><a href="login_form.php">login</a></div>
        <div><a href="register_form.php">register_form</a></div> 
        <div><a href="api_worker_get.php">get_worker</a></div>
        <div><a href="api_client_get.php">get_client</a></div>
        <div><a href="api_login_get.php">get_login</a></div>
        <div><a href="logout.php">log_out</a></div> 


        <br>
        
    <div>
        <form action="home.php" method="post" >  
        <label for="Electricity">Electricity</label>
        <select name="Electricity"  id ="Electricity">
        <option value="">Install flash light/Neon 60/120 CM 30-35 EGP</option>
            <option value="">Remove spot light 15-20 EGP</option>
            <option value="">Install spot lights with creating a hole on gypsum 40-45 EGP</option>
            <option value="">Install wall mount without breaking 30-35 EGP</option>
            <option value="">Install wall mount with breaking 85-90 EGP</option>
            <option value="">Install short led strip 50-55 EGP</option>
            <option value="">Install small assembled chandeliers without installing hanger 105-100 EGP</option>
            <option value="">Install small assembled chandeliers without installing hanger 105-100 EGP</option>
            <option value="">Install unassembled chandeliers without installing hanger 105-100 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>
        
        <form action="home.php" method="post">
        <label for="Carpentry">Carpentry</label>
        <select name="Carpentry"  id ="Carpentry">
            <option value="">Install/Uninstall old door frame 105-110 EGP</option>
            <option value="">Install new door frame + hings + handles + kallons 295-300 EGP</option>
            <option value="">Install handles 20-25 EGP</option>
            <option value="">Install/remove door kallon 50-55 EGP</option>
            <option value="">Install door kallon 115-120 EGP</option>
            <option value="">Adjust door 50-55 EGP</option>
            <option value="">Install Accordion door 105-110 EGP</option>
            <option value="">uninstall Accordion door 100-100 EGP</option>
            <option value="">change kallon internal part 40-45 EGP</option>
            <option value="">open locked door 150-155 EGP</option>
            <option value="">install wood on the side of the bed 100-100 EGP</option>
            <option value="">Shorten Bed boards 10-15 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Plumbing">Plumbing</label>
        <select name="Plumbing"  id ="Plumbing">
            <option value="Install shower Mixer">Install shower Mixer 90-95 EGP</option>
            <option value="Install sink mixer">Install sink mixer 70-75 EGP</option>
            <option value="Install wall mounted sink and mixer">Install wall mounted sink and mixer 145-150 EGP</option>
            <option value="Install kitchen sink mixer">Install kitchen sink mixer 70-75 EGP</option>
            <option value="Install faucet for Automatic washing machine">Install faucet for Automatic washing machine 45-50 EGP</option>
            <option value="Install regular faucet">Install regular faucet 45-50 EGP</option>
            <option value="Install stain less sink">Install stain less sink 145-150 EGP</option>
            <option value="Install stain less drums">Install stain less drums 115-120 EGP</option>
            <option value="Install  two stain less drums with mixer">Install  two stain less drums with mixer 195-200 EGP</option>
            <option value="Install wall mounted sinks">Install wall mounted sink 115-120 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Painting">Painting</label>
        <select name="Painting"  id ="Painting">
            <option value="Paint door(lacquer)(per 1 item) maintenance ">Paint door(lacquer)(per 1 item) maintenance 245-250 EGP</option>
            <option value="Paint window(lacquer)(per 1 item) maintenance ">Paint window(lacquer)(per 1 item) maintenance 170-175 EGP</option>
            <option value="Paint balcony window(lacquer) maintenance ">Paint balcony window(lacquer) maintenance 295-300 EGP</option>
            <option value="Paint door(lacquer)(per 1 item) Setup & Finishing ">Paint door(lacquer)(per 1 item) Setup & Finishing 475-480 EGP</option>
            <option value="Paint window(lacquer)(per 1 item) Setup & Finishing ">Paint window(lacquer)(per 1 item) Setup & Finishing 295-300 EGP</option>
            <option value="Decorate walls">Decorate walls 30-35 EGP</option>
            <option value="Pasting wallpaper (per 1m)">Pasting wallpaper (per 1m) 30-35 EGP </option>
            <option value="Paint walls & decorated corniche (per 1m)">Paint walls & decorated corniche (per 1m) 10-15 EGP</option>
            <option value="Paint regular wall or gypsum board per meter">Paint regular wall or gypsum board per meter 20-25 EGP</option>
            <option value="Make decorate corniche - vertical metering">Make decorate corniche - vertical metering 15-20 EGP</option>
            <option value="Make decorate corniche - horizontal metering">Make decorate corniche - horizontal metering 25-30 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Conditioning">Conditioning</label>
        <select name="Conditioning"  id ="Conditioning">
            <option value="">Clear air conditioner & External unit 295-300 EGP</option>
            <option value="">Fix leaking firion (Pipe Welding) 305-310 EGP</option>
            <option value="">Extend air conditioner tube 410-415 EGP</option>
            <option value="">Fix noisy External unit 355-360 EGP</option>
            <option value="">Fix noisy internal unit 355-360 EGP</option>
            <option value="">Fix water leaking 260-265 EGP</option>
            <option value="">Fix leaking firion(Regular Pipe Welding) 230-235 EGP</option>
            <option value="">Install air conditioner external and internal units (1.5/2.25 hp) 475-780 EGP</option>
            <option value="">Install a hang for the external unit 145-150 EGP</option>
            <option value="">Change External unit compressor and firion recharge 1175-1180 EGP</option>
            <option value="">Change heat sensor 295-300 EGP</option>
            <option value="">Uninstall conditioner internal and external (1.5/2.25 hp) 165-170 EGP</option>
            <option value="">Remove the internal unit 120-125 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Cleaning">Cleaning</label>
        <select name="Cleaning"  id ="Cleaning">
            <option value="Area from 80 to 100 meter">Area from 80 to 100 meter 235-235 EGP</option>
            <option value="Area from 100 to 150 meter">Area from 100 to 150 meter 295-295 EGP</option>
            <option value="Area from 150 to 200 meter">Area from 150 to 200 meter 353-353 EGP</option>
            <option value="Area from 200 to 250 meter">Area from 200 to 250 meter 412-412 EGP</option>
            <option value="Area from 250 to 300 meter">Area from 250 to 300 meter 590-590 EGP</option>
            <option value="Area from 300 to 350 meter">Area from 300 to 350 meter 765-765 EGP</option>
            <option value="Area from 350 to 400 meter">Area from 350 to 400 meter 945-945 EGP</option>
            <option value="Area from 400 to 450 meter">Area from 400 to 450 meter 1120-1120 EGP</option>
            <option value="Area from 450 to 500 meter">Area from 450 to 500 meter 1295-1295 EGP</option>
            <option value="Area from 500 to 550 meter">Area from 500 to 550 meter 1475-1457 EGP</option>
            <option value="Area from 550 to 600 meter ">Area from 550 to 600 meter 1885-1885 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Satellite & Receiver">Satellite & Receiver</label>
        <select name="Satellite & Receiver"  id ="Satellite & Receiver">
            <option value="Make software for receiver">Make software for receiver 50-55 EGP</option>
            <option value="Change/connect new dish wire">Change/connect new dish wire 75-80 EGP</option>
            <option value="Adjust 1m dish signal for 1 satellite only ">Adjust 1m dish signal for 1 satellite only 70-75 EGP</option>
            <option value="Adjust 1m dish signal for 2 satellite only">Adjust 1m dish signal for 2 satellite only 70-75 EGP</option>
            <option value="ceramic">Adjust 180m dish signal for 2 to 12 satellites only 200-205 EGP </option>
            <option value="Adjust 240m dish up to 12 satellites">Adjust 240m dish up to 12 satellites 250-255 EGP</option>
            <option value=" Install dish with one outlet">Install dish with one outlet 125-130 EGP</option>
            <option value="Install dish with four outlet">Install dish with four outlet 200-205 EGP</option>
            <option value="Install display hanger for TV">Install display hanger for TV 50-55 EGP </option>
            <option value="Install camshaft">Install camshaft EGP</option>
            <option value="Uninstall satellite dish">Uninstall satellite dish 50-55 EGP</option>
            <option value="Haven't found the service Need help?">Haven't found the service Need help? 60-65 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Gypsum Board">Gypsum Board</label>
        <select name="Gypsum Board"  id ="Gypsum Board">
            <option value="The cost is estimated after the inspection">The cost is estimated after the inspection 100-100 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Ceramic">Ceramic</label>
        <select name="Ceramic"  id ="Ceramic">
            <option value="The reservation must be completed so that the professional 'technical' can perform an inspection 
                for identifying the requirements the order cost.">
                The reservation must be completed so that the professional "technical" can perform an inspection 
                for identifying the requirements the order cost.
            </option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Aluminum">Aluminum</label>
        <select name="Aluminum"  id ="Aluminum">
            <option value="Remove/Install aluminum window">Remove/Install aluminum window 47-59 EGP</option>
            <option value="Install wheels ,or rubber frame for aluminum window">Install wheels ,or rubber frame for aluminum window 25-30 EGP</option>
            <option value="Change/repair aluminum window lock">Change/repair aluminum window lock 53-59EGP</option>
            <option value="Window doesn't close/open properly">Window doesn't close/open properly 52-59 EGP</option>
            <option value="Repair bent aluminum window frame">Repair bent aluminum window frame 53-59 EGP</option>
            <option value="Change broken/torn wire/mesh for aluminum window">Change broken/torn wire/mesh for aluminum window 53-59 EGP</option>
            <option value="Air/dust leakage from window">Air/dust leakage from window 53-59 EGP</option>
            <option value="Install lock aluminum door ">Install lock aluminum door 165-176 EGP</option>
            <option value="Install wheels ,or rubber frame for aluminum door">Install wheels ,or rubber frame for aluminum door 171-176 EGP</option>
            <option value="Install hydrolic aluminum door">Install hydrolic aluminum door 53-59 EGP</option>
            <option value="door doesn't close/open">door doesn't close/open 53-59 EGP</option>
            <option value="Repair bent aluminum door frame">Repair bent aluminum door frame 53-59 EGP</option>
            <option value="Change aluminum door lock ">Change aluminum door lock 53-59 EGP</option>
            <option value="Change broken/torn wire/mesh for aluminum door">Change broken/torn wire/mesh for aluminum door 82-88 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Appliances">Appliances</label>
        <select name="Appliances"  id ="Appliances">
            <option value="">Repair/change freon 455-500 EGP</option>
            <option value="">Unclosing drainage pipe with charging freon 645-650 EGP</option>
            <option value="">Change compressor 550-600 EGP</option>
            <option value="">Calibrate/repair thermostat 118-123 EGP</option>
            <option value="">Change/repair fun 176-181 EGP </option>
            <option value="">Unclogging drainage pipe 100-105 EGP</option>
            <option value="">Repair /replace hings 176-181 EGP</option>
            <option value="">Change chipset 145-150 EGP </option>
            <option value="">Repair chipset 495-500 EGP </option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Sterilization & Disinfection">Sterilization & Disinfection</label>
        <select name="Sterilization & Disinfection"  id ="Sterilization & Disinfection">
            <option value="">Area less than 500 meters(using spray machines and disinfectant materials sprayed on floors,
                furnitures,bathrooms and kitchens) child and pet safe 5-5 EGP
            </option>
            <option value="">Area larger than 500 meters (using spray machines and disinfection materials sprayed on floors,
                 furnitures,bathrooms and kitchens) child and pet safe  4-4 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Pest Control">Pest Control</label>
        <select name="Pest Control"  id ="Pest Control">
            <option value="">Area from 80 to 100 meter 750-750 EGP</option>
            <option value="">Area from 100 to 200 meter 850-850 EGP</option>
            <option value="">Area from 200 to 300 meter 950-950 EGP</option>
            <option value="">Area more than meter 1200-1200 EGP</option>
            <option value="">Bathroom /Room/Living room  100-100 EGP</option>
            <option value="">Garden 550-550 EGP</option>
            <option value="">The cost is estimated after the inspection 100-100 EGP</option>
            <option value="">Area from 80 to 100 meter 235-235 EGP</option>
        </select>
        <input type="submit" name="submit" value="select" class="form-btn">
        </form>

        <form action="home.php" method="post">
        <label for="Plastering">Plastering</label>
        <select name="Plastering"  id ="Plastering">
            <option value=""> طرتشه و محارة</option>
            <option value="">طرتشه و محارة</option>
            <option value="">طرتشه + محارة دراع</option>
            <option value=""> ضهاره و مصيص </option>
        </select>


        <input type="submit" name="submit" value="select" class="form-btn">
     </form>
        

    
    <p>already have an account? <a href="client.php"> Register now</a></p>

  </div>
  
  

        

</body>
</html>