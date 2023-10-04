<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superpuff Employee Data</title>
    <!-- Add your CSS styles or link to an external stylesheet here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">Your Logo</div>
        <nav>
            <ul>
                <li><a href="employeeform.php"> Employee Form</a></li>
                <li><a href="viewemployee.php">View Employee</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Labour information</h1>
        <?php
//Database Connectivity
            $servername="localhost";
            $username="root";
            $password="Kiran@11";
            $database="employees";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            //die if connection failed
            if(!$conn)
            {
                die("Sorry, connection failed!!".mysqli_connect_error());
            }
            else
            {
                echo "Connection Sucessfull";
            }

            $sql="SELECT * FROM `employees`";
            $result=mysqli_query($conn, $sql);

            //Find the number of records in the table
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;

            //Display the records using if statement

            if($num>0)
            {
                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
                echo "<br/>";

                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
            }
            
            //display records using while statement

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<br/>";
                echo "Here is the records in the Table";
                echo "<br/>";

                echo "First Name: " . $row['fname'] . "  Last Name: " . $row['lname'] . " ID: " .$row['id'] . " Agency: " .$row['agency'] ;
                echo "<br/>";
            }

            


?>
</main>

<footer>
    &copy; 2023 Your Company
</footer>
</body>
</html>
