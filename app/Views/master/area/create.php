<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
</section>

<!-- Main content -->
<section class="content" id="compact-form">
    <div class="row">
    <!-- left column -->
    <div class="col-xs-12 col-md-12 col-lg-10">
        <!-- general form elements -->
        <div class="box box-primary">
            <form action="<?= url_to('master/cabang/create') ?>" class="form-horizontal" method="post">
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
                                <label for="area_code" class="col-md-2 control-label">Kode <?= $parent_title ?></label>
                                <div class="col-sm-10">
                                    <input autofocus="autofocus" onfocus="this.select()" type="text" id="area_code" class="form-control" name="area_code" placeholder="Kode <?= $parent_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area_name" class="col-md-2 control-label">Nama <?= $parent_title ?></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="area_name" name="area_name" placeholder="Nama <?= $parent_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area_head" class="col-md-2 control-label">Kepala Area</label>

                                <div class="col-sm-10">

                                    <select name="area_head" id="area_head" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Kepala Area</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-2 control-label">Alamat Area</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Alamat Area">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Provinsi</label>
                                        <div class="col-sm-6">
                                            <select name="provinsi" id="provinsi" class="form-control select2" style="width: 100%!important">
                                                <option value="" disabled selected>Prov</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Kabupaten</label>
                                        <div class="col-sm-6">
                                            <select name="kabupaten" id="kabupaten" class="form-control select2" style="width: 100%!important">
                                                <option value="" disabled selected>Kab</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Kecamatan</label>
                                        <div class="col-sm-6">
                                            <select name="pendidikan" id="pendidikan" id="phone_no" class="form-control select2" style="width: 100%!important">
                                                <option value="" disabled selected>Kec</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email_address" class="col-md-2 control-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input autofocus="autofocus" onfocus="this.select()" type="text" id="email_address" class="form-control" name="email_address" placeholder="E-mail">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </row>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="phone_no" class="col-md-4 control-label">No. Telp</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="No. Telp">
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="fax_no" class="col-md-2 control-label">No. Fax.</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="fax_no" name="fax_no" placeholder="No. Fax.">
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                
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
            </form>
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