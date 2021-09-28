<?php include('header.php'); ?>

<div class="container">
	<h2 class="text-center">Edit User</h2>
	<?= anchor('dashboard/index','Back',['class'=>'btn btn-outline-dark']) ?>
	<?php echo form_open_multipart("Dashboard/update_user_details/{$detail->id}",['class'=>'form-horizontal']); ?>

		<fieldset>
        <div class="form-group">
          <label class="form-label mt-4">Name</label>
          <?= form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Name',
          'value'=>set_value('username', $detail->username)
        ]);
           ?>
        </div>
        <?= form_error('username'); ?>
        
        <div class="form-group">
          <label class="form-label mt-4">Email address</label>
          <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email',
          'value'=>set_value('email', $detail->email)
        ]) ?>
        </div>
        <?= form_error('email'); ?>

        <div class="form-group">
          <label class="form-label mt-4">Upload Image</label>
          <?= form_upload(['name'=>'photo','class'=>'form-control', 'value'=>set_value('photo', $detail->photo)
        ]); ?>
        </div>
        <div class="col-lg-6">
            <?php if(isset($upload_error))  echo $upload_error ?>  
         </div>


        <input type="hidden" name="total_count" id="total_count" value="2">

        <div class="row formulation-div" style="display: flex;justify-content: center; align-items: center;">

        	<div class="col-md-3">
        		<div class="form-group">
		          <label class="form-label mt-4">Street</label>
		          <?= form_input(['name'=>'vstreet_1','class'=>'form-control','placeholder'=>'Enter Street', 'id'=>'vstreet',
		          'value'=>set_value('street', $detail->vstreet)
		        ]) ?>
        		</div>
        	</div>

        	<div class="col-md-3">
        		<div class="form-group">
		          <label class="form-label mt-4">City</label>
		          <?= form_input(['name'=>'vcity_1','class'=>'form-control','placeholder'=>'Enter City', 'id'=>'vcity',
		          'value'=>set_value('city', $detail->vcity)
		        	]) ?>
		        </div>
        	</div>

        	<div class="col-md-2">
        		<div class="form-group">
		          <label class="form-label mt-4">State</label>
		          <?= form_input(['name'=>'vstate_1','class'=>'form-control','placeholder'=>'Enter State', 'id'=>'vstate',
		          'value'=>set_value('state', $detail->vstate)
		        	]) ?>
        		</div>
        	</div>

        	<div class="col-md-2">
        		<div class="form-group">
		          <label class="form-label mt-4">Zip Code</label>
		          <?= form_input(['name'=>'vzip_1','class'=>'form-control','placeholder'=>'Enter Zip', 'id'=>'vzip',
		          'value'=>set_value('zip', $detail->vzip)
		        	]) ?>
		        </div>
        	</div>

        	<div class="col-md-2">
        		<div class="form-group">
        			<a href="javascript:void(0)" class="btn btn-danger add_more_btn" title="Add More" style="margin-top: 30px;">Add More</a>
        		</div>
        		
        	</div>
        </div>

        <!-- script form add by ajax dynamically -->
       <script id="hidden-template" type="text/html">
       		<div class="script-form formulation-div" id="second-pharmacy">
       			
       			<div class="row">
       				<div class="col-md-3">
       					<div class="form-group">
				          <label class="form-label mt-4">Street</label>
				          <?= form_input(['name'=>'vstreet_{0}','class'=>'form-control','placeholder'=>'Enter Street', 'id'=>'vstreet'
				        	]) ?>
		        		</div>
       				</div>

       				<div class="col-md-3">
       					<div class="form-group">
				          <label class="form-label mt-4">City</label>
				          <?= form_input(['name'=>'vcity_{0}','class'=>'form-control','placeholder'=>'Enter City', 'id'=>'vcity'
				        	]) ?>
				        </div>
       				</div>

       				<div class="col-md-2">
       					<div class="form-group">
				          <label class="form-label mt-4">State</label>
				          <?= form_input(['name'=>'vstate_{0}','class'=>'form-control','placeholder'=>'Enter State', 'id'=>'vstate'
				        	]) ?>
		        		</div>
       				</div>

       				<div class="col-md-2">
       					<div class="form-group">
				          <label class="form-label mt-4">Zip Code</label>
				          <?= form_input(['name'=>'vzip_{0}','class'=>'form-control','placeholder'=>'Enter Zip', 'id'=>'vzip'
				        	]) ?>
				        </div>
       				</div>

       				<div class="col-md-2">
       					<div class="d-flex justify-content-end">
       						<a href="javascript:void(0)" class="remove-form" title="Delete" style="color: red; font-size: 20px; margin-right: 150px; margin-top: 50px;"> <i class="fa fa-trash"></i></a>
       					</div>
       				</div>
       				
       			</div>
       		</div>
       </script>

        <?= form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary mt-4']); ?>

      </fieldset>
		
	<?= form_close(); ?>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"  	type="text/javascript"></script>

<script type="text/javascript">
	var formulation_count = $("#total_count").val();

	// add form on click of add more button
	$(document).on("click", ".add_more_btn", function() {

		var template = jQuery.validator.format(
			$.trim($("#hidden-template").html())
		);

		$(template(formulation_count)).insertAfter($(".formulation-div").last());
		formulation_count++;
		$("#total_count").val(formulation_count);
	});

	// Delete the form on click of delete button
	$(document).on("click", ".remove-form", function() {
		$(this).parent().parent().parent().remove();
		formulation_count--;
		$("#total_count").val(formulation_count);
	})
</script>

<?php include('footer.php'); ?>