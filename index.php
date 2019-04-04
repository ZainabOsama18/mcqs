<?php
require_once("reistration_mode.php");
/*if(isset ($_POST["loginuser"])){
    $mobile_no  $_POST["mobile_no"];
    $exam_no  $_POST["exam_no"];
    $registerationObject  new Registeration();
    $registerationObject->signin_user($mobile_no,$exam_no);
}*/
?>

<?php include_once("headers/header_public.php"); ?>

<div class="contents">
  <form action="index.php" method="post">
    <table>
       <caption><h1>enter following information :</h1></caption>
       <tr>
       <td><label for="student_name">student_name: </label></td>
       <td><input type="text" name="student_name" size="50"/></td>
       </tr>
       <tr>
       <td><label for="exam_no">exam_no: </label></td>
       <td><input type="password" name="exam_no" size="50"/></td>
       </tr>
       
       <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="loginuser" value="      Login        "/></td>
       </tr>
    </table>
  </form>
</div>


</body>
</html>