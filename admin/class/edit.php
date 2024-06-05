<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

if (!isLoggedIn()) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
}
 $classID = ! empty( $_GET['classID'] ) ? $_GET['classID'] : 0;

if ( ! $classID ) { 
    header('Location: ' . SITE_URL . 'admin/class/list.php');
    die();
}
// MySQL connection
if ($conn = dbConnect()) {
    $query = "SELECT * FROM class WHERE ID=$classID";

    $result = mysqli_query($conn, $query);

    $class = [];
    if ( $result ) {
        $class = mysqli_fetch_assoc($result);
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
                    <h1>Edit Class</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Class</li>
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
                            <h3 class="card-title">Edit Class</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo SITE_URL . 'inc/classController.php' ;?>" method="post" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="class" class="col-sm-2 col-form-label">Class Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="class" value="<?php echo $class['name'];?>" placeholder="Enter class Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="short" class="col-sm-2 col-form-label">Class Short Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="short" class="form-control" id="short" value="<?php echo $class['short'];?>" placeholder="Enter Class Short Name">
                                    </div>
                                </div>
                                <input type="hidden" name="class_id"  value="<?php echo $class['ID'];?>" />
                                <input type="hidden" name="operation_type"  value="edit" />
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="<?php echo SITE_URL . 'admin/class/list.php'; ?>" class="btn btn-default">Back to List</a>
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
