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
                            <label for="nip">Kode <?= $parent_title ?></label>
                            <input autofocus="autofocus" onfocus="this.select()" type="number" id="id_user" class="form-control" name="id_user" placeholder="ID <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama <?= $parent_title ?></label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Nama <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Penulis <?= $parent_title ?></label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Penulis <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group">
                            <label for="matkul">Harga <?= $parent_title ?></label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Harga <?= $parent_title ?>">
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

<script>

    $(document).ready(function() {
        $('.select2').select2();

        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });

    });


</script>