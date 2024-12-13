<?php
// Get the database connection file
require_once 'db.php';  

function PrintTable($tableName, $connect, $colnames = null) {
    try {
        if ($colnames) {
            $sql = "SELECT " . implode(", ", $colnames) . " FROM $tableName";
        } else {
            $sql = "SELECT * FROM $tableName"; 
        }

        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";

            if ($colnames) {
                echo "<tr>";
                foreach ($colnames as $col) {
                    echo "<td>" . ucfirst($col) . "</td>"; 
                }
                echo "</tr>";
            } else {
                $col = mysqli_fetch_fields($result);
                echo "<tr>";
                foreach ($col as $value) {
                    echo "<td>" . $value->name . "</td>";
                }
                echo "</tr>";
            }

            // Print rows of data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No results"; // Table is empty
        }
    } catch (Exception $e) {
        die("An error occurred: " . $e->getMessage());
    }
}

PrintTable("flower", $connect);
PrintTable("users", $connect, ["username", "email"]);
PrintTable("books", $connect);
?>
