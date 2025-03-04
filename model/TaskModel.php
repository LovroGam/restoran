<?php
    
    class TaskModel
    {
        private $db;

        public function __construct($dbConnection)
        {
            $this->db=$dbConnection;
        }

        public function createTask($naslov, $opis)
        {
            $stmt=$this->db->prepare("INSERT INTO tasks(naslov, opis) VALUES (?,?)");
            $stmt->bind_param("ss", $naslov, $opis);
            $stmt->execute();


        }
        public function readTasks()
        {
            $result=$this->db->query("SELECT * FROM tasks");
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

?>