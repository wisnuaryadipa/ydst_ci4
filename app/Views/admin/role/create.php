

<!-- Main content -->
<section class="content" id="compact-form">
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
            <form action="<?= url_to('master/roles/create') ?>" class="form-horizontal" method="post">
            <div class="box-body">
                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nip" class="col-md-2">ID Jabatan</label>
                            <div class="col-md-9">
                                <input autofocus="autofocus" onfocus="this.select()" type="text" id="role_id" class="form-control" name="role_id" placeholder="ID Role">
                            </div>
                                                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="nama_dosen" class="col-md-2">Nama Jabatan</label>
                            <div class="col-md-9">

                                <input type="text" class="form-control" name="role_name" placeholder="Nama Role">
                            </div>
                                                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="form-group">
                    <div class="col-lg-12">
                        <button type="submit" id="submit" class="btn btn-flat bg-purple pull-right">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
<script>

    $(document).ready(function() {
        $('.select2').select2();
    });

</script>