<?php
//Get the database connection file
require_once 'db.php';
function PrintTable($tableName,$connect){
    try{
        //Query
        $sql = "SELECT * FROM $tableName";

        //execute the query(call variable,query)
        $result = mysqli_query($connect,$sql);

        if(mysqli_num_rows($result)>0){
            //fetch the data from rows
            echo "<table border=1>";

           $col = mysqli_fetch_fields($result);
            //print the column
            echo"<tr>";
            foreach($col as $value){
                //return an object
                //print_r($value)
                echo "<td>".$value->name."</td>";
            }
            echo "</tr>";
            while($row = mysqli_fetch_assoc($result)){
                //print the data in table format

                echo "<tr>";
                foreach ($row as $key => $value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "No results";//Table is empty
        }
    }catch(Exception $e){
        die($e->getMessage());
    }
}
printTable("flowerr",$connect);
printTable("books",$connect);    
printTable("users",$connect);

?>
