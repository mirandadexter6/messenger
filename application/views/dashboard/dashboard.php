<div class="container" style="margin-left:240px;">
<div class="row">
  <div class="col-sm-8 blog-main">
    <div class="blog-post">
      <div class="well postdiv postdiv-container">
        <h4></h4>
        <form>
        <div class="input-group text-center">
          <input type="text" autocomplete="off" name="post" id="post" class="form-control input-lg" style="height:100px;width:590px;border-radius:10px;" placeholder="Write something . .">
          <span class="input-group-btn" >
          <button class="btn btn-lg" type="submit" id="submit" style="background-color: #00bc8c;color:white;height:100%;">Submit</button></span>
          <input type="hidden" name="userid"  id="userid"  value="<?php echo ($this->session->loginsession['user_id']);?>" >
        </div>
      </form>
      </div>
      <?php 
        //echo $newsdata->username;
        if($getalldata!='')
        {
        foreach($getalldata as $data) 
        {
        ?>
      <div class="panel panel-default postdiv postdiv-container">
        <div class="panel-heading">
          <img id="profile-img" class="profile-img-card" src="images/user.png" />
          <B style="color:rgba(18, 43, 64, 1);">
          <?php
            $id=$data->user_id; 
            $query = $this->db->get_where('accounts', array('user_id' => $id));
            $row = $query->row_array();
            echo $row['full_name'];
            
            
            ?>
          </b>
          <i style="margin-left:200px;" ><?=
              date("F j , Y  D g:i:s A", strtotime($data->date_time)); 
              ?>
                 </i>
        </div>
        <div class="panel-body">
          <div class="clearfix"></div>
          <?=$data->message;?>
          <hr>
        </div>
      </div>
      <?php
        }    
        }
        ?>
    </div>
    <!-- post -->
  </div>
  <!-- main -->
  <div class="col-sm-3 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
      <div class="container">
        
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Account Settings</h4>
    </div>
    <div class="modal-body">
     
            <div class="form-group has-feedback left-addon">
                <input type="name"  name="fullname" class="form-control" placeholder="Full Name" autocomplete="off" required/>
                <i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
                <div class="form-group has-feedback left-addon">
                <input type="name"  name="address" class="form-control" placeholder="Address" autocomplete="off" required/>
                <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback left-addon">
                <input type="name"  name="phone" class="form-control" placeholder="Phone Number" autocomplete="off" required/>
                <i class="glyphicon glyphicon-phone marker form-control-feedback"></i>
            </div>
        
                
            <button name="register" type="submit" class="btn btn-info btn-block">Update</button>
    </div>
    <div class="modal-footer">
      
    </div>
  </div>
</div>

<script>
    $(function(){
        $( "#submit" ).click(function(event)
        {
           // event.preventDefault();//prevent auto submit data
            var post= $("#post").val();
            var userid= $("#userid").val();
            $.ajax(
                {
                    type:"post",
                    url: "<?php echo base_url(); ?>login/insert",
                    data:{ post:post, userid:userid},
                    success:function(data)
                    {
                    	  // alert(post);
                    }
                });
        });
    });

    setInterval(function()
    		{ 
    		    $.ajax({
    		      type:"post",
    		      url: "<?php echo base_url();?>login/",
    		      datatype:"html",
    		      success:function(data)
    		      {
    		          alert("Hello World");
    		      }
    		    });
    		}, 10000);//time in milliseconds 
    
</script>