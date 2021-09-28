<?php include('header.php'); ?>

	<div class="container">

		<?php
          if ($this->session->flashdata('status')) {
            echo "<div class='alert alert-danger'>".$this->session->flashdata('status')."</div>";
          }
        ?>

		<?php
          if ($this->session->flashdata('signup_success')) {
            echo "<div class='alert alert-success'>".$this->session->flashdata('signup_success')."</div>";
          }
        ?>

        <?php
          if ($this->session->flashdata('msg')) {
            echo "<div class='alert alert-danger'>".$this->session->flashdata('msg')."</div>";
          }
        ?>
		<h1>Login User</h1>
		<?= form_open('Login/user_login'); ?>
		
		  <fieldset>
		    <div class="form-group">
		      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
		      <?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Enter email',
		          'value'=>set_value('email')
		       ]) ?>
		       <?= form_error('email'); ?>
		      
		    </div>
		    <div class="form-group">
		      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
		      <?= form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Enter Password']); ?>

		    </div>
		    <?= form_error('password'); ?>

		    <div class="form-group">
		    	<a href="<?=base_url() ?>login/user_signin"><small id="emailHelp" class="form-text text-muted">Register Account</small></a>
		    </div>

		    <?= form_submit(['name'=>'submit', 'value'=>'Login', 'class'=>'btn btn-primary mt-4']); ?>
		  </fieldset>
		<?= form_close(); ?>
	</div>

<?php include('footer.php'); ?>