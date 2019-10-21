<?php 
session_start();


$con = mysqli_connect('localhost','root','Himavarsha','login_swe') or die('Unable To connect');

if(isset($_POST['signin'])){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $query = mysqli_query($con,"SELECT * FROM users  WHERE username= '$u' AND password = '$p'");
    // if(!mysqli_query){
    //     die(mysqli_error());
    // }
    $user = mysqli_num_rows($query);
    if($user>0 ){
        $_SESSION['user'] = $_POST['username'];
        header('location:index.php'); 
    } else {
        header("Location:index.php?signup=err");
        // $msg= "Invalid Username or Password!";

    }
}

if(isset($_POST['reg'])){
    $name= mysqli_real_escape_string($con,$_POST['username']);
    $mail = mysqli_real_escape_string($con,$_POST['mail']);
    $p = mysqli_real_escape_string($con,$_POST['pwd']);
    $cp = mysqli_real_escape_string($con,$_POST['cpwd']);
    $ads = mysqli_real_escape_string($con,$_POST['ads']);

    if((!empty($p))&&(!empty($cp))&&(!empty($name))&&(!empty($mail))&&(!empty($ads))&&($p == $cp)){
        $f = 0;
        $q = "select username from users;";
        $result = mysqli_query($con, $q);
        if($result){
            while ($n = mysqli_fetch_assoc($result)) {
            if($n == $name)
            $f = 1;
            }
        }
        if($f == 1)
            $unameErr = " * Username already exists";
        else{ 
            
          // $insert = "INSERT INTO users("
            $t = "insert into users(username,password,email,address) values(?,?,?,?);";
            $s = mysqli_prepare($con, $t);
            mysqli_stmt_bind_param($s, 'ssss', $name, $p, $mail, $ads);
            mysqli_stmt_execute($s);
            header('location:index.php');
        }
    }

    
}

?>

