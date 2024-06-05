<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

if ( ! isLoggedIn() ) {
	header( 'Location: ' . SITE_URL . 'login.php' );
	die();
}
$studentID = ! empty( $_GET['studentID'] ) ? $_GET['studentID'] : 0;

if ( ! $studentID ) {
	header( 'Location: ' . SITE_URL . 'admin/student/list.php' );
	die();
}
// MySQL connection
if ( $conn = dbConnect() ) {
	$query = "SELECT student.*, class.ID as class_id FROM student JOIN section ON section.ID=student.section_id JOIN class ON class.ID=section.class_id WHERE student.ID=$studentID";

	$result = mysqli_query( $conn, $query );

	$student = [];
	if ( $result ) {
		$student = mysqli_fetch_assoc( $result );
	}
}

require_once SITE_URI . 'admin/common/header.php';
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Student</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Student</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Student</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?php echo SITE_URL . 'inc/studentController.php'; ?>" method="post"
                                  enctype="multipart/form-data" class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label"> Image <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" id="image" placeholder="Enter Image"
                                                   value="<?php echo $student['image']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="student" class="col-sm-2 col-form-label">Student Name <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="student"
                                                   placeholder="Enter Name" value="<?php echo $student['name']; ?>"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label"> Address <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control" id="address"
                                                   placeholder="Enter Address"
                                                   value="<?php echo $student['address']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone_num" class="col-sm-2 col-form-label"> Phone-num <span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone_num" class="form-control" id="phone_num"
                                                   placeholder="Enter Phone_num"
                                                   value=" <?php echo $student['phone_num']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="section">Section<span
                                                    class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <select name="section_id" id="section" class="form-control" required>
                                                <option>Select Section</option>

												<?php


												// MySQL connection
												if ( $conn = dbConnect() ) {
													$query = "SELECT section.*,class.name as class_name FROM section JOIN class ON class.ID=section.class_id";

													$result = mysqli_query( $conn, $query );

													if ( mysqli_num_rows( $result ) > 0 ) {
														while ( $section = mysqli_fetch_assoc( $result ) ) {
															?>
                                                            <option value="<?php echo $section['ID']; ?>" <?php echo $section['ID'] == $student['section_id'] ? ' selected' : ''; ?>><?php echo $section['name'] . "(" . ucfirst( $section['class_name'] ) . ")"; ?></option>
															<?php
														}
													}

													mysqli_close( $conn );
												} else {
													die( 'MySQL Connection Error: ' . mysqli_connect_error() );
												}
												?>
                                            </select>
                                        </div>
                                    </div>


                                    <input type="hidden" name="prev_img" value=" <?php echo $student['image']; ?>"/>
                                    <input type="hidden" name="student_id" value=" <?php echo $student['ID']; ?>"/>
                                    <input type="hidden" name="operation_type" value="edit"/>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <a href="<?php echo SITE_URL . 'admin/student/list.php'; ?>"
                                       class="btn btn-default">Back to List</a>
                                    <button type="submit" class="btn btn-info float-right">Submit</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php
require_once SITE_URI . 'admin/common/footer.php';
