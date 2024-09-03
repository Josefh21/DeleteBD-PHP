<?php

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM user WHERE id=$id";

    if ($conn->query($sql) === TRUE)

    $conn->close();

    header("Location: read.php");
    exit();
}

?>