<?php

    include "../model/TaskModel.php";

    class TaskController
    {
        private $model;

        public function __construct($model)
        {
            $this->model=$model;
        }

        public function addTask()
        {
            if ($_SERVER["REQUEST_METHOD"]==="POST")
            {
                $this->model->createTask($_POST['naslov'], $_POST['opis']);
                header("Location: ../index.php");
            }
        }

        public function viewTasks()
        {
            return $this->model->readTasks();
        }
    }

?>