<?php 
$this->load->helper('form');
?>
<div class="container">
	<div class="col-md-12">
		<div class="login col-md-4 col-md-offset-4">
			<div class="input col-md-8 col-md-offset-2 text-center">
				<h1>LOGIN</h1> <br>
				<?php echo form_open('news/create'); ?>
				<input type="text" class="form-control" placeholder="Username" />
				<br>
				<input type="password" class="form-control" placeholder="Password"  />
				<br>
				<button type="submit" class="btn btn-primary">Login</button>
				<br><br>
				<a href="<?php echo base_url();?>dashboard/" >Click me!</a>
				</form>
				
			</div>
				
		</div>
	
	</div>
</div>