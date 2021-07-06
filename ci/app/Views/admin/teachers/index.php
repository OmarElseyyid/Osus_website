<?= $this->extend('templates/admin_template') ?>

<?= $this->Section('content') ?>
<section class="content" style="padding-top: 5px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-gray">
                    <div class="card-header">
                        <h3 class="card-title">Teachers List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="productListTable" class="table table-bordered table-hover">
                            <thead>
                                <tr role="row">
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Teacher Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Date Of Registeration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Elseyyid</td>
                                    <td>Omer Elseyyid</td>
                                    <td>omer@gamil.com</td>
                                    <td>+95306606048</td>
                                    <td> 05.07.2021 : 01.20 am </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr role="row">
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Teacher Full Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Date Of Registeration</th>
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