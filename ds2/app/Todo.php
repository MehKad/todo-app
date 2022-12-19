<?php

    //Kadiri Mehdi G2
    //Salah eddine abouelkemhe G1

    
require("controller.php");

class Todo{
    private $conn;
    private $query;
    private $stmt;
    public function __construct(){
        $this->conn = connect();
    }
    public function getTodos(){
        $this->query = 'select todo, id from todos order by id asc';
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addTodo($Todo){
        $this->query = "insert into todos (Todo, done) values ($Todo, 0)";
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute();
        return $this->stmt;
    }
    public function emoveTodo($id){
        $this->query = "delete from todos where id=$id";
        $this->stmt = $this->conn->prepare($this->query);
        $this->stmt->execute();
        return $this->stmt;
    }
}

?>