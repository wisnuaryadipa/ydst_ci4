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
    <div class="col-md-8 col-xl-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <input type="hidden" name="_method" value="PUT" />
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form action="<?= base_url('master/buku/edit/'.$book_code) ?>" class="form-horizontal" method="post">
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
                                <label  class="col-md-2" for="nip">Kode <?= $parent_title ?></label>
                                <div class="col-md-8">
                                    <input autofocus="autofocus" onfocus="this.select()" type="number" id="book_code" class="form-control" name="book_code" placeholder="ID <?= $parent_title ?>" value="<?= $cabang->book_code ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2" for="nama_dosen">Nama <?= $parent_title ?></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="book_title" placeholder="Nama <?= $parent_title ?>" value="<?= $cabang->book_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2" for="email">Penulis <?= $parent_title ?></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="writer" placeholder="Penulis <?= $parent_title ?>" value="<?= $cabang->writer ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-md-2" for="matkul">Harga <?= $parent_title ?></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="price" placeholder="Harga <?= $parent_title ?>" value="">
                                    <small class="help-block"></small>
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