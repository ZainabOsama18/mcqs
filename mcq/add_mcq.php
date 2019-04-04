<?php
require_once("mcq_model.php");
if(isset($_POST["addmcq"])){
    $mcqObject = new MCQ();
    $mcqObject->add_mcq();
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class="contents">
<h1>MCQ's Adding</h1>
<form action="#" method="POST">
     <lable for="statement">Statement:</lable>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <textarea name="statement" cols="100" rows="5"

      <?php
      echo isset($_POST["statement"]) ? $_POST["statement"] : "";
       ?> 
      </textarea>
      <br>
      <br>
     <lable for="answer1">Answer 1:</lable>
     <input type="text" name="answer 1" size="50"/>
     isCorrect? 
     <input type="radio" name="correctanswer" value="1"/>
      <br>
      <br>
      <lable for="answer2">Answer 2:</lable>
     <input type="text" name="answer 2" size="50"/>
     isCorrect? 
     <input type="radio" name="correctanswer" value="2"/>
      <br>
      <br>
      <lable for="answer3">Answer 3:</lable>
     <input type="text" name="answer 3" size="50"/>
     isCorrect? 
     <input type="radio" name="correctanswer" value="3"/>
      <br>
      <br>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" name="addmcq" value="     Add MCQs      "/>
    </form>
</div>

</body>
</html>