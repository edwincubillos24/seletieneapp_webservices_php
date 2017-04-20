<?php

$libro = $_GET['libro'];

require_once('db_connect.php');

$sql = "DELETE FROM libros WHERE libro='$libro';";

if (mysqli_query($con, $sql)){
    echo 'Book deleted successfully';
}else{
    echo 'Could Not Delete Book Try Again';
}
mysqli_close($con);
    



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

