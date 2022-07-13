<style>
    #rencana-pelunasan tr td input{
        width: 50px;
    }
</style>

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
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Kode SP</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Kode <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Cabang</label>
                            <select name="cabang" id="cabang" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Cabang</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Periode Jual</label>
                            <select name="periode" id="periode" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Semester 01 2022/2023</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Sales</label>
                            <select name="sales" id="sales" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Sales</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="matkul">Customer</label>
                            <div class="input-group" style="width: 100%; display: flex;">
                                <div class="input" style="width: 100%;">

                                    <select name="customer" id="customer" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Customer</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                                <div class="btn bg-gray-active" style="height: 35px; margin-left: 10px;">Add</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Admin</label>
                            <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>DY02002 -> Admin</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="box-input-child">
                            <label>Tanggal SP</label>
                            <input type="text" class="form-control datepicker" placeholder="Tanggal Awal <?= $parent_title ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-4">
                        <div class="box-input-child">
                            <label>Tanggal Rencana Kirim</label>
                            <input type="text" class="form-control datepicker" placeholder="Tanggal Akhir <?= $parent_title ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="matkul">Catatan</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Catatan">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="matkul">Max Retur</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Max Retur">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-body">
                
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Rencana Pelunasan</h3>
                        <div class="type-sp pull-right">
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body" id="rencana-pelunasan">
                        <table class="table table-striped" style="width: 100%">
                            <tbody style="width: 100%">
                                <tr style="width: 100%">
                                    <th>Apr</th>
                                    <th>Mei</th>
                                    <th>Jun</th>
                                    <th>Jul</th>
                                    <th>Ags</th>
                                    <th>Sep</th>
                                    <th>Okt</th>
                                    <th>Nov</th>
                                    <th>Des</th>
                                    <th>Jan</th>
                                    <th>Total</th>
                                    <th>Setor Oleh</th>
                                </tr>
                                <tr>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="box-body">
                
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pesanan Buku</h3>
                        <div class="type-sp pull-right">
                            <div class="btn bg-aqua-active" id="tambah-buku">Tambah Buku</div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body" id="rencana-pelunasan">
                        
                        <div class="form-group" id="list-buku">
                            <div class="row form-buku-init">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label for="matkul">Buku</label>
                                        <div class="input-group" style="width: 100%; display: flex;">
                                            <div class="input" style="width: 100%;">

                                                <select name="customer" id="customer" class="form-control select2" style="width: 100%!important">
                                                    <option value="" disabled selected>Buku</option>
                                                </select>
                                                <small class="help-block"></small>
                                            </div>
                                            <div class="inpt-exemplar" style="height: 35px; margin-left: 10px;">
                                            
                                                <input type="text" class="form-control" name="nama_user" placeholder="Exemplar">
                                            </div>
                                        </div>
                                    </div>
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

<script>

    $(document).ready(function() {
        var formBukul

        $('.select2').select2();

        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });

        $(document).on('click', '#tambah-buku', function(x) {
            formBuku = $( ".form-buku-init:last" ).clone();
            formBuku.insertAfter( ".form-buku-init:last" );
            console.log(formBuku)
        })



    });


</script>