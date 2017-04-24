<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/nes/';
include($root."/config/config.php");
?>
<html lang="en">
  <head>
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/green.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/tablescss/custom.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                        </tr>
                      </tbody>
                    </table>
        </div>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/nprogress.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tablesjs/tablesscript.js"></script>
  </body>
</html>