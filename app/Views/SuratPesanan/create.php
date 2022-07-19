<style>

    


</style>

<!-- Main content -->
<section class="content" style="padding-top: 5px;" id="compact-form">
    <div class="row">

        <div class="box">
            <div class="box-body" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="row">
                    <div class="col-md-6 col-lg-6 xs-padding-side">
                        <div class="col-md-12">
                            <div class="box-body">
                                <div class="box box-primary" style="margin-bottom: 0px;">
                                    <div class="box-header with-border">
                                        <h3 class="box-title"><?= $title ?></h3>
                                        <div class="btn btn-flat bg-navy pull-right">
                                            SISWA
                                        </div>
                                    </div><!-- /.box-header -->
                                    <form action="" class="form-horizontal">
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Kode SP</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="nama_user" placeholder="Kode <?= $parent_title ?>">
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Cabang</label>
                                                        <div class="col-sm-10">
                                                            <select name="cabang" id="cabang" class="form-control select2" style="width: 100%!important">
                                                                <option value="" disabled selected>Cabang</option>
                                                            </select>
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Periode Jual</label>
                                                        <div class="col-sm-10">
                                                            <select name="periode" id="periode" class="form-control select2" style="width: 100%!important">
                                                                <option value="" disabled selected>Semester 01 2022/2023</option>
                                                            </select>
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Sales</label>
                                                        <div class="col-sm-10">
                                                            <select name="sales" id="sales" class="form-control select2" style="width: 100%!important">
                                                                <option value="" disabled selected>Sales</option>
                                                            </select>
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Customer</label>
                                                        <div class="col-sm-10">
                                                            <div class="input-group" style="width: 100%; display: flex;">
                                                                <div class="input" style="width: 100%;">

                                                                    <select name="customer" id="customer" class="form-control select2" style="width: 100%!important">
                                                                        <option value="" disabled selected>Customer</option>
                                                                    </select>
                                                                    <small class="help-block"></small>
                                                                </div>
                                                                <div class="btn bg-gray-active" id="btn-add" style=" margin-left: 10px;">Add</div>
                                                            </div>
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Admin</label>
                                                        <div class="col-sm-10">
                                                            <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                                                <option value="" disabled selected>DY02002 -> Admin</option>
                                                            </select>
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="box-input-child form-group">
                                                        <label class="col-sm-4 control-label ">Tgl. SP</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control datepicker" placeholder="Tgl SP <?= $parent_title ?>">
                                                        </div>
                                                    </div>
                                                            <small class="help-block"></small>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="box-input-child form-group">
                                                        <label class="col-sm-4 control-label no-padding-side">Tgl Ren Kirim</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control datepicker" placeholder="Tgl Rencana Kirim <?= $parent_title ?>">
                                                        </div>
                                                    </div>
                                                            <small class="help-block"></small>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Catatan</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nama_user" placeholder="Catatan">
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="matkul" class="col-sm-2 control-label">Max Retur</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="nama_user" placeholder="Max Retur">
                                                            <small class="help-block"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 xs-padding-side">
                                    <div class="box-body" id="rencana-pelunasan">
                                        <table class="table table-striped" style="width: 100%">
                                            <tbody style="width: 100%">
                                                <tr style="width: 100%">
                                                    <th style="width: 65px;">Rencana Pelunasan</th>
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
                                                    <th style="min-width: 85px;"">Setor Oleh</th>
                                                </tr>
                                                <tr>
                                                    <td></td>
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
                                                    <td><input type="text" id="inpt-setor"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="box-footer">
                                <div class="form-group pull-right">
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary disabled">
                                         New
                                    </div>
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary">
                                         Open
                                    </div>
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary disabled">
                                         Edit
                                    </div>
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary disabled">
                                         Delete
                                    </div>
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary">
                                         Save
                                    </div>
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary disabled">
                                         Process
                                    </div>
                                    <div type="submit" id="submit" class="btn btn-flat btn-primary disabled">
                                         Preview
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- general form elements -->
                        
                    </div>
                    <div class="col-md-6 col-lg-6 xs-padding-side">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="box-body" id="daftar-sp-customer">
                                    <div class="box box-primary" style="margin-bottom: 0px;">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Daftar SP Customer Bersangkutan</h3>
                                            <div class="type-sp pull-right">
                                            </div>
                                        </div><!-- /.box-header -->
                                        <div class="box-body" style="min-height: 250px;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="box-body" id="pesanan-buku">
                    
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Pesanan Buku</h3>
                                            <div class="type-sp pull-right">
                                                <div class="btn btn-flat  bg-aqua-active" id="tambah-buku">Tambah Buku</div>
                                            </div>
                                        </div><!-- /.box-header -->
                                        <div class="box-body">
                                            <form action="" class="form-horizontal">
                                                <div class="form-group" id="list-buku">
                                                    <div class="row form-buku-init">
                                                        <div class="col-lg-10">
                                                            <div class="form-group" style="width: 100%">
                                                                <label for="matkul" class="col-sm-2 control-label">Buku</label>
                                                                <div class="col-sm-10">
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
                                            </form>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
        
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