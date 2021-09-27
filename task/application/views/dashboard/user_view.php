<?php include('header.php'); ?>

<div class="container">
	<h2 class="text-center">User View</h2>
	
<div class="row">
  <div class="col-md-5">

      <div style="display: flex;flex-direction: column; justify-content: center;align-items: center;">
        <?= anchor('dashboard/index','Back to Dashboard',['class'=>'btn btn-outline-dark']) ?>
          <img src="<?= $detail->photo; ?>" alt="Picture" width="500px" height="500px">
        </div>
  </div>
  <div class="col-md-7">
      <fieldset>
        <div class="form-group">
          <label class="form-label mt-4">Name</label>
          <?= form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Name',
          'value'=>set_value('username', $detail->username), 'disabled'=>''
        ]);
           ?>
        </div>
        <div class="form-group">
          <label class="form-label mt-4">Email address</label>
          <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email',
          'value'=>set_value('email', $detail->email), 'disabled'=>''
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">Street</label>
          <?= form_input(['name'=>'street','class'=>'form-control','placeholder'=>'Enter Street',
          'value'=>set_value('street', $detail->street), 'disabled'=>''
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">City</label>
          <?= form_input(['name'=>'city','class'=>'form-control','placeholder'=>'Enter City',
          'value'=>set_value('city', $detail->city), 'disabled'=>''
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">State</label>
          <?= form_input(['name'=>'state','class'=>'form-control','placeholder'=>'Enter State',
          'value'=>set_value('state', $detail->state), 'disabled'=>''
        ]) ?>
        </div>

        <div class="form-group">
          <label class="form-label mt-4">Zip Code</label>
          <?= form_input(['name'=>'zip','class'=>'form-control','placeholder'=>'Enter Zip',
          'value'=>set_value('zip', $detail->zip), 'disabled'=>''
        ]) ?>
        </div>

      </fieldset>
  </div>
</div>

        
		

</div>

<?php include('footer.php'); ?>