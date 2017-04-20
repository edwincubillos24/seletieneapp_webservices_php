<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //Getting values
    $libro = $_POST['libro'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    
    //Creating an sql query
    $sql = "INSERT INTO libros (libro, autor, descripcion) VALUES "
            . "('$libro','$autor','$descripcion')";
    
    //Importing our db connection script
    require_once ('db_connect.php');
    
    //Executing query to database
    if (mysqli_query($con, $sql)){
        echo 'Book Added Successfully';
    } else {
        echo 'Could Not Add Book';
    }
    
    //Closing the database
    mysqli_close($con);
            
}

