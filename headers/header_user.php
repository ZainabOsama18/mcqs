<?php

session_start();

if(isset($_POST['submitlogout'])){
    unset($_SESSION['mobile_no']);
    header("Location: ../index.php");
    exit;
}

if(isset($_SESSION['mobile_no'])) {
    header("Location: ../index.php,php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User functions</title>
    <link rel = "stylesheet" href="../styles/styles.css" type="text/css">
    </head>
    <body>
       <header>
       <h1> Online Exam </h1>
       <form action="#" method="post">
       <input type ="submit" name="submitlogout" value="LogOut" style="float: "/>
   </form>


   </div>
</body>
</html>