<?php

if(isset($_POST['submit_data'])){
    require_once('config/dbconnect.php');

    $title = mysqli_real_escape_string ($con, $_POST['Article_title']);
    $content = mysqli_real_escape_string ($con, $_POST['Article_content']);


    if(!empty($title) || !empty($connect)){

        $sql = "INSERT INTO dashboard(Article_title,Article_content) VALUES('$title','$content');";
        $execute = mysqli_query($con,$sql);

        if(!$execute){
            echo "Failed to submit the data";
            exit();
        }else{
            echo "Article Published successfully";
            exit();
        }


    }else{
        header('Location: dashboard.php?emptyFields');
        exit();
    }

}else{
    header('Location: dashboard.php?invalidRequest');
    exit();

}

?>