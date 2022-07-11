<div  style="background-color:white;">
<ol class="breadcrumb" style="margin-bottom: 0px;">
  <?php 
  /**
   * 
   * Generating dynamically breadcrumb using actual URI
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
      <li><a href="<?= $_ENV['BASE_URL']; ?>"><i class="fa fa-dashboard"></i><?= ucfirst($val) ?></a></li>

  <?php } else if ($key == $countBreadcrumb - 1) { 
      /** Condition on the last loop (Last breadcrumb or actual opened page) */
  ?>
      <li class="active"><?= ucfirst($val) ?></li>
  <?php } else { ?>
      <li><a href="<?= $_ENV['BASE_URL'].'/'.$_URI; ?>"><?= ucfirst($val) ?></a></li>
  <?php }} ?>
</ol>
</div>
