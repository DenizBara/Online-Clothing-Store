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
      //read from database
      
      $query = "select * from users where user_name= '$user_name' limit 1";

      $result = mysqli_query($con,$query);
         
      if($result){
        if($result && mysqli_num_rows($result)>0)
    {
        $user_data = mysqli_fetch_assoc($result);
        

        if($user_data['password'] === $password){


            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index2.php");
      die;
        }

    }
      }
      echo "Wrong username or password!";
   }else
   {
    echo "Please enter some valid information!";
   }
}





?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

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
        <div style="font-size: 50px;margin:10 px;">Login</div>
        <input id="text3" type="text" name="user_name"><br><br>
        <input id="text3" type="password" name="password"><br><br>

        <input id="button3" type="submit" value="Login"><br><br>

        <a href="signup.php">Click to Signup</a><br><br>
   
</form>
  </div>


</body>
</html>