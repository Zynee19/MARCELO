<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $conn = mysqli_connect("localhost", "root", "", "testdb");
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id"); 
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["username"];
    }
}
?>
