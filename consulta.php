<?php
include("db.php");
if(isset($_POST["name"])){
    $name = $_POST["name"];
    $date = $_POST["date"];
    $query = "INSERT INTO reunion(id_reunion, name_reunion, time_reunion) VALUES(NULL, '$name', '$date')";
    $result = mysqli_query($connect, $query);
    if($result){
        echo "se subieron los datos exitosamente";
        }else{
        echo "no se subieron los datos revise su código";
        
    }
}



?>
