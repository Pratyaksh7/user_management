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
        <div class="form-group">
          <label class="form-label mt-4">Email address</label>
          <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email',
          'value'=>set_value('email', $detail->email)
        ]) ?>
        </div>

        <!-- <div class="form-group">
          <label class="form-label mt-4">D.O.B</label>
          <?php
          	$date = array('type'=>'text','name'=>'dob','class'=>'form-control','placeholder' => 'dd/mm/yyyy','required'=>'','value'=>set_value('dob',$detail->dob));
          	echo form_input($date);
           ?>
        </div> -->

        <div class="form-group">
          <label class="form-label mt-4">Street</label>
          <?= form_input(['name'=>'street','class'=>'form-control','placeholder'=>'Enter Street',
          'value'=>set_value('street', $detail->street)
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">City</label>
          <?= form_input(['name'=>'city','class'=>'form-control','placeholder'=>'Enter City',
          'value'=>set_value('city', $detail->city)
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">State</label>
          <?= form_input(['name'=>'state','class'=>'form-control','placeholder'=>'Enter State',
          'value'=>set_value('state', $detail->state)
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">Zip Code</label>
          <?= form_input(['name'=>'zip','class'=>'form-control','placeholder'=>'Enter Zip',
          'value'=>set_value('zip', $detail->zip)
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">Upload Image</label>
          <?= form_upload(['name'=>'photo','class'=>'form-control', 'value'=>set_value('photo', $detail->photo)
        ]); ?>
        </div>
        <div class="col-lg-6">
            <?php if(isset($upload_error))  echo $upload_error ?>  
         </div>
        
        <!-- <fieldset class="form-group">
          <label for="gender" class="form-label mt-4">Gender</label>
          <div class="form-check">
            <label class="form-check-label">
              <?= form_radio(['name'=>'gender', 'value'=>'male', 'class'=>'form-check-input', 'value'=>set_value('gender', $detail->gender)]); ?>
                Male
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <?= form_radio(['name'=>'gender', 'value'=>'female', 'class'=>'form-check-input','value'=>set_value('gender', $detail->gender)]); ?>
                Female
            </label>
          </div>
        </fieldset>     -->

        <?= form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary mt-4']); ?>

      </fieldset>
		
	<?= form_close(); ?>

</div>

<?php include('footer.php'); ?>