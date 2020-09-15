<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
}

$sql = "
        DELETE
        FROM pagamenti
        WHERE id = 8
    ";

    //"SELECT *
    //FROM ospiti"

    $result = $conn->query($sql);
    var_dump($result); die();

    if ($result && $result->num_rows > 0) {
//         
//         // $row = $result->fetch_assoc();
//         // while($row) {
//         //
//         //     echo "ospite: " . $row['name'] . " " . $row['lastname'] . '<br>';
//         //     $row = $result->fetch_assoc();
//         // }
//
    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }
    $conn->close();
