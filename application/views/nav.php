	<nav class="navbar navbar-inverse">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html#"><img src="<?php echo base_url()?>template/images/logo.png" alt="logo"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li  class="active"><a href="<?php echo site_url('welcome'); ?>">Home</a></li>
							<li class="dropdown">
								<a href="<?php echo site_url('welcome/about') ?>" role="button" aria-haspopup="true" aria-expanded="false">About Us </a>
								
							</li>

							<li class="dropdown">
								<a href="<?php echo site_url('welcome/tablereservation') ?>" role="button" aria-haspopup="true" aria-expanded="false">Table Reservation </a>
								
							</li>
							<li class="dropdown">
								<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<!-- <li><a href="rooms-col-1.html">1 Column</a></li>
									<li><a href="rooms-col-2.html">2 Column</a></li>
									<li><a href="rooms-col-3.html">3 Column</a></li> -->
									<li><a href="<?php echo site_url('welcome/getRooms') ?>">Rooms</a></li>
									<li><a href="<?php echo site_url('welcome/getHalls') ?>">Halls</a></li>
								
								</ul>
							</li>
							<!-- <li><a href="blog.html">Blog</a></li>
							<li><a href="gallery.html">Gallery</a></li> -->
							<li><a href="<?php echo site_url('welcome/contact') ?>">Contact</a></li>
							<?php if($this->session->userdata('user')){
								 ?>
							<li><a href="#">Welcome
							<?php 
								echo $this->session->userdata('user')->UserName;


								 ?></a>
							</li>
							<li><a href="<?php echo site_url('welcome/logout') ?>">Logout</a></li>
							<?php 
						}
						else {
							?>
						
						<li><a href="<?php echo site_url('welcome/login') ?>">Login</a></li>
						<?php }
						?>
								
						</ul>
					</div><!-- /.navbar-collapse -->
					
				</div><!-- /.container-fluid -->
			</nav>