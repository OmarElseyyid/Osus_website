<?= $this->extend('templates/admin_template') ?>

<?= $this->Section('content') ?>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
         <!-- Content Wrapper. Contains page content -->
        <div class="content">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add New Course</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-gray">
                                <div class="card-header with-border">
                                    <h3 class="card-title">Course Information</h3>
                                </div>
                                  <!-- /.box-header -->
                                  <!-- form start -->
                                <form method="post" asp-area="admin" asp-controller="product" asp-action="add" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="name">Course Name</label>
                                            <input type="text" class="form-control"  required="required">
                                        </div>

                                        <div class="form-group">
                                            <label for="desc">Course Description</label>
                                            <textarea rows="3" class="form-control" ></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Course Price</label>
                                            <input type="number" class="form-control"  required="required" min="0">
                                        </div>

                                        <div class="form-group">
                                            <label for="teacher">Teacher Name</label>
                                            <input type="text" class="form-control"  required="required">
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Is Avalibale
                                            </label>
                                        </div>
                                    </div>
                                      <!-- /.box-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning">Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
</body>
<?= $this->endSection() ?>