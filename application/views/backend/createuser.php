<div class="row" style="padding:1% 0">
	<div class="col-md-12">
		<div class="pull-right">
			<a href="<?php echo site_url('site/viewusers'); ?>" class="btn btn-primary pull-right"><i class="icon-long-arrow-left"></i>&nbsp;Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 User Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/createusersubmit');?>" enctype= "multipart/form-data">
				<div class="form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Name</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>">
				  </div>
				</div>
<!--
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Username</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="username" value="<?php echo set_value('username');?>">
				  </div>
				</div>
-->
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Email</label>
				  <div class="col-sm-4">
					<input type="email" id="normal-field" class="form-control" name="email" value="<?php echo set_value('email');?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="description-field">Password</label>
				  <div class="col-sm-4">
					<input type="password" id="description-field" class="form-control" name="password" value="">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="description-field">Confirm Password</label>
				  <div class="col-sm-4">
					<input type="password" id="description-field" class="form-control" name="confirmpassword" value="">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">DOB</label>
				  <div class="col-sm-4">
					<input type="date" id="normal-field" class="form-control" name="dob" value="<?php echo set_value('dob');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Street</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="street" value="<?php echo set_value('street');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Address</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="address" value="<?php echo set_value('address');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">City</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="city" value="<?php echo set_value('city');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">State</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="state" value="<?php echo set_value('state');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Country</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="country" value="<?php echo set_value('country');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Pincode</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="pincode" value="<?php echo set_value('pincode');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Facebook</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="facebook" value="<?php echo set_value('facebook');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Google</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="google" value="<?php echo set_value('google');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Twitter</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="twitter" value="<?php echo set_value('twitter');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">SocialId</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="socialid" value="<?php echo set_value('socialid');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">logintype</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('logintype',$logintype,set_value('logintype'),'class="chzn-select form-control" 	data-placeholder="Choose a Logintype..."');
					?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Status</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('status',$status,set_value('status'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Image</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image');?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Select Accesslevel</label>
				  <div class="col-sm-4">
					<?php 	 echo form_dropdown('accesslevel',$accesslevel,set_value('accesslevel'),'id="accesslevelid" onchange="operatorcategories()" class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
					?>
				  </div>
				</div>
				
<!--
				<div class=" form-group categoryclass" style="display:none;">
				  <label class="col-sm-2 control-label">Category</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('category[]',$category,set_value('category'),'id="select10" class="chzn-select form-control" 	data-placeholder="Choose a category..." multiple');
					?>
				  </div>
				</div>
-->
				
<!--
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">json</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="json" value="<?php echo set_value('json');?>">
				  </div>
				</div>
-->
            
                    <div class="form-group hidden" >
                        <label class="col-sm-2 control-label" for="normal-field">json</label>
                        <div class="col-sm-4">
                            <textarea name="json" id="" cols="20" rows="10" class="form-control tinymce fieldjsoninput"><?php echo json_encode($fieldjson,true); ?></textarea>

                        </div>
                    </div>
                    <div class="fieldjson"></div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary jsonsubmit">Save</button>
				  <a href="<?php echo site_url('site/viewusers'); ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
	</div>
</div>
<script type="text/javascript">
    function operatorcategories() {
        console.log($('#accesslevelid').val());
        if($('#accesslevelid').val()==2)
        {
            $( ".categoryclass" ).show();
        }
       
        else
        {
            $( ".categoryclass" ).hide();
        }
       
    }
    
     
    $(document).ready(function () {
//        console.log($(".fieldjsoninput").val());
        filljsoninput(".fieldjsoninput",".fieldjson");
        $(".jsonsubmit").click(function() {
            jsonsubmit(".fieldjsoninput",".fieldjson");
            //return false;
        });
        
    });
</script>