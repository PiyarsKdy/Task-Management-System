
<?php
$insert= "0";
$name_error="0";
$phone_error="0";


if(isset($_POST['name'])){

  


if($_POST['emp_id']==""){
    $name_error="1";
}
if($_POST['username']==""){
    $phone_error="1";
}


if($name_error=="0" &&  $phone_error=="0"){

    include "conection.php";

    $emp_id = $_POST['emp_id'];
    $dept_id = $_POST['dept_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dest = $_POST['dest'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $pro = $_POST['pro'];
    
    $sql="INSERT INTO \"TMS\".\"Employee\" VALUES( '$emp_id', '$dept_id','$username','$password','$dest','$name','$city','$state','$email','$pro' );"  ;


// echo $sql;
$r=pg_query($con,$sql);

if($r){
    $insert=true;
    $insert= "true";

    echo "success";
}
else{
    echo "FAIL";

    // $insert=false;
    echo" ERROR:  $sql <br> $con->error";
}



}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS</title>
    <link rel="stylesheet" href="style.css?v=6">
</head>
<body>
    <div class="coin">

        <h2>Fill Now</h2>
        <button class="bglass"> <a href="show.php">Show Client Data</a></button>
        <button class="bglass"> <a href="any.php">Run Query</a></button>
        <button class="bglass"> <a href="main.php">Main Manu</a></button>
        <h4>Enter Your Details Poperly</h4>
        <form action="index.php" method="post" class="form_class">

        <input type="text" name="emp_id" id="emp_id" placeholder="Enter Your Employee ID ">

        <input type="text" name="dept_id" id="dept_id" placeholder="Enter Your dept ID ">

        <input type="text" name="username" id="username" placeholder="Enter Your username ">

        <input type="password" name="password" id="password" placeholder="Enter Your Password ">
        
        <input type="text" name="dest" id="dest" placeholder="Enter Your Destination">
        
        <input type="text" name="name" id="name" placeholder="Enter your name">
        
        <input type="text" name="city" id="city" placeholder="Enter Your City ">

        <input type="text" name="state" id="state" placeholder="Enter Your State ">

        <input type="email" name="email" id="email" placeholder="Enter your email">
        
        <input type="text" name="pro" id="pro" placeholder="Your Progress">
        
        <br>
      <?php
      if($name_error == "1" ||  $phone_error == "1")
      {
        echo"<div class='err'>Employee And Username Number Are Required !! </div>";
   
      }
        if($insert=="true"){
            echo"<div class='msg'>submit succsess</div>";
        }
        
      ?>
        <button class="btn bglass" >Submit</button>
    </form>

</div>
    <script src="index.js"></script>

</body>
</html>








