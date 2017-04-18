	<?php 
	$this->load->helper('form');
	echo validation_errors();
	if($this->session->loginsession['username']!='')
	{
		redirect('Dashboard');
	}
	?>
	<!-- for LOGIN-->
	<div class="container">
	<?php echo $this->session->loginsession['username'];?>
	        <div class="card card-container">
	        <center><b><h5><?php echo $this->session->flashdata('message');?></h5></b></center>
	            <img id="profile-img" class="profile-img-cards" src="images/user1.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            <?php echo form_open('login/performlogin'); ?>
	                <input type="text" name ="username" class="form-control" placeholder="Username" required autofocus autocomplete="off">
	                <br>
	                <input type="password" name ="password" class="form-control" placeholder="Password" required>
	                <br>
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
	            <?php echo form_close();?>
	        </div><!-- /card-container -->
	 </div><!-- /container -->
		<!-- for SIGNUP-->
		<?php echo form_open('login/register'); ?>
		
		<?php echo form_close();?>


