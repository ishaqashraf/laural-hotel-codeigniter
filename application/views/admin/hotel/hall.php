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
        Hall
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Hall</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Hall's Details</h3>
                    <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" 
                  data-target="#add_roomhall">Add New Hall</button>

        </div>
        <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Type</th>
<!--                   <th>RoomType</th>
 -->              <th>Name</th>
                  <th>Location</th>
                  <th>Price</th>
<!--                   <th>Beds</th>
 -->              <th>Image</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Discount</th>
                  <th>Tax</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($showroomhall as $r):?>
                <tr>
                  <td><?php echo $r->roomhallid ?></td>
                  <td><?php echo $r->TypeName ?></td>
                  <td><?php echo $r->Name ?></td>
                  <td><?php echo $r->Location ?></td>
                  <td><?php echo $r->Price ?></td>
                  <td><img src="<?php echo base_url() ?>/uploads/<?php echo $r->Image ?>" alt="" style="height: 40px; width: 60px;"/></td>                  
                  <td><?php echo $r->Title ?></td>
                  <td><?php echo $r->Description?></td>
                  <td><?php echo $r->Discount?>%</td>
                  <td><?php echo $r->Tax?>%</td>
                  <td><?php echo $r->Status?></td>
                  <td>
                  <a class="editBtn" data-toggle="modal" 
                  data-target="#edit_roomhall" data-id ="<?php echo $r->roomhallid ?>">  
                   <i class="glyphicon glyphicon-plus"></i></a>

                   &nbsp;&nbsp;&nbsp;
                     <a href="<?php echo site_url('admin/hotelController/deletehall')?>/<?php echo $r->roomhallid ?>">
                   <i class="glyphicon glyphicon-remove"></i>  
                   </a>                              
                  </td>
                </tr>
                <?php endforeach ?>
               
              </table>

<div id="edit_roomhall" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Edit Hall</h5>
                </div>

          <form action="<?php echo site_url('admin/hotelController/halledited')?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                          <label>Name</label>
                        <input type="text" id="Name" name="Name" class="form-control" >

                        </div>

                       <div class="col-sm-6">
                          <label>Type</label>
                            <select class="form-control" name="Type" id="Type">
                            <?php foreach($showtype as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->TypeName ?></option>
                            <?php endforeach?>
                          </select>
                        </div> 
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                    
                          <div class="col-sm-6">
                          <label>Location</label>
                          <input type="text" name="Location" id="Location" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>Price</label>
                          <input type="text" name="Price" id="Price" class="form-control">
                        </div>

                        <div class="col-sm-6">
                          <label>Title</label>
                          <input type="text" name="Title" id="Title" class="form-control">
                        </div>

                        <div class="col-sm-6">
                          <label>Description</label>
                          <textarea type="text" name="Description" id="Description" class="form-control">
                            
                          </textarea>
                        </div>
                         <div class="col-sm-6">
                          <label>Discount</label>
                          <input type="text" name="Discount" id="Discount" class="form-control">
                        </div>
                         <div class="col-sm-6">
                          <label>Tax</label>
                          <input type="text" name="Tax" id="Tax" class="form-control">
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
                                            <input type="hidden" name="id" id="id"/>

                      
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

<div id="add_roomhall" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Add Hall</h5>
                </div>

                <form action="<?php echo site_url('admin/hotelController/addhall')?>" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                         <div class="col-sm-6">
                          <label>Name</label>
                          <input type="text" name="Name" class="form-control" >
                  
                        </div>

                      <div class="col-sm-6">
                          <label>Type</label>
                            <select class="form-control" name="Type">
                            <?php foreach($showtype as $a):?>
                             <option value="<?php echo $a->Id ?>"><?php echo $a->TypeName ?></option>
                            <?php endforeach?>
                          </select>
                        </div>     
                        </div>
                    </div>
                   <div class="form-group">
                      <div class="row">
                       <!--  <div class="col-sm-6">
                          <label>No Of Beds</label>
                          <input type="text" name="Bed" class="form-control">
                        </div>  -->
                           <!-- <div class="col-sm-6">
                          <label>Type</label>
                          <input type="text" name="Type" value="0" class="form-control" disabled>
                        </div>  -->
                        <div class="col-sm-6">
                          <label>Location</label>
                          <input type="text" name="Location" class="form-control">
                        </div>

                        <div class="col-sm-6">
                          <label>Price</label>
                          <input type="text" name="Price" class="form-control">
                        </div>

                         <div class="col-sm-6">
                          <label>Title</label>
                          <input type="text" name="Title" class="form-control">
                        </div>

                         <div class="col-sm-6">
                          <label>Description</label>
                          <textarea type="text" name="Description" class="form-control">
                            
                          </textarea> 
                        </div>
                        <div class="col-sm-6">
                          <label>Discount</label>
                          <input type="text" name="Discount"  class="form-control">
                        </div>
                         <div class="col-sm-6">
                          <label>Tax</label>
                          <input type="text" name="Tax" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <label>Image</label>
                          <input type="file" name="Image" class="form-control">
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
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
 Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
Bootstrap 3.3.6
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
Morris.js charts
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()?>plugins/morris/morris.min.js"></script>
Sparkline
<script src="<?php echo base_url()?>plugins/sparkline/jquery.sparkline.min.js"></script>
jvectormap
<script src="<?php echo base_url()?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>plugins/knob/jquery.knob.js"></script>
<script type="text/javascript">
  $('.editBtn').on('click',function(){

    var id = $(this).data("id");
     var url = '<?php echo site_url("admin/hotelController/edithall") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
              $('#Name').val(data.Name);
                $('#Type').val(data.Type);
                // $('#Bed').val(data.Bed);
                $('#Price').val(data.Price);
                $('#Location').val(data.Location);
                $('#Title').val(data.Title);
                $('#Description').val(data.Description);
                $('#Discount').val(data.Discount);
                $('#Tax').val(data.Tax);
                // $('#Image').val(data.Image);
                $('#Status').val(data.Status);
                $('#id').val(data.Id);
        
         }
            });
});
</script>
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
