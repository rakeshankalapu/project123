<?php

include("db.php");
$sql = "select * from details where Place like '"%gun%"'";
if (mysqli_query($conn, $sql)) {
    echo "Record is present";
} else {
    echo "Error record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>