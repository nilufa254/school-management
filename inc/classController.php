<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

$class = $_POST['name'];
$short = $_POST['short'];

// MySQL connection
if ($conn = dbConnect()) {
    if ( isset($_POST['operation_type']) && 'edit' == $_POST['operation_type'] ) {
        $classID = $_POST['class_id'];
        $query = "UPDATE class SET name='$class', short='$short' WHERE ID=$classID;";
    } else if ( isset($_POST['operation_type']) && 'delete' == $_POST['operation_type'] ) {
        $classID = $_POST['class_id'];
        $query = "DELETE FROM class WHERE ID=$classID;";
    } else {
        $query = "INSERT INTO `class` (ID,name,short) VALUES(NULL,'$class','$short')";
    }
    $result = mysqli_query($conn, $query);

    if ( $result ) {
        header('Location: ' . SITE_URL . 'admin/class/list.php');
        mysqli_close($conn);
        die();
    }
    header('Location: ' . SITE_URL . 'admin/class/add.php');
    mysqli_close($conn);
    die();


} 

die( 'MySQL Connection Error: ' . mysqli_connect_error() );