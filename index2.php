<?php
session_start();

include("connection.php");
include("functions.php");

$user_data= check_login($con);


?>

<!DOCTYPE html>
<html>
<head>
    <title>StitchStyle</title>
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
    <div class="content">
    <a href="logout.php">Logout</a>
      <h1 >Hello, <?php echo $user_data['user_name']; ?></h1>

      <br>
      <br>
      <a href="index.html">Go to website</a>
    </div>
</body>
</html>