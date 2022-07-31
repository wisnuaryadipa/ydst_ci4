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
                            <div class="row">
                                <div class="col-lg-4 col-xs-6">

                                    <div class="form-group">
                                        <label class="col-lg-6 col-xs-4 control-label" for="nip">Kode <?= $parent_title ?></label>
                                        <div class="col-lg-6 col-xs-8">
                                            <input autofocus="autofocus" onfocus="this.select()" type="text" id="branch_code" class="form-control" name="branch_code" placeholder="ID <?= $parent_title ?>">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xs-6">
                                    <div class="form-group">
                                        <label  class="col-lg-3 col-xs-3 control-label" for="nip">Kode ANS</label>
                                        <div class="col-lg-6 col-xs-8">
                                            <input autofocus="autofocus" onfocus="this.select()" type="text" id="ans_code" class="form-control" name="ans_code" placeholder="Kode ANS">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label  class="col-lg-2 col-xs-2 control-label" for="matkul">Kode Area</label>
                                        <div class="col-lg-8 col-xs-8">
                                            <select name="area_code" id="area_code" class="form-control select2" style="width: 100%!important">
                                                <?php foreach($area_list as $area) : ?>
                                                    <option value="<?= $area->area_code ?>"><?= $area->area_name ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 col-xs-2 control-label" for="nama_dosen">Nama <?= $parent_title ?></label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="branch_name" placeholder="Nama <?= $parent_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-lg-2 col-xs-2 control-label" for="matkul">Kepala Cabang</label>
                                <div class="col-xs-8">
                                    <select name="branch_head" id="branch_head" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>-----</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 col-xs-2 control-label" for="email">Alamat <?= $parent_title ?></label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="address" placeholder="Alamat <?= $parent_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    
                                    <div class="form-group">
                                        <label for="matkul" class="col-xs-2 control-label">Provinsi</label>
                                        <div class="col-sm-6">
                                            <select name="province" id="province" class="form-control select2" style="width: 100%!important">
                                                <option value="" disabled selected>Prov</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-xs-2 control-label">Kabupaten</label>
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
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-xs-2 control-label">Kecamatan</label>
                                        <div class="col-sm-6">
                                            <select name="kecamatan" id="kecamatan" class="form-control select2" style="width: 100%!important">
                                                <option value="" disabled selected>Kec</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    
                                    <div class="form-group">
                                        <label  class="col-xs-2 control-label" for="nip">E-mail</label>
                                        <div class="col-xs-6">
                                            <input autofocus="autofocus" onfocus="this.select()" type="text" id="email_address" class="form-control" name="email_address" placeholder="E-mail">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label  class="col-xs-6 control-label" for="matkul">No. Telp</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" name="phone_no" placeholder="No. Telp">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label  class="col-xs-3 control-label" for="matkul">No. Fax.</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" name="fax_no" placeholder="No. Fax.">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label  class="col-xs-2 control-label" for="matkul">Kepala Gudang</label>
                                <div class="col-xs-8">
                                    <select name="warehouse_head" id="warehouse_head" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>-----</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="box-footer">
                <div class="form-group pull-right" style="margin-right: 0px">
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