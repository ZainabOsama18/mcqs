<?php 
require_once("../dbconnection/dbconnection.php");
class User {
    public function add_user()
    {
        $user["mobile_number"] = $_POST["mobile_number"];
        $user["exam_no"] = $_POST["exam_no"];
        $user["student_name"] = $_POST["student_name"];
        $user["age"] = $_POST["age"];
        $user["role"] = "user";

        try{
            $conn= new connection();
            $dbconn = $conn->getConnection();
        
            $insertQuery = "INSERT INTO 'users' ";
            $insertQuery .= "('mobile_number' , 'exam_no' , 'student_name' , 'age' , 'role')";
            $insertQuery .= "VALUES";
            $insertQuery .= "(:mobile_number, :exam_no , :student_name , :age , :role); ";   
        
        $preparedQuery = $dbconn->preparre($insertQuery);
        $result = $preparedQuery->execute($user);
    
        if($result == 1)
        {
            echo "<script>alret('user has been added successfully.');</script>";
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

 public function update_user()
 {
    $mcq["mobile_number"] = $_POST["mobile_number"];
    $mcq["exam_no"] = $_POST["exam_no"];
    $mcq["student_name"] = $_POST["student_name"];
    $mcq["age"] = $_POST["age"];
    $mcq["role"] = $_POST["role"];

    try
    {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $updateQuery = "UPDATE 'users' SET ";
        $updateQuery .= " 'exam_no'=:exam_no , 'student_name'=:student_name , 'age'=:age ,
         'role'=:answer3 , 'mobile_number'=:mobile_number";
        $updateQuery .= "WHERE 'mobile_number' = :mobile_number ;";

        $preparedQuery = $dbconn->preparre($updateQuery);
        $result = $preparedQuery->execute($mcq);

        if ($result == 1)
        {
            header("lockation: view_users.php");
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

 publlic function get_users()
 {
     try
     {
        $conn = new Connection();
        $dbconn = $conn->getConnection();

        $selectQuery = "SELECT * FROM 'users';";

        $users = null;
        foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC) as $user)
        {
            $users = $user;
        }
        return $users;
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

 public function get_user($mobile_no)
 {
     try
     {
         $conn = new Connection();
         $dbconn = $conn -> getConnection();

     $selectQuery = "SELECT * FROM 'users' WHERE 'mobile_no' = '{$mobile_no}' LIMIT 1;";

     $user = null;
     foreach( $dbconn->query($selectQuery, PDO::FETCH_ASSOC) as $userr)
     {
         $user = $userr;
     }
     return $user;
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

 public function delete_user()
 {
     $user["mobile_no"] = $_GET["mobile_no"];

     try
     {
         $conn = new Connection();
         $dbconn = $conn->getConnection();

         $deleteQuery = "DELETE FROM 'users' WHERE 'mobile_no'= :mobile_no;";

         $preparedQuery = $dbconn->prepare($deleteQuery);
         $result = $preparedQuery->execute($user);

         if($result == 1)
         {
            echo "<script>alret('user has been added successfully.');</script>"; 
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