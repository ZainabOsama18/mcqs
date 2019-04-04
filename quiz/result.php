<?php include_once("../headers/header_user.php"); ?>
<?php 
require_once("../result/resul_model.php");
$answers = $_SESSION["answers"];
$marks_obtained = null;
foreach($answer as $answer) {
    if($answer == 1){
        $marks_obtained +=1;
    }
}
if(isset($_POST["saveResultBtn"])){
    $resultObj = new Result();
    $mobile_no = $_SESSION["mobile_no"];
    $resultObj->add_result($marks_obtained, $mobile_no);
}
?>

<div class="contents">
<h1>You have got <?php echo $marks_obtained*10 ;?>% marks...</h1>
   <from action="#" method="POST">
   <input type ="submit" name="saveResultBtn" value="       Save Result      "/>
   </form>

      <a href = "../result/view_result.php" > View All Results</a>

</div>
</body>
</html>
