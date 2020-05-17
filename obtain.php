<?php

include("db.php");

$query = "SELECT * FROM reunion";
 $result = mysqli_query($connect, $query);
 $json_data = array();
while($row = mysqli_fetch_array($result)){
$json[]= array(
    "evento" => $row["name_reunion"],
    "date" => $row["time_reunion"]
);

}
$strjson = json_encode($json);

echo $strjson;
