<?php

    include("../Connection/connection.php");
    $store_id = $_GET['id'];

    $sql = "DELETE FROM store WHERE id = $store_id";
    if ($conn->query($sql) === TRUE) {
        header("location: website_buildup.php");
    } else {
        echo "Error deleting record: ". $conn->error;
    }

?>