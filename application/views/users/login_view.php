<?php if($this->session->userdata('logged_in')):?>

	<div class="container-fluid">
      <div class="row">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">My Profil<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Post</a></li>
            <li><a href="#">Setting</a></li>
          </ul>        
      </div>
    </div>

<?php else:?>


<h1>Login Form</h1>
<?php $attributes = array('id'=>'login_form', 'class'=>'form-horizontal');?>


<?php echo form_open('users/login',$attributes);?>

<div class="form-group">
<?php echo form_label('Username');?>
<?php $data=array('class'=>'form-control','name'=>'username','placeholder'=>'masukan username anda');?>
<?php echo form_input($data);?>
</div>

<div class="form-group">
<?php echo form_label('Password');?>
<?php $data=array('class'=>'form-control','name'=>'password','placeholder'=>'masukan password anda');?>
<?php echo form_password($data);?>
</div>


<div class="form-group">
<?php $data=array('class'=>'btn btn-primary','name'=>'submit','value'=>'Masuk');?>
<?php echo form_submit($data);?>
</div>
<?php if($this->session->flashdata('errors')):?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif;?>
<?php echo form_close();?>


<?php endif;?>