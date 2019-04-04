<?php
require_once("user_model.php");
$userObject = new User();
if(isset($_POST["updateuser"]))
{
    $userObject->update_user();
}
$user = null;
if(isset($_GET['mobile_no']))
{
    $user = $userObject->get_user($_GET["mobile_no"]);
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class ="contents">
<?php
if(count($user)-> 0)
{
?>
    <form action="edit_users.php" method="post">
     <table>
         <caption><h1>Edit Users</h1></caption>
         <tr>
            <td><label for="mobile_number">mobile No:</lable></td>
            <td><input type="text" name="mobile_no" size="50" value="<?php echo $user["
            mobile_no"]; ?>" readonly /></td> 
         </tr>
         <tr>
            <td><label for="exam_no">exam_no:</lable></td>
            <td><input type="password" name="exam_no" size="50" value="<?php echo $user["
            exam_no"]; ?>" /></td> 
         </tr>
         <tr>
            <td><label for="student_name">student Name:</lable></td>
            <td><input type="text" name="student_name" size="50" value="<?php echo $user["
            student_name"]; ?>"  /></td> 
         </tr>
         <tr>
            <td><label for="age"> Age:</lable></td>
            <td><input type="text" name="age" size="50" value="<?php echo $user["
            age"]; ?>"  /></td> 
         </tr>
         <tr>
            <td><label for="role">Role:</lable></td>
            <td><input type="text" name="role" size="50" value="<?php echo $user["
            role"]; ?>"  /></td> 
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><input type="submit" name="updateuser" value="      Update User     " /></td>
         </tr>
     </tablr>
  <?php
}
?>
</form>
</div>

</body>
</html>