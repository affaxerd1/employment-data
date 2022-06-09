<?php 
$conn=mysqli_connect("localhost","root", "", "employment db");
if(isset($_POST['submit'])){
    $stmt=$conn->prepare("INSERT INTO register (name, email, id, phone,ward, skill, school_level, honours) VALUES (?, ?, ? , ?, ? ,?, ?, ?)");
    $stmt->bind_param("ssssssss", $name,$email,$id,$phone,$ward,$skill,$school_level,$honours);


$name=$_POST['name'];
$email=$_POST['email'];
$id=$_POST['id'];
$phone=$_POST['phone_number'];
$ward=$_POST['ward'];
$skill=$_POST['skill'];
$school_level=$_POST['class'];
$honours=$_POST['honours'];
$stmt->execute();

/*
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];
*/

#check if id already exixsts in the db
$id="SELECT id FROM register WHERE id=$id";

$result=mysqli_query($conn,$id);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
header("Location:index.php? iderror=id already exists");
exit();
}

#check if email already exists in the database
$email="SELECT email FROM register WHERE email='$email';";
$email_query=mysqli_query($conn, $email);
$email_query_run=mysqli_num_rows($email_query);
if($email_query_run>0)
{
    header("Location:index.php? emailerror=email already exists");
    exit();   
}



else{
    header("Location:blog.php?success");
}

/*

elseif( $password !== $password_confirm){
    header("Location:index.php?password_donotmatch");
    exit();
}
*/
}

?>
