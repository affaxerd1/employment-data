<?php 
$conn=mysqli_connect("localhost","root", "", "employment db");
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $phone=$_POST['phone_number'];
    $ward=$_POST['ward'];
    $skill=$_POST['skill'];
    $school_level=$_POST['class'];
    $honours=$_POST['honours'];

   
        $sql="SELECT id FROM register where id=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:index.php?sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck=mysqli_stmt_num_rows($stmt);
            if($resultcheck>0){
                header("Location:index.php?iderror");
            }
        
        else{
            $sql="INSERT INTO register(name, email, id, phone,ward, skill, school_level, honours) VALUES(?, ?, ? , ?, ? ,?, ?, ?)";
            $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:index.php?sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ssiissss", $name,$email,$id,$phone,$ward,$skill,$school_level,$honours);
            mysqli_stmt_execute($stmt);
            header("Location:blog.php?registrationsuccessful");
            exit();
        }
        }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

    }


?>