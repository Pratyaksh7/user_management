<?php include('header.php'); ?>
<div class="container">
  <h1 class="text-center">Register Account</h1>

    <?php echo form_open('Login/signinAuthentication'); ?>

      <?php
          if ($this->session->flashdata('message')) {
            echo "<div class='alert alert-danger'>".$this->session->flashdata('message')."</div>";
          }
        ?>
      <fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
          <?= form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Name', 'value'=>set_value('username')]); ?>
        </div>
          <?= form_error('username'); ?>

        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
          <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email',
          'value'=>set_value('email')
        ]) ?>
        </div>
        <?= form_error('email'); ?>
        
        <fieldset class="form-group">
          <label for="gender" class="form-label mt-4">Gender</label>
          <div class="form-check">
            <label class="form-check-label">
              <?= form_radio(['name'=>'gender', 'value'=>'male', 'class'=>'form-check-input']); ?>
                Male
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <?= form_radio(['name'=>'gender', 'value'=>'female', 'class'=>'form-check-input']); ?>
                Female
            </label>
          </div>
        </fieldset>  
        <?= form_error('gender'); ?> 

        <div class="form-group">
          <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
          <?= form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Enter Password']); ?>
        </div>
        <?= form_error('password'); ?>

        <?php
          if ($this->session->flashdata('msg')) {
            echo "<div class='alert alert-danger'>".$this->session->flashdata('msg')."</div>";
          }
        ?>

        <div class="form-group">
          <label for="exampleInputPassword1" class="form-label mt-4">Confirm Password</label>
          <?= form_password(['name'=>'passwordConfirm', 'class'=>'form-control', 'placeholder'=>'Enter Password']); ?>
        </div>
        <?= form_error('passwordConfirm'); ?>

        <?= form_submit(['name'=>'submit', 'value'=>'Signup', 'class'=>'btn btn-primary mt-4']); ?>
      </fieldset>
    <?= form_close(); ?>
</div>

<?php include('footer.php'); ?>