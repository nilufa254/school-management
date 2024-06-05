<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

$image = $_FILES['image'];
$student = $_POST['name'];
$address = $_POST['address'];
$phone_num = $_POST['phone_num'];
$section_id = $_POST['section_id'];
$prevImage = $_POST['prev_img'];

//var_dump($prevImage); exit;

// MySQL connection
if ($conn = dbConnect()) {
	if ( ! empty( $image['name'] ) ) {
		move_uploaded_file( $image['tmp_name'], SITE_URI . 'uploads/' . $image['name'] );
		$image_link = SITE_URL . 'uploads/' . $image['name'];
	} else if ( $prevImage ) {
		$image_link = $prevImage;
	}

    if ( isset($_POST['operation_type']) && 'edit' == $_POST['operation_type'] ) {
        $studentID = $_POST['student_id'];
        $query = "UPDATE `student` SET image='$image_link', name='$student', address='$address', phone_num='$phone_num', section_id='$section_id' WHERE ID=$studentID;";
		//var_dump($query);exit;
    } else if ( isset($_POST['operation_type']) && 'delete' == $_POST['operation_type'] ) {
        $studentID = $_POST['student_id'];
        $query = "DELETE FROM student WHERE ID=$studentID;";
    } else {
        $query = "INSERT INTO `student` (ID, image, name, address, phone_num, section_id ) VALUES(NULL,'$image_link','$student','$address','$phone_num','$section_id')";
    }
    $result = mysqli_query($conn, $query);

    if ( $result ) {
        header('Location: ' . SITE_URL . 'admin/student/list.php');
        mysqli_close($conn);
        die();
    }
    header('Location: ' . SITE_URL . 'admin/student/add.php');
    mysqli_close($conn);
    die();


} 

die( 'MySQL Connection Error: ' . mysqli_connect_error() );