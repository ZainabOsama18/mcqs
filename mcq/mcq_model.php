<?php
require_once("../dbconnection/dbconnection.php");
class MCQ {
    public function add_mcq()
    {
        $mcq["statement"] = $_POST["statement"];
        $mcq["answer1"] = $_POST["answer1"];
        $mcq["answer2"] = $_POST["answer2"];
        $mcq["answer3"] = $_POST["answer3"];
        $mcq["correctanswer"] = $_POST["correctanswer"];

        try{
            $conn= new connection();
            $dbconn = $conn->getConnection();
        
            $insertQuery = "INSERT INTO 'mcq' ";
            $insertQuery .= "('statement' , 'answer1' , 'answer2' , 'answer3' , 'correctanswer')";
            $insertQuery .= "VALUES";
            $insertQuery .= "(:statement, :answer1 , :answer2 , :answer3 , :correctanswer); ";   
        
        $preparedQuery = $dbconn->preparre($insertQuery);
        $result = $preparedQuery->execute($mcq);
    
        if($result == 1)
        {
            echo "<script>alret('MCQ has been added successfully.');</script>";
        }
        $dbconn = null;
}
catch (PDOException $e)
{
    echo "<script>alret(".$e->getMessage().");</script>";
}
catch (Exception $e)
{
    echo "<script>alret(".$e->getMessage().");</script>";  
}
 }

 public function update_mcq()
 {
    $mcq["statement"] = $_POST["statement"];
    $mcq["answer1"] = $_POST["answer1"];
    $mcq["answer2"] = $_POST["answer2"];
    $mcq["answer3"] = $_POST["answer3"];
    $mcq["correctanswer"] = $_POST["correctanswer"];
    $mcq["mcqid"] = $_POST["mcqid"];
    
    
    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $updateQuery = "UPDATE 'mcqs' SET ";
        $updateQuery .= " 'statement'=:statement , 'answer1'=:answer1 , 'answer2'=:answer2 ,
         'answer3'=:answer3 , 'correctanswer'=:correctanswer";
        $updateQuery .= "WHERE 'mcqid' = :mcqid ;";

        $preparedQuery = $dbconn->preparre($updateQuery);
        $result = $preparedQuery->execute($mcq);

        if ($result == 1)
        {
            header("lockation: view_mcqs.php");
            exit;
        }

        $dbconn = null;
    }
    catch (PDOException $e)
    {
       echo "<script>alret(".$e->getMessage().");</script>";
    }
    catch (Exception $e)
    {
       echo "<script>alret(".$e->getMessage().");</script>";  
    }
 }

 publlic function get_mcq(mcqid)
 {
     try
     {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $selectQuery = "SELECT * FROM 'mcqs WHERE mcqid'= '{$mcqid}' LIMIT 1;";

        $mcq = null;
        foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC)as $mcqq)
        {
            $mcq= $mcqq;
        }
        return $mcq;
     }
     catch (PDOException $e)
     {
        echo "<script>alret(".$e->getMessage().");</script>";
     }
     catch (Exception $e)
     {
        echo "<script>alret(".$e->getMessage().");</script>";  
     }
 }
 public function delete_mcq()
 {
     $mcq["mcqid"] = $GET["mcqid"];

     try
     {
        $conn = new Connection();
        $dbconn = $conn->getConnection();
        
        $deleteQuery = "DELETE FROM 'mcqs' WHERE 'mcqid'=:mcqid ; ";

        $preparedQuery = $dbconn->preparre($deleteQuery);
        $result = $preparedQuery->execute($mcq);

        if($result==1)
        {
            echo "<script>alret('MCQ has been added successfully.');</script>";
        }

        $dbconn = null;
     }
     catch (PDOException $e)
     {
        echo "<script>alret(".$e->getMessage().");</script>";
     }
     catch (Exception $e)
     {
        echo "<script>alret(".$e->getMessage().");</script>";  
     }
 }
}
?>