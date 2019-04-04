<?php
require_once("dbconnection/dbconnection.php");

class Registeration {
    public function register_user() 
    {
        $user["student_name"] = $_POST["student_name"];
        $user["exam_no"] = $_POST["exam_no"];
        $user["mobile_number"] = $_POST["mobile_number"];
        $user["age"] = $_POST["age"];
        $user["role"] = "user";
        try
        {
            $CONNECT=mysqli_connection("localhost","root","write dbname","12345");
            $conn = new Connection();
            $dbconn = $conn->getconnection();
            
            $QUERY="INSERT INTO `registerr`(`student_name`, `exam_no`, `mobile_number`, `age` , 'role')
            VALUES ( '".$user["student_name"]."', ".$user["exam_no"].",".$user["mobile_number"]." ,". $user["age"].",".$user["role"]." )";

if($conn){
 echo "connection ok";
}
            $insertQuery = "INSERT INTO 'registerr' ";
            $insertQuery .- "('student_name','exam_no','mobile_number','age','role')";
            $insertQuery .- "VALUES";
            $insertQuery .- "(:student_name,:exam_no,:mobile_number,:age,:role);";

            $preparedQuery = $dbconn->prepare($insertQuery);
            $result = $preparedQuery->execute($user);

            if ($result == 1)
            {
               echo "<script>alret('user has been registered successfully.');</script>";
            }
            $dbconn =null;
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
    public function signin_user($student_name, $exam_no)
    {
        try
        {
            $conn = new Connection();
            $dbconn =$conn->getConnection();

        $selectQuery= "SELECT 'student_name', .'role' FROM 'user' WHERE 'student_name' = '{$studen_name}'
        AND 'exam_no' ='{$exam_no}' LIMIT 1;";

        $user=null;
        foreach($dbconn->query($selectquery,PDO::FETCH_ASSOC) as $userr)
        {
            $user[0] =$userr;
        }

        if ($user[0]["role"] == "admin"){
            session_start();
            $SESSION['student_name'] - $user[0]["student_name"];
            $SESSION['role']- "admin";
            header("location: mcq/add_mcq.php");
            exit;
        }
        elseif($user[0]["role"] == "user"){
            session_start();
            $SESSION['student_name'] - $user[0]["student_name"];
            $SESSION['mobile_no'] - $user[0]["mobile_no"]; 
            $SESSION['role']- "user";
            header("location: result/view_results.php");
            exit;   
        }
        else{
            echo "<script>alret(student_name or exam_no is wrong')</script>";
        }}
        catch(PDOException $e)
        {
            echo "<script>alret(".$e->getMessage().");</script>";   
        }
        catch(Exception $e)
        {
            echo "<script>alret(".$e->getMessage().");</script>";      
        }
    }
}

?>