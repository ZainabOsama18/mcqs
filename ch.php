
<?php


<head>
    <title>
        web ch
    </title>
</head>9
<body>
    <h3>select programming lang</h3>
    <form method="post">
        <p><input  name="lang[]" value="c" /> c </p>
        <p><input type="radio" name="lang[]" value="java" /> java </p>
        <p><input type="radio" name="lang[]" value="python" /> python</p>
        <p><input type="radio" name="lang[]" value="c++" /> c++ </p>
        <p><input type="radio" name="lang[]" value="php" /> php </p>







        <h3>select programming lang</h3>
            <p><input type="radio" name="lang1[]" value="c" /> c </p>
            <p><input type="radio" name="lang1[]" value="java" /> java </p>
            <p><input type="radio" name="lang1[]" value="python" /> python</p>
            <p><input type="radio" name="lang1[]" value="c++" /> c++ </p>
            <p><input type="radio" name="lang1[]" value="php" /> php </p>
            <h3>select programming lang</h3>
                <p><input type="radio" name="lang11[]" value="c" /> c </p>
                <p><input type="radio" name="lang11[]" value="java" /> java </p>
                <p><input type="radio" name="lang11[]" value="python" /> python</p>
                <p><input type="radio" name="lang11[]" value="c++" /> c++ </p>
                <p><input type="radio" name="lang11[]" value="php" /> php </p>
                <p><input type="submit" name="submit" value="submit" /> c </p>















    </form>
</body>
</html>

<?php
$x=0;
if(isset($_POST["submit"]))
{
if(!empty($_POST["lang"]))
{
    echo '<h3>you have select following language</h3>';
    foreach($_POST["lang"] as $lang)

{
if($lang=='c'){$x++;
    }
  }

    foreach($_POST["lang1"] as $lang)
{


if($lang=='c++'){$x++;
    }

    }
    foreach($_POST["lang11"] as $lang)
{
if($lang=='c'){$x++;
    }

    }


    echo'<p>'.'totle degree is :'.$x.'</p>';











}
}
?>



<?php

$host='localhost';
$username='root';
$pass='12345';
$db='students';


$connection=mysqli_connect($host,$username,$pass,$db);
if($connection){
  echo 'ok';
  $nameofstudent=$post_[name];
  $passwo=$post_[pass];
  $query="insert into student (username,password) values ($nameofstudent,$passwo)";
  //search query myphpadmin 
  $myquery=mysqli_query($connection,$query);
  if($myquery){


    echo 'insert';
  }
  else{


    echo 'not insert';
  }
}
else{
  echo 'no';
}

?>
