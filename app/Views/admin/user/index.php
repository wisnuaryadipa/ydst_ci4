<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Master</a></li>
    <li><a href="#">User</a></li>
    <li class="active">Daftar User</li>
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
            </div>
        </div><!-- /.box-header -->

        <div class="box box-solid">
            <div class="box-filter">
            <div class="box-body">
                <div class="box-input-buku">
                <div class="box-input-buku-child">
                    <strong>Cabang</strong>
                    <select class="form-control">
                    <option>Yogyakarta</option>
                    </select>
                </div>
                <div class="box-input-buku-child">
                    <strong>Bagian</strong>
                    <select class="form-control">
                    <option>Semua</option>
                    </select>
                </div>
                <div class="box-input-buku-child submit pull-right" style="margin-top: 10px">
                    <button class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div><!-- /.box-body -->
            </div>
        </div><!-- /.box -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <table class="table-bordered table">
                    <tr>
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>J.Kelamin</th>
                        <th>Bagian</th>
                        <th>Cabang</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>K0001</td>
                        <td>MAWAR</td>
                        <td>Perempuan</td>
                        <td>Sales</td>
                        <td>YOGYA</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>K0002</td>
                        <td>DIO</td>
                        <td>Laki-laki</td>
                        <td>Sales</td>
                        <td>YOGYA</td>
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