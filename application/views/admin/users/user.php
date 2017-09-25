<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laural Hotel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables/dataTables.bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>AURAL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LAURAL HOTEL</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
  <?php $this->load->view('admin/nav'); ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php $this->load->view('admin/sidebar'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">User'Details</h3>
                    <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" 
                  data-target="#add_user">Add New User</button>

        </div>
        <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>EmailAddress</th>
                  <th>PhoneNumber</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($showusers as $u):?>
                <tr>
                  <td><?php echo $u->Id ?></td>
                  <td><?php echo $u->UserName ?></td>
                  <td><?php echo $u->EmailAddress ?></td>
                  <td><?php echo $u->PhoneNumber ?></td>
                  <td><?php echo $u->Status ?></td>
                  <td>
                  <a  class="editBtn" data-toggle="modal" 
                  data-target="#edit_user" data-id ="<?php echo $u->Id ?>">  
                   <i class="glyphicon glyphicon-plus"></i></a>

                   &nbsp;&nbsp;&nbsp;
                     <a href="<?php echo site_url('admin/userController/deleteuser')?>/<?php echo $u->Id ?>">
                   <i class="glyphicon glyphicon-remove"></i>  
                   </a>                              
                  </td>
                </tr>
                <?php endforeach ?>
               
              </table>

<div id="edit_user" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Edit User</h5>
                </div>

                <form action="<?php echo site_url('admin/userController/useredited')?>" method="post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label>UserName</label>
                          <input type="text" name="UserName" id="UserName" class="form-control" >
                  
                        </div>
                          <input type="hidden" name="id" id="id">
                        <div class="col-sm-6">
                          <label>EmailAddress</label>
                          <input type="text" name="EmailAddress" id="EmailAddress" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label>PhoneNumber</label>
                          <input type="text" name="PhoneNumber" id="PhoneNumber" class="form-control">
                        </div>

                        <div class="col-sm-6 col-lg-6">
                          <label>Status</label>
<br>
                   <tr>
                   <td><?php echo form_radio('Status', '1'); ?></td>
                   <td><?php echo form_label('Enable', 'Status');?></td>
                   </tr>
                    <tr>
                    <td><?php echo form_radio('Status', '0'); ?></td>
                    <td><?php echo form_label('Disable', 'Status');?></td>
                    </tr>

                        </div>

                      
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
  </div>


        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->

<div id="add_user" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Add User</h5>
                </div>

                <form action="<?php echo site_url('admin/userController/adduser')?>" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label>UserName</label>
                          <input type="text" name="UserName" class="form-control" >
                  
                        </div>

                        <div class="col-sm-6">
                          <label>EmailAddress</label>
                          <input type="text" name="EmailAddress" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label>PhoneNumber</label>
                          <input type="text" name="PhoneNumber" class="form-control">
                        </div>

                        <div class="col-sm-6 col-lg-6">
                          <label>Status</label>
<br>
                            <label>
                        <input type="radio" value="1" name="Status" checked="checked"> Enable
                      </label>
                        <br>
                      <label>
                        <input type="radio" value="0" name="Status" checked="checked"> Disable
                      </label>


                        </div>

                      
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
  </div>

    
  </div>
      <!-- /.row -->
      <!-- Main row -->
    
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php $this->load->view('admin/footer');?>

  <!-- Control Sidebar -->
  

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()?>https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script type="text/javascript">
  $('.editBtn').on('click',function(){

    var id = $(this).data("id");
     var url = '<?php echo site_url("admin/userController/edituser") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
              $('#UserName').val(data.UserName);
                $('#EmailAddress').val(data.EmailAddress);
                $('#PhoneNumber').val(data.PhoneNumber);
                $('#Status').val(data.Status);
                $('#id').val(data.Id);
        
         }
            });
});
</script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>dist/js/demo.js"></script>
</body>
</html>
