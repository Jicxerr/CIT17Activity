<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Record</h1>
    <table style="width:40%">
        <form name="form" action="" method="get">
            <tr><td><label for="fname">First name:</label></td>
            <td><input type="text" name="subject" id="subject" value=""></td></tr>
            <tr><td><label for="fname">Last name:</label></td>
            <td><input type="text" name="subject" id="subject" value=""></td></tr>
            <tr><td><label for="fname">First name:</label></td>
            <td><input type="text" name="subject" id="subject" value=""></td></tr>
            <tr><td><label for="fname">Date of Birth</label></td>
            <td><input type="text" name="subject" id="subject" value=""></td></tr>
            <tr><td><label for="fname">Email:</label></td>
            <td><input type="text" name="subject" id="subject" value=""></td></tr>
            <tr><td><label for="fname">Phone:</label></td>
            <td><input type="text" name="subject" id="subject" value=""></td></tr>   
            <tr><td></td><td><input type="submit" value="Submit"></td></tr>
        </form>
    </table>

    <table style="width:100%">
    <tr>
        <th>Student ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    
    <?php // Check if the query was successful
    echo "<br><br>";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentrecord";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Status:  Connection failed: " . $conn->connect_error);
    }
    echo "Status: Connected successfully";

    echo "<br><hr>";
   // Example query
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["StudentID"] . "</td>"
            . "<td>" . $row["FirstName"]. "</td>"
            . "<td>" . $row["LastName"]. "</td>"
            . "<td>" . $row["DateOfBirth"]. "</td>"
            . "<td>" . $row["Email"]. "</td>"
            . "<td>" . $row["Phone"]. "</td></tr>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
    </table><hr>
    <h1>Course</h1>
    <?php 
    $coursesql = "SELECT * FROM student";
    $result = $conn->query($coursesql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["StudentID"] . "</td>"
            . "<td>" . $row["FirstName"]. "</td>"
            . "<td>" . $row["LastName"]. "</td>"
            . "<td>" . $row["DateOfBirth"]. "</td>"
            . "<td>" . $row["Email"]. "</td>"
            . "<td>" . $row["Phone"]. "</td></tr>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
    <h1>Enrollemnt</h1>
    <?php 
    
    ?>
    <h1>INSTRUCTOR</h1>
    <?php 
    
    ?>
</body>
</html>

