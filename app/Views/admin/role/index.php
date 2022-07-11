<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
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
                    <a href="<?= $_ENV['BASE_URL_FULL']."/master/roles/create" ?>"><div class="btn bg-olive btn-flat"> Tambah Jabatan</div></a> 
                </div>
            </div>
        </div><!-- /.box-header -->
        <!-- form start -->
        <div class="box box-solid">
            <div class="box-filter">
                <div class="box-body">
                    <div class="content" style="min-height: 130px;">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 col-sm-4">
                                    <div class="box-input-child">
                                        <strong>Nama Jabatan</strong>
                                        <input type="text" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="box-input-child submit pull-right" style="margin-top: 10px">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                        
                </div><!-- /.box-body -->
            </div>
        </div>
        <form role="form">
            <div class="box-body">
                <table class="table-bordered table">
                    <tr>
                        <th>ID Role</th>
                        <th><div> <span>Nama Jabatan</span><i class="pull-right fa fa-sort-amount-asc"></i></div></th>
                        <th class="col-action">Action</th>
                    </tr>
                    <tr>
                        <td>R0001</td>
                        <td>Sales</td>
                        <td class="col-action-val">
                        
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-info">Detail</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>K0002</td>
                        <td>Manager Sales</td>
                        <td class="col-action-val">
                        
                            <a href="<?=$_ENV['BASE_URL_FULL']."/master/roles/edit/2" ?>">
                                <div class="btn btn-warning"> Edit</div>
                            </a>
                            <a href="<?=$_ENV['BASE_URL_FULL']."/master/roles/detail/2" ?>">
                                <div class="btn btn-info"> Detail</div>
                            </a>
                            <a href="<?=$_ENV['BASE_URL_FULL']."/master/roles/delete/2" ?>">
                                <div class="btn btn-danger"> Delete</div>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->