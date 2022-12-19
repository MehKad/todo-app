<?php


//Kadiri Mehdi G2
//Salah eddine abouelkemhe G1



function connect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=gi_db', 'root', '');
        return $db;
    } catch (PDOexeptions $e) {
        echo $e->getMessage();
    }
}

function getTodos(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=gi_db', 'root', '');
        $req = $db->prepare("select todo, id from todos order by id asc");
        $req->execute();
        $res = $req->fetchAll();
        return $res;
    } catch (PDOexeptions $e) {
        echo $e->getMessage();
    }
    return false;
}


function addTodo($data){
    try {
        $db = new PDO('mysql:host=localhost;dbname=gi_db', 'root', '');
        $req = $db->prepare("insert into todos (Todo, done) values (:t, :d)");
        $req->execute(['t' => $data, 'd' => 0]);
    } catch (PDOexeptions $e) {
        echo $e->getMessage();
    }
}

function emoveTodo($id){
    try {
        $db = new PDO('mysql:host=localhost;dbname=gi_db', 'root', '');
        $req = $db->prepare("delete from todos where id=:id");
        $req->execute(['id' => $id]);
    } catch (PDOexeptions $e) {
        echo $e->getMessage();
    }
}

























?>