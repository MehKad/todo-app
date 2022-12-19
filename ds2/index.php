<?php

    //Kadiri Mehdi G2
    //Salah eddine abouelkemhe G1


    //using functions (no class)

    require("app/controller.php");
    $data = getTodos();
    if(isset($_POST["submit"])){
        if(isset($_POST["newtodo"])){
            addTodo($_POST["newtodo"]);
            header("location:index.php");
        }
    }
    if(isset($_GET["remove"])){
        emoveTodo($_GET["remove"]);
        header("location:index.php");
    }


    //using classes

    //require("app/Todo.php");
    //$data = new Todo();
    //if(isset($_POST["submit"])){
    //    if(isset($_POST["newtodo"])){
    //        $data->addTodo($_POST["newtodo"])
    //    }
    //}
    //if(isset($_GET["remove"])){
    //    $data->emoveTodo($_GET["newtodo"]);
    //}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css?v=<?php echo time()?>">
    <title>To do</title>
</head>
<body>
    <div class="container"> 
        <div class="data">
            <form method="POST" action="index.php">
                <input type="text" class="todoname" name="newtodo">
                <input type="submit" value="ADD" name="submit" class="todobtn">
            </form>
        </div>   
        <div class="todolist">
            <?php

                foreach ($data as $i) {
                    echo "<div class=\"todos\">
                        <h4 class=\"name\">$i[todo]</h4>
                        <button class=\"delete\"><a href=\"http://localhost/DS/ds2/index.php?remove=$i[id]\">Done</a></button>
                    </div>";
                }

            ?>
        </div>
    </div>
    </div>
</body>
</html>