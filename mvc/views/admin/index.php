<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Font Awesome -->
 <?php
    require_once('home/css.php');
    ?> 

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 
    <?php
    require_once('home/sidebar.php');
    ?>
    <?php
    require_once($data['main'].'.php');
    ?>
    <!-- footer -->
    <?php
    require_once('home/footer.php');
    ?>
  <!-- Navbar -->
 <?php
    require_once('home/navbar.php');
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php 
  require_once('home/js.php');
 ?>

</body>
</html>
