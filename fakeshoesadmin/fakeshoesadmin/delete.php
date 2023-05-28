<?php
require 'dbconnect.php';
// delete 
if (isset($_GET['deleteid'])) {
    $deleteid = $_GET['deleteid'];

    // query delete
    $querydelete = mysqli_query($conn, "delete from produk where id='$deleteid'");
    if ($querydelete) {
        header('location: index.php');
    } else {
        header('location: eror.php');
    }
}
