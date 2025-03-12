<?php
include 'connection.php';

$all_data = "SELECT * FROM data";
$run_get_data = mysqli_query($con, $all_data);

if (mysqli_num_rows($run_get_data) > 0) {
    echo '<div class="test"><table>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Password</th>
        </tr>';
    while ($row = mysqli_fetch_assoc($run_get_data)) {
        echo '<tr><td>' . $row['First_Name'] . '</td><td>'
            . $row['Last_Name'] . '</td><td>'
            . $row['Email'] . '</td><td>'
            . $row['Gender'] . '</td><td>'
            . $row['DOB'] . '</td><td>'
            . $row['Passwords'] . '</td></tr>';
    }
    echo '</table></div>';
} else {
    echo 'no data found in the table';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid green;
            border-collapse: collapse;
        }
    </style>

<body>
    <br>
    <form action="delete.php" method="post">
        <input type="text" name="del" placeholder="Enter a username">
        <input type="submit" value="DELETE">
    </form>

    <form action="update.php" method="post">
        <input type="text" name="up" placeholder="Enter a email for selecting">
        <input type="text" name="upv" placeholder="Enter Update Name">

        <input type="submit" value="UPDATE">
    </form>
</body>

</html>