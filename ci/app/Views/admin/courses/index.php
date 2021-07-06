<?= $this->extend('templates/admin_template') ?>

<?= $this->Section('content') ?>
<section class="content" style="padding-top: 5px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-gray">
                    <div class="card-header">
                        <h3 class="card-title">Courses List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="productListTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th>Course Id</th>
                                    <th>Course Name</th>
                                    <th>Course Description</th>
                                    <th>Course Fee</th>
                                    <th>Teacher Name</th>
                                    <th>Is Avalibale</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JAVA</td>
                                    <td>JAVA course is avalibale now</td>
                                    <td>200 TL</td>
                                    <td>Khaldon Yaldani</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr role="row">
                                    <th>Course Id</th>
                                    <th>Course Name</th>
                                    <th>Course Description</th>
                                    <th>Course Fee</th>
                                    <th>Teacher Name</th>
                                    <th>Is Avalibale</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
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
<script>
    $(function() {
        $('#productListTable').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<?= $this->endSection() ?>