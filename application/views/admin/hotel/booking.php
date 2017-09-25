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
        Booking
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> Room Booking's Details</h3>
                    <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" 
                  data-target="#add_booking">Add New Booking</button>

        </div>
        <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
<!--                   <th>Availability_ID</th>
 -->                  <th>Type</th>
                  <th>RoomName</th>
                  <th>FromDate</th>
                    <th>ToDate</th>
                  <th>UserID</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($showbooking as $b):?>
                <tr>
                  <td><?php echo $b->bookingId ?></td>
<!--                   <td><?php //echo $b->Availability_Id ?></td>
 -->                  <td><?php echo $b->TypeName ?></td>
                  <td><?php echo $b->Name ?></td>
                  <td><?php echo $b->FromDate ?></td>
                  <td><?php echo $b->ToDate ?></td>
                  <td><?php echo $b->UserName ?></td>
                  <td><?php echo $b->bPrice ?></td>
                  <td><?php echo $b->status ?></td>
                  <td>
               <!--    <a class="editBtn" data-toggle="modal" 
                  data-target="#edit_booking" data-id ="<?php echo $b->bookingId ?>">  
                   <i class="glyphicon glyphicon-plus"></i></a> -->

                   &nbsp;&nbsp;&nbsp;
                     <a href="<?php echo site_url('admin/hotelController/deletebooking')?>/<?php echo $b->bookingId ?>">
                   <i class="glyphicon glyphicon-remove"></i>  
                   </a>                              
                  </td>
                </tr>
                <?php endforeach ?>
               
              </table>

<div id="edit_booking" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Edit Booking</h5>
                </div>

                <form action="<?php echo site_url('admin/hotelController/bookingedited')?>" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <!-- <div class="col-sm-6">
                          <label>Availability_ID</label>
                          
                          <select class="form-control" name="Availability_Id" id="Availability_Id">
                            <?php foreach($showavailabilityid as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->Id ?></option>
                            <?php endforeach?>
                          </select>
                  
                        </div> -->

                         <div class="col-sm-6">
                          <label>Type</label>
                          
                          <select class="form-control" name="Type" id="Type">
                            <?php foreach($showtype as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->TypeName ?></option>
                            <?php endforeach?>
                          </select>
                  
                        </div>
                        <div class="col-sm-6">
                          <label>Rooms</label>
                           <select class="form-control" name="room_hall_id" id="room_hall_id">
                            <?php foreach($showroomhallid as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->Name ?></option>
                            <?php endforeach?>
                          </select>
                  
                  
                        </div>
                          <div class="col-sm-6">
                          <label>FromDate</label>
                          <input type="date" name="FromDate" id="FromDate" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>ToDate</label>
                          <input type="date" name="ToDate" id="ToDate" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>UserID</label>
                           <select class="form-control" name="User_Id" id="User_Id">
                            <?php foreach($showusers as $a):?>
                          <option value="<?php echo $a->Id ?>"><?php echo $a->UserName ?></option>
                            <?php endforeach?>
                          </select>
                  
                        </div>
                        <div class="col-sm-6">
                          <label>Price</label>
                          <input type="text" name="Price" id="Price" class="form-control">
                        </div>

                          <div class="col-sm-6 col-lg-6">
                          <label>Status</label>
<br>
                            <label>
                        <input type="radio" value="1" name="Status"> Enable
                      </label>
                        <br>
                      <label>
                        <input type="radio" value="0" name="Status"> Disable
                      </label>


                        </div>
                          <input type="hidden" name="id" id="id">
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

<div id="add_booking" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Add Booking</h5>
                </div>

                <form action="<?php echo site_url('admin/hotelController/addbooking')?>" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                       <!--  <div class="col-sm-6">
                          <label>Select Availability_ID</label>
                          
                          <select class="form-control" name="Availability_Id" id="Availability_Id">
                            <?php foreach($showavailabilityid as $a):?>
                             <option value="<?php //echo $a->Id ?>"><?php //echo $a->Id ?></option>
                            <?php endforeach?>
                          </select>
                  
                        </div>
 -->
                         <div class="col-sm-6">
                          <label>Select Type</label>
                          
                          <select class="form-control" name="Type" id="Type">
                            <?php foreach($showtype as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->TypeName ?></option>
                            <?php endforeach?>
                          </select>
                  
                        </div>
                        <div class="col-sm-6">
                          <label>Select Room</label>
                           <select class="form-control" name="room_hall_id" id="room_hall_id">
                            <?php foreach($showroomid as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->Name ?></option>
                            <?php endforeach?>
                          </select>
                  
                  
                        </div>
                          <div class="col-sm-6">
                          <label>FromDate</label>
                          <input type="date" name="FromDate" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>ToDate</label>
                          <input type="date" name="ToDate"  class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>UserID</label>
                           <select class="form-control" name="User_Id" id="User_Id">
                            <?php foreach($showusers as $a):?>
                          <option value="<?php echo $a->Id ?>"><?php echo $a->UserName ?></option>
                            <?php endforeach?>
                          </select>
                  
                        </div>
                        <div class="col-sm-6">
                          <label>Price</label>
                          <input type="text" name="Price" id="Price" class="form-control">
                        </div>
                         <div class="col-sm-6 col-lg-6">
                          <label>Status</label>
<br>
                            <label>
                        <input type="radio" value="1" name="Status"> Enable
                      </label>
                        <br>
                      <label>
                        <input type="radio" value="0" name="Status"> Disable
                      </label>


                        </div>
                          <input type="hidden" name="id" id="id">
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
<script type="text/javascript">
  $('.editBtn').on('click',function(){

    var id = $(this).data("id");
     var url = '<?php echo site_url("admin/hotelController/editbooking") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
              // $('#Availability_Id').val(data.Availability_Id);
                $('#room_hall_id').val(data.room_hall_id);
                $('#type').val(data.type);
                $('#ToDate').val(data.ToDate);
                $('#FromDate').val(data.FromDate);
                $('#User_Id').val(data.User_Id);
                $('#Status').val(data.Status);
                $('#Price').val(data.Price);
                $('#id').val(data.Id);
        
         }
            });
});
</script>
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
