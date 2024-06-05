<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

$section = $_POST['name'];
$short = $_POST['short'];
$class_id = $_POST['class_id'];

// MySQL connection
if ($conn = dbConnect()) {
    if ( isset($_POST['operation_type']) && 'edit' == $_POST['operation_type'] ) {
        $sectionID = $_POST['section_id'];
        $query = "UPDATE section SET name='$section', short='$short', class_id='$class_id' WHERE ID=$sectionID;";
    } else if ( isset($_POST['operation_type']) && 'delete' == $_POST['operation_type'] ) {
        $sectionID = $_POST['section_id'];
        $query = "DELETE FROM section WHERE ID=$sectionID;";
    } else {
        $query = "INSERT INTO `section` (ID,name,short, class_id) VALUES(NULL,'$section','$short','$class_id')";
    }
    $result = mysqli_query($conn, $query);

    if ( $result ) {
        header('Location: ' . SITE_URL . 'admin/section/list.php');
        mysqli_close($conn);
        die();
    }
    header('Location: ' . SITE_URL . 'admin/section/add.php');
    mysqli_close($conn);
    die();


} 

die( 'MySQL Connection Error: ' . mysqli_connect_error() );