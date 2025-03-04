<?php

    include "config.php";
    include "model/TaskModel.php";
    include "controller/TaskController.php";

    $db=Config::getDBConnection();
    $model=new TaskModel($db);
    $controller=new TaskController($model);

    if (isset($_GET['action']) && $_GET['action']=='add')
    {
        $controller->addTask();
    }

    $tasks=$controller->viewTasks();
    include "view/taskListView.php";

?>