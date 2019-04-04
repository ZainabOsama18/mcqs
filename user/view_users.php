<?php
require_once("user_model.php");
$userObject = new User();
if(isset($_GET["student_name"]))
{
    $userObject->delete_user();
}
$users = $userObject->get_users();
?>

<?php include_once("../headers/header_admin.php"); ?>
<div class="contents">
<table cellpadding='10px' align="center" wdith="80%" border="1">
   <caption><h1>Users</h1></caption>
      <tr style="background: aqua;">
          <th>Student Name</th>
          <th>Mobile no.</th>
          <th>Exam no.</th>
          <th>Age</th>
          <th>Role</th>
          <th colspan="2">Action</th>
      </tr>
<?php
if(isset($users))
{
    foreach($users as $user)
    {
        ?>
            <tr style="background: white;">
               <td><?php echo $user["student_name"]; ?></td>
               <td><?php echo $user["Mobile nn"]; ?></td>
               <td><?php echo $user["Exam_no"]; ?></td>
               <td><?php echo $user["Age"]; ?></td>
               <td><?php echo $user["Role"]; ?></td>
               <td><a href="edit_user.php?student_name=<?php echo $user["student_name"]; ?>">Edit</a></td>
               <td><a href="view_users.php?student_name=<?php echo $user["student_name"]; ?>">Delete</a></td>
            </tr>
        <?php
    }
}
?>
</table>
</div>

</body>
</html>