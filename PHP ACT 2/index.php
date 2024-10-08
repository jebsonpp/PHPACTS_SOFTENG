<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Number 3</h1>
    <?php
    //query: selecting all customer names that starts with C
    $stmt = $pdo->prepare("SELECT customer.first_name FROM customer WHERE customer.first_name LIKE 'C%' LIMIT 5"); 
    
    if ($stmt->execute()) {
        $result = $stmt->fetchAll(); 
        
    
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    } else {
        echo "Query execution failed.";
    }
    ?>
</body>
</html>

<body>
    <h1>Number 4</h1>
    <?php
    //query: selecting a Porsche that was manufactured in the year 2000
    $stmt = $pdo->prepare("SELECT car.model, car.manufacture_year FROM car WHERE car.manufacture_year = 2000"); 
    
    if ($stmt->execute()) {
        $result = $stmt->fetch(); 
        
    
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    } else {
        echo "Query execution failed.";
    }
    ?>
</body>
</html>

<body>
    <h1>Number 5</h1>
    <?php
    //  inserting a new record from car table
    $query = "INSERT INTO car (car_id,model,manufacture_year,licencse_plate,rental_rate) VALUES(?,?,?,?,?)";

    $stmt = $pdo->prepare($query); 
    
    if ($stmt->execute([51,"toyota",2008,'3VS1K7AJ2BL6158',
        1000])) {
        echo "Insertion successful";
        
    } else {
        echo "Query execution failed.";
    }
    ?>
</body>
</html>

<body>
    <h1>Number 6</h1>
    <?php
    // deleting all cars that were manufactured from 1985
    $query = "DELETE FROM car WHERE car.manufacture_year = 1985";

    $stmt = $pdo->prepare($query); 
    
    if ($stmt->execute()) {
        echo "Deletion successful";
        
    } else {
        echo "Query execution failed.";
    }
    ?>
</body>
</html>

<body>
    <h1>Number 7</h1>
    <?php
    // updating a 1985 mmanufactured cars from 1986
    $query = "UPDATE car SET car.manufacture_year = ? WHERE car.manufacture_year = 1985";

    $stmt = $pdo->prepare($query); 
    
    if ($stmt->execute(["1986"])) {
        echo "Update Successful";
        
    } else {
        echo "Query execution failed.";
    }
    ?>
</body>
</html>

<body>
    <h1>Number 8</h1>
    <?php
    // Query: selecting all customer names that start with 'C' in tabular form
    $stmt = $pdo->prepare("SELECT customer.first_name FROM customer WHERE customer.first_name LIKE 'C%'"); 
    
    if ($stmt->execute()) {
        $results = $stmt->fetchAll(); 
        //rendering a table
        if (count($results) > 0) {
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>First Name</th></tr>"; 
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td>" . ($row['first_name']) . "</td>"; 
                echo "</tr>";
            }
            
            echo "</table>";
        }
    } else {
        echo "Query execution failed.";
    }
    ?>
</body>
</html>



