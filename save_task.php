<?php

    include("db.php");

    if(isset($_POST['save-task'])){
        
        // echo 'saving';
        
        $title = $_POST['title'];
        $description = $_POST['description'];
       
        // echo $title;
        // echo $description;

        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query failed");
        }

        $_SESSION['message'] = 'Task saved succesfully';
        $_SESSION['message_type'] = 'success';

        // echo 'Saved';

        header("Location: index.php");
    }

?>