<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>detail</small>
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
    <div class="col-md-8 col-xl-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <div class="box-body">
                <div class="box-body">
                    <strong>ID USER</strong>
                    <p>K0001</p>

                    <hr>

                    <strong>Nama User</strong>
                    <p>MAWAR</p>

                    <hr>

                    <strong>Area</strong>
                    <p>----</p>

                    <hr>

                    <strong>Bagian</strong>
                    <p>----</p>

                    <hr>

                    <strong>Jabatan</strong>
                    <p>----</p>

                    <hr>

                    <strong>Pendidikan</strong>
                    <p>----</p>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Daftar Customer</h3>
                            <div class="type-sp pull-right">
                                <div class="btn bg-olive btn-flat">Tambah Customer</div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <form role="form">
                                <div class="box-body">
                                    <table class="table-bordered table">
                                        <tr>
                                            <th>ID Customer</th>
                                            <th>Nama Customer</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>K0001</td>
                                            <td>XXXX</td>
                                            <td>XXXX</td>
                                            <td>
                                            
                                            <button class="btn btn-info">Detail</button>
                                            <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>K0002</td>
                                            <td>XXXX</td>
                                            <td>XXXX</td>
                                            <td>
                                            
                                            <button class="btn btn-info">Detail</button>
                                            <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>
                
                
            </div>

            <div class="box-footer">
                <div class="form-group pull-right">
                    <button type="submit" id="submit" class="btn btn-flat bg-purple">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->