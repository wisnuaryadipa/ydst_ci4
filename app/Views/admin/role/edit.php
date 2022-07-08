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
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nip">ID Role</label>
                            <input autofocus="autofocus" onfocus="this.select()" type="number" id="id_user" class="form-control" name="id_user" placeholder="ID User">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama Role</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Nama User">
                            <small class="help-block"></small>
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