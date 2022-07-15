<?php echo view('layout/header'); ?>
<div class="wrapper">
  <?php echo view('layout/navbar'); ?>
  <?php echo view('layout/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php if ($breadcrumb){ echo $v_breadcrumb; }; ?>
    <!-- Main content -->
    <section class="content" style="padding-top: 0px;">
      <div class="container-fluid">
        <?php echo view($mainPage); ?>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!-- </aside> -->
  <!-- /.control-sidebar -->

</div>
<?php echo view('layout/footer'); ?>