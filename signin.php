<!--@coderMo-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LoginForm</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="flex">
    <div class="container">
        <div class="user"></div>
        <form action="<?php echo  $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1>Log In </h1>
            <div class="input">
                <input type="text" name="username"required />
                <label>Username</label>
            </div>
            <div class="input box">
                <input type="password" name="password"required />
                <label>Password</label>
                 
            </div>
            <input class="L_btn" type="submit" value="Login" name="submit" />
        </form >
        <div class="div">
            <div class="line"></div>
            <div class="signup">Don't Have an account? <a href="#">Sign Up</a></div>
        </div>
    </div>
</body>

</html>

<?php
if(isset($_POST['submit'])){
$server ="localhost";
$username ="root";
$password = "";
$dbname ="hospital";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn){
    echo " Connected Successfully";
}

$name =$_POST['username'];
$password =$_POST['password'];

$sql ="INSERT INTO `logindetails` (`username`, `password`) VALUES ('gangadhar', 'ganga123');";
$insert = mysqli_query($conn,$sql);

if($insert){
    echo "Inserted Successfully";
    header('location:index.html');
}
}
?>