<?php
//Get the database connection file
require_once 'db.php';
try{
    //Query
    $sql = "SELECT * FROM flower";
    //Execute the query (call variable,query)
    $result = mysqli_query($connect,$sql);
    //Check if data exist in the table
    if(mysqli_num_rows($result)>0){
        //Fetch the data from rows
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
        }
    }else{
        echo "No results"; //Table is empty
    }
    } catch (Exception $e){
        die($e->getMessage());
    }
?>