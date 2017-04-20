<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //Getting values
    $libro = $_POST['libro'];
    $autor = $_POST['autor'];
    $descripcion = $_POST['descripcion'];
    
    //Creating an sql query
    $sql = "UPDATE libros SET autor='$autor',descripcion='$descripcion' "
            . "WHERE libro='$libro';";
    
    //Importing our db connection script
    require_once ('db_connect.php');
    
    //Executing query to database
    if (mysqli_query($con, $sql)){
        echo 'Book Upate Successfully';
    } else {
        echo 'Could Not Update Book';
    }
    
    //Closing the database
    mysqli_close($con);
            
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

