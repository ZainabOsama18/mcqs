<?php
require_once("reistration_mode.php");
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
       <td><label for="mobile number">mobile number: </label></td>
       <td><input type="int" name="mobile number" size="50"/></td>
       </tr>
       <tr>
       <td><label for="age">age: </label></td>
       <td><input type="int" name="age" size="50"/></td>
       </tr>
       <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="regiteruser" value="      Register user        "/></td>
       </tr>
    </table>
  </form>
</div>


</body>
</html>