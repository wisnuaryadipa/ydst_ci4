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
            <form action="<?= url_to('master/karyawan/create') ?>" class="form-horizontal" method="post">
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
                            <div class="form-group">
                                <label for="area_code" class="col-md-2 control-label">Username Akun</label>
                                <div class="col-sm-6">
                                    <select name="user_id" id="user_id" class="form-control select2" style="width: 100%!important">
                                        <?php foreach($unattemptUsers as $key => $user): ?>
                                        <option value="<?= $user->id ?>" selected><?= $branch->username ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-6">
                                            <select name="gender_id" id="gender_id" class="form-control select2" style="width: 100%!important">
                                                <option value="1" selected>Pria</option>
                                                <option value="2" >Wanita</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Tanggal Lahir</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control datepicker" id="birth_date" name="birth_date" placeholder="Tanggal Lahir">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Status Nikah</label>
                                        <div class="col-sm-6">
                                            <select name="marital_id" id="marital_id" class="form-control select2" style="width: 100%!important">
                                                <option value="1" selected>Single, 0 Tanggungan</option>
                                                <option value="2" selected>Single, 1 Tanggungan</option>
                                                <option value="3" selected>Single, 2 Tanggungan</option>
                                                <option value="4" selected>Single, 3 Tanggungan</option>
                                                <option value="5" selected>Menikah, 0 Tanggungan</option>
                                                <option value="6" selected>Menikah, 1 Tanggungan</option>
                                                <option value="7" selected>Menikah, 2 Tanggungan</option>
                                                <option value="8" selected>Menikah, 3 Tanggungan</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Agama</label>
                                        <div class="col-sm-6">
                                            <select name="religion_id" id="religion_id" class="form-control select2" style="width: 100%!important">
                                                <option value="1" selected>Islam</option>
                                                <option value="2" >Katolik</option>
                                                <option value="3" >Budha</option>
                                                <option value="4" >Hindu</option>
                                                <option value="5" >Protestan</option>
                                                <option value="6" >Lain-lain</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-2 control-label">Telephone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Telephone">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-2 control-label">Kota</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Kota">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-2 control-label">Kd. Pos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Kd. Pos">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Alamat">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Lokasi / Cabang</label>
                                        <div class="col-sm-6">
                                            <select name="branch_code" id="branch_code" class="form-control select2" style="width: 100%!important">
                                                <?php foreach($branches as $key => $branch): ?>
                                                <option value="<?= $branch->branch_code ?>" selected><?= $branch->branch_name ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Jabatan</label>
                                        <div class="col-sm-6">
                                            <select name="role_id" id="role_id" class="form-control select2" style="width: 100%!important">
                                                <?php foreach($roles as $key => $role): ?>
                                                <option value="<?= $role->role_id ?>" selected><?= $role->role_name ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-2 control-label">Pendidikan</label>
                                        <div class="col-sm-6">
                                            <select name="edu_background" id="edu_background" class="form-control select2" style="width: 100%!important">
                                                <option value="1" selected>SD</option>
                                                <option value="2" >SMP</option>
                                                <option value="3" >SMA</option>
                                                <option value="4" >S1</option>
                                                <option value="5" >S2</option>
                                                <option value="6" >S3</option>
                                                <option value="7" >D1</option>
                                                <option value="8" >D2</option>
                                                <option value="9" >D3</option>
                                                <option value="10" >D4</option>
                                            </select>
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-4 control-label">Bergabung</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control datepicker" id="join_date" name="join_date" placeholder="Bergabung">
                                            <small class="help-block"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="matkul" class="col-md-4 control-label">Berhenti</label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control datepicker" id="resign_date" name="resign_date" placeholder="Berhenti">
                                            <small class="help-block"></small>
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

        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });

    });


</script>