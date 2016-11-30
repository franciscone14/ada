<?php
    $action = $_POST['action'];
    $class = $_POST['class'];
    $data = $_POST['object'];

    if($action == 'insert'){
        include_once "insertController.php";
        $insert = new insertController();
        
        $insert->setDados($data);
        $message = $insert->$class();
        echo $message;
    }

    else if($action == 'delete'){
        include_once "deleteController.php";
        $delete = new deleteController();
        
        $delete->setDados($data);
        $message = $delete->$class();
        echo $message;
    }
?>