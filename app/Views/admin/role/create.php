

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
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nip" class="col-md-2">ID Role</label>
                            <div class="col-md-9">
                                <input autofocus="autofocus" onfocus="this.select()" type="number" id="id_role" class="form-control" name="id_role" placeholder="ID Role">
                            </div>
                                                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="nama_dosen" class="col-md-2">Nama Role</label>
                            <div class="col-md-9">

                                <input type="text" class="form-control" name="nama_role" placeholder="Nama Role">
                            </div>
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
    });

</script>