<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/edu-academy/inc/config.php';

if (!isLoggedIn()) {
    header('Location: ' . SITE_URL . 'login.php');
    die();
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
                    <h1>Add Section</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>admin/dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Add Section</li>
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
                            <h3 class="card-title">Add Section</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo SITE_URL . 'inc/sectionController.php'; ?>" method="post" class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="section" class="col-sm-2 col-form-label">Section Name <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="section" placeholder="Enter section Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="short" class="col-sm-2 col-form-label">Section Short Name <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="short" class="form-control" id="short" placeholder="Enter Section Short Name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="class">Class <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <select name="class_id" id="class" class="form-control" required>
                                            <option>Seclect class</option>

                                            <?php


                                            // MySQL connection
                                            if ($conn = dbConnect()) {
                                                $query = "SELECT * FROM class";


                                                $result = mysqli_query($conn, $query);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($class = mysqli_fetch_assoc($result)) {
                                            ?>
                                                        <option value="<?php echo $class['ID']; ?>"><?php echo $class['name']; ?></option>

                                            <?php
                                                    }
                                                }

                                                mysqli_close($conn);
                                            } else {
                                                die('MySQL Connection Error: ' . mysqli_connect_error());
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
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
