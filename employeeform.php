<!doctype html>
<html lang="en">
    <head>
        <title>Superpuff Employee Data</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
        <div class="logo">Superpuff Employee Data</div>
        <nav>
        <li><a href="employeeform.php">Employee form</a></li>
                <li><a href="viewemployee.php">View Employee</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Labour information</h1>
        <form action="C:\xampp\htdocs\employeeform.php" method="post">
            <label for="fname">first name</label>
            <input type="text" name="fname" id="fname"><br/>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname"><br/>
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br/>
            <label for="Agency">Agency</label>
            <input type="text" name="agency" id="agency"></br>
            <button type="submit">SUBMIT</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
             $id=$_POST['id'];
             $agency=$_POST['agency'];
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
                //submit the insertion queries/data to database
                $sql = "INSERT INTO `employees` (`fname`, `lname`, `ID`, `agency`,) VALUES ('$fname', '$lname', '$id', '$agency')";
                $result=mysqli_query($conn,$sql);

                if($result)
                {
                    echo "Data inserted successfully";

                }
                else{
                    echo "Data not inserted due to  ".mysqli_error($conn);
                }
            }

        }



        ?>
        </main>
        <footer>
        &copy; 2023 Your Company
    </footer>
    </body>
</html>



    