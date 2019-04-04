<?php

require_once("mcq_model.php");
$mcqObject = new MCQ();
if(isset($_POST["updatemcq"]))
{
    $mcqObject->update_mcq();
}
$mcq = null;
if(isset($_GET['mcqid']))
{
    $mcq = $mcqObject->get_mcq($_GET["mcqid"]);
}
?>

<?php include_once("../headers/header_admin.php"); ?>

<div class = "contents">
<?php 
if(count($mcq) > 0)
{
?>
     <h1>Edit MCQ </h1>
     <form action ="edit_mcq.php" method="post">
        <input type="text" name="mcqid" value="<?php echo $mcq["mcqid"]; ?>" />
        <label for="statement">Statement:</label>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="statement" cols="100" rows="5"><?php echo $mcq["statement"]; ?></textarea>
        <br/>
        <br/>
        <label for="answer1">Answer1: </label>
        <input type="text" name="answer1" size="50" value="<?php echo $mcq["answer1"]; ?>" />
        IsCorrect? <input type="radio" name="correctanswer" value="1" <?php echo $mcq["
        correctanswer"] == "1" ? "checked" : "" ; ?> />

        <br/>
        <br/>
        <label for="answer1">Answer2: </label>
        <input type="text" name="answer2" size="50" value="<?php echo $mcq["answer2"]; ?>" />
        IsCorrect? <input type="radio" name="correctanswer" value="2" <?php echo $mcq["
        correctanswer"] == "2" ? "checked" : "" ; ?> />

        <br/>
        <br/>
        <label for="answer3">Answer3: </label>
        <input type="text" name="answer1" size="50" value="<?php echo $mcq["answer3"]; ?>" />
        IsCorrect? <input type="radio" name="correctanswer" value="3" <?php echo $mcq["
        correctanswer"] == "3" ? "checked" : "" ; ?> />

        <br/>
        <br/>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="submit" name="updatemcq" value="      Update MCQ        " />
        <?php
    }
    ?>
    </form>
    </div>

    </body>
    </html>
