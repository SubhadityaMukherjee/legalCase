<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>



<?php

if(isset($_POST['user']) && isset($_POST['pass']) || isset($_POST['user']) && isset($_POST['pass'])&& isset($_POST['mail'])){
$us = $_POST['user'];
$pas = $_POST['pass'];
$mail = $_POST['mail'];
// echo $us.$pas.$mail;

echo '<p>Criminal</p><br>';
$sql = 'select * from legal where type="criminal" ';

$servername = "localhost";
$username   = "root";
$password   = " "; #set

$conn = mysqli_connect("$servername", "$username", "$password", "legal") or die('Error connecting to MySQL server.');
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // echo $row['legal'];
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>" . "<td>" . $row["director"] . "</td>" . "<td>" . $row["stars"] . "</td>" . "<td>" . $row["year"] . "</td>" . "<td>" . $row["imdb"] . "</td>";
        echo "</tr>";


    }
} else {
    echo "Sorry, try another search";
}
}
?>
</body>
</html>
