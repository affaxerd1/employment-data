<?php
session_start();
include "database.php";



if(isset($_POST['submit']))
{
    // prepare and bind
    $stmt=$conn->prepare("INSERT INTO blog (date_of_post,job_title,description, responsibilities,requirements, application_link) VALUES (?, ?, ? , ?, ? ,?)");
    $stmt->bind_param("ssssss", $date_of_post,$job_title, $description, $responsibilities, $requirements, $application_link);

   

        $job_title=$_POST['job_title'];
        $date_of_post=$_POST['date_of_post'];
        $description=$_POST['description'];
        $responsibilities=$_POST['responsibilities'];
        $requirements=$_POST['requirements'];
        $application_link=$_POST['application_link'];
        $stmt->execute();

        header("Location:post.php?success");
}


?>
