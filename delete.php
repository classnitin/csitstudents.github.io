<?php

include 'connect.php';

$id= $_GET['id'];
$selectquery = "SELECT * FROM event where id=$id ";
$query = mysqli_query($conn,$selectquery);


$row =mysqli_fetch_assoc($query);

if ($row) {
    $deletequery = "DELETE FROM event where id=$id";

    $query =mysqli_query($conn,$deletequery);

    echo "data deleted ";
    header("location:event_record.php");
}
else
{
  echo "error";
}

?>