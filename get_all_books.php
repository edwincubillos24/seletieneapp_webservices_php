<?php

require_once('db_connect.php');

$sql = "SELECT * FROM libros";

$r = mysqli_query($con, $sql);

$result = array();

while ($row = mysqli_fetch_array($r)){
    array_push($result, array(
        "id" => $row['id'],
        "libro" => $row['libro'],
        "autor" => $row['autor'],
        "descripcion" => $row['descripcion']    
    ));
}

echo json_encode(array('result' => $result));

mysqli_close($con);

