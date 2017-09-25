<section class="sidebar">
   <!-- Sidebar user panel -->
   <div class="user-panel">
      <div class="pull-left image">
         <img src="<?php echo base_url()?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
            <p>admin</p>
            <a href="#">
               <i class="fa fa-circle text-success"></i> Online
            </a>
         </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
         <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
               <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                     <i class="fa fa-search"></i>
                  </button>
               </span>
            </div>
         </form>
         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
               <a href="<?php echo site_url('admin/userController/dashboard') ?>">
                  <i class="fa fa-dashboard"></i>
                  <span>Dashboard</span>
               </a>
            </li>
            <li class="treeview">
               <a href="#">
                  <i class="fa fa-user"></i>
                  <span>User Management</span>
                  <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                  </span>
               </a>
               <ul class="treeview-menu">
                  <li>
                     <a href="<?php echo site_url('admin/userController/getusers')?>">
                        <i class="fa fa-circle-o"></i> User
                     </a>
                  </li>
                 
                  </ul>
               </li>

                        <li class="treeview">
               <a href="#">
                  <i class="fa fa-hotel"></i>
                  <span>Hotel Management</span>
                  <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                  </span>
               </a>
               <ul class="treeview-menu">
                  <li>
                     <a href="<?php echo site_url('admin/hotelController/getRoom')?>">
                        <i class="fa fa-circle-o"></i> Room
                     </a>
                  </li>
               <!--    <li>
                     <a href="<?php echo site_url('admin/hotelController/getroomtype')?>">
                        <i class="fa fa-circle-o"></i> RoomType
                     </a>
                  </li> -->
                  <li>
                     <a href="<?php echo site_url('admin/hotelController/getbookings')?>">
                        <i class="fa fa-circle-o"></i> Booking
                     </a>
                  </li>

                   <li>
                     <a href="<?php echo site_url('admin/hotelController/getavailabilities')?>">
                        <i class="fa fa-circle-o"></i> Availability
                     </a>
                  </li>
                <!--   <li>
                     <a href="<?php echo site_url('admin/hotelController/getdishes')?>">
                        <i class="fa fa-circle-o"></i> Dishes
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo site_url('admin/hotelController/gettables')?>">
                        <i class="fa fa-circle-o"></i> Table
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo site_url('admin/hotelController/gettabletype')?>">
                        <i class="fa fa-circle-o"></i> Table Type
                     </a>
                  </li> -->
                  </ul>
               </li>

               <li class="treeview">
               <a href="#">
                  <i class="fa fa-building"></i>
                  <span>Hall Management</span>
                  <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                  </span>
               </a>
               <ul class="treeview-menu">
                  <li>
                     <a href="<?php echo site_url('admin/hotelController/getHall')?>">
                        <i class="fa fa-circle-o"></i> Hall
                     </a>
                  </li>
                   <li>
                     <a href="<?php echo site_url('admin/hotelController/getHallAvailabilities')?>">
                        <i class="fa fa-circle-o"></i> Availibility
                     </a>
                  </li>
                   <li>
                     <a href="<?php echo site_url('admin/hotelController/getHallBookings')?>">
                        <i class="fa fa-circle-o"></i> Booking
                     </a>
                  </li>
                 </ul>
               </li>

                <li class="treeview">
               <a href="#">
                  <i class="fa fa-building"></i>
                  <span>Table Management</span>
                  <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                  </span>
               </a>
               <ul class="treeview-menu">
                  <li>
                     <a href="<?php echo site_url('admin/hotelController/gettables') ?>">
                        <i class="fa fa-circle-o"></i> Table
                     </a>
                  </li>
                   <li>
                     <a href="<?php echo site_url('admin/hotelController/getdishes') ?>">
                        <i class="fa fa-circle-o"></i> Dishes
                     </a>
                  </li>
                    <!-- <li>
                     <a href="<?php echo site_url('admin/hotelController/gettableavailabilities') ?>">
                        <i class="fa fa-circle-o"></i> Availability
                     </a>
                  </li> -->
                   <li>
                     <a href="<?php echo site_url('admin/hotelController/gettablebookings') ?>">
                        <i class="fa fa-circle-o"></i> Booking
                     </a>
                  </li>
                 </ul>
               </li>

               </ul>
            </section>