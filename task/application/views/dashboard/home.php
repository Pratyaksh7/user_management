<?php include('header.php'); ?>
	<div class="container">
		<h2 class="text-center mb-4">This is the User's Listing</h2>
		<?= anchor('login/logout','Logout',['class'=>'btn btn-outline-dark']) ?>
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>

  <tbody>
  	<?php foreach($users as $user): ?>
	    <tr class="table-light">
	      <th>
	      	<img height="100px" src="<?= $user->photo; ?>" alt="photo1">
	      </th>
	      <td>
	      	<?= form_open("dashboard/userDetailView/{$user->id}"); ?>
	      		<?= form_button(['type'=>'submit','class'=>'btn btn-default','content'=>$user->username]); ?>
	      	<?= form_close(); ?>
	      </td>
	      <td><?= $user->email; ?></td>
	      <td><?= $user->street.", ".$user->city.", ".$user->state.", ".$user->zip; ?></td>
	      <td>
	      	
	      	<span style="display: flex; align-items: center;justify-content: space-around;">
	      	 <?= form_open("dashboard/edit_user_details/{$user->id}"); ?>
                <?= form_button(['name'=>'form_submit','type'=>'submit','class'=>'btn btn-default','content'=>'<i class="far fa-edit"></i>']); ?>
            <?= form_close(); ?>

            <?= form_open("dashboard/delete_user/{$user->id}"); ?>
                <?= form_button(['name'=>'form_submit','type'=>'submit','class'=>'btn btn-default','content'=>'<i class="fa fa-trash"></i>']); ?>
            <?= form_close(); ?>

            <div class="form-check form-switch">	
            	<?php if($user->status){ ?>
            		<?= form_open("dashboard/change_status/{$user->id}/{$user->status}"); ?>
                		<?= form_button(['name'=>'form_submit','type'=>'submit','class'=>'btn btn-success','content'=>'Active']); ?>
            		<?= form_close(); ?>
            		
        		<?php } else{ ?>
        			<?= form_open("dashboard/change_status/{$user->id}/{$user->status}"); ?>
                		<?= form_button(['name'=>'form_submit','type'=>'submit','class'=>'btn btn-danger','content'=>'InActive']); ?>
            		<?= form_close(); ?>

        			<!-- <a href="<?= base_url(); ?>Dashboard/change_status?sid=<?= $user->id;?>&sval=<?= $user->status; ?>"> -->
            			<!-- InActive -->
            			<!-- <input type="checkbox" name="status" class="form-check-input" checked> -->
            		<!-- </a> -->
        			
		        <?php } ?>
		     </div>
            </span>

	      	 
            
	      </td>
	    </tr>
	<?php endforeach; ?>
  </tbody>

</table>

</div>
<?php include('footer.php'); ?>