<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Master</a></li>
    <li><a href="#">User</a></li>
    <li class="active"><?= $title ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $title ?></h3>
            <div class="type-sp pull-right">
                <div class="type-sp pull-right">
                    <div class="btn bg-olive btn-flat">Tambah Jabatan</div>
                </div>
            </div>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <table class="table-bordered table">
                    <tr>
                        <th>ID Role</th>
                        <th>Nama Jabatan</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>R0001</td>
                        <td>Sales</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>K0002</td>
                        <td>Manager Sales</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->