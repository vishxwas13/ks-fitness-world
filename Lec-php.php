<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Lab-databases</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="firstname" placeholder="First-name">
    <input type="text" name="lastname" placeholder="Last-name">
    <input type="number" name="number" placeholder="number">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit">
    
    </form>
    <?php
        $username = "root";
        $password = "";
        $server = "localhost";
        $db = "lecture";
        
        $con = mysqli_connect($server,$username,$password,$db);
       
        if(isset($_POST['submit'])){
             $first_name = $_POST['firstname'];
             $last_name = $_POST['lastname'];
             $number = $_POST['number'];
             $password = $_POST['password'];
             $insertquery = " insert into form(first-name,last-name,number,password) values('$first_name','$last_name,'$number','$password')";
   $result= mysqli_query($con,$insertquery);

   if($result){
        ?>
        <script> alert("Submitted successfully! we will contact you soon."); </script>
        <?php
       
    }else{
        ?>
         <script> alert("Submition Failed! try again later."); </script>
         <?php
    }
   
    
 }

    ?>
</body>
</html>