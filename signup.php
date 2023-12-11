<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something was posted
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];

   if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
   {
      //save to database
      $user_id= random_num(20);
      $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

      mysqli_query($con,$query);

      header("Location: login.php");
      die;
   }else
   {
    echo "Please enter some valid information!";
   }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
    body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: darkgreen; /* Setează culoarea de fundal la verde închis */
        }

        .content {
            text-align: center;
            font-size: 50px;
            color: darkred; /* Setează culoarea textului la roșu */
        }

        a {
            color: darkred;
            text-decoration: none; /* Elimină sublinierea implicită a linkurilor */
            font-weight: bold; /* Face textul linkurilor bold pentru a le evidenția */
        }

       
        a:hover {
            color: darkblue;
        }


    </style>
</head>
<body>
   
<style type="text/css">
    #text3{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
}

#button3{
    padding: 10px;
    width: 100px;
    color: white;
    background-color: black;
    border: none;
}

#box33{
    background-color: darkgreen;
    margin: auto;
    width: 300px;
    padding: 20px; 
}
    </style>

  <div id="box33" class="content">
    <form method="post">
        <div style="font-size: 50px;margin:10 px;">Signup</div>
        <input id="text3" type="text" name="user_name"><br><br>
        <input id="text3" type="password" name="password"><br><br>

        <input id="button3" type="submit" value="Signup"><br><br>

        <a href="login.php">Click to Login</a><br><br>
   
</form>
  </div>


</body>
</html>