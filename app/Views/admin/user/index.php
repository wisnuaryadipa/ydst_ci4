<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
    <ol class="breadcrumb">
        <?php 
        /**
         * 
         * Generating dynamically breadcrumb using current URI
         * $breadcrumb declared manualy in controller file.
         * 
         */
        $countBreadcrumb = count($breadcrumb);
        $splitedURI = explode("/", $_SERVER['REQUEST_URI']);
        foreach($breadcrumb as $key=>$val) { 
            $_sliced = array_slice($splitedURI, 0, $key+1);
            $_URI = implode('/', $_sliced);
            if($key == 0) {
                /** Condition on the first loop (First breadcrumb) */
        ?>
            <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i><?= ucfirst($val) ?></a></li>

        <?php } else if ($key == $countBreadcrumb - 1) { 
            /** Condition on the last loop (Last breadcrumb or current opened page) */
        ?>
            <li class="active"><?= ucfirst($val) ?></li>
        <?php } else { ?>
            <li><a href="<?= base_url().'/'.$_URI; ?>"><?= ucfirst($val) ?></a></li>
        <?php }} ?>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $title ?></h3>
            <div class="type-sp pull-right">
            </div>
        </div><!-- /.box-header -->

        <div class="box box-solid">
            <div class="box-filter">
            <div class="box-body">
                <div class="box-input-buku">
                <div class="box-input-buku-child">
                    <strong>Cabang</strong>
                    <select class="form-control">
                    <option>Yogyakarta</option>
                    </select>
                </div>
                <div class="box-input-buku-child">
                    <strong>Bagian</strong>
                    <select class="form-control">
                    <option>Semua</option>
                    </select>
                </div>
                <div class="box-input-buku-child submit pull-right" style="margin-top: 10px">
                    <button class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div><!-- /.box-body -->
            </div>
        </div><!-- /.box -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <table class="table-bordered table">
                    <tr>
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>J.Kelamin</th>
                        <th>Bagian</th>
                        <th>Cabang</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>K0001</td>
                        <td>MAWAR</td>
                        <td>Perempuan</td>
                        <td>Sales</td>
                        <td>YOGYA</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>K0002</td>
                        <td>DIO</td>
                        <td>Laki-laki</td>
                        <td>Sales</td>
                        <td>YOGYA</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->