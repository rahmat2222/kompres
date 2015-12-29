<h1>Daftar Baru</h1>
<?php $attributes = array('id'=>'register_form', 'class'=>'form-horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>"); ?> <!--validation message-->

<?php echo form_open('users/register',$attributes);?>

<div class="form-group">
<?php echo form_label('Firstname');?>
<?php $data=array('class'=>'form-control','name'=>'first_name','placeholder'=>'masukan nama anda');?>
<?php echo form_input($data);?>
</div>

<div class="form-group">
<?php echo form_label('Lastname');?>
<?php $data=array('class'=>'form-control','name'=>'last_name','placeholder'=>'masukan nama belakang anda');?>
<?php echo form_input($data);?>
</div>

<div class="form-group">
<?php echo form_label('Email');?>
<?php $data=array('class'=>'form-control','name'=>'email','placeholder'=>'masukan E-Mail');?>
<?php echo form_input($data);?>
</div>

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
<?php echo form_label('Confirm Password');?>
<?php $data=array('class'=>'form-control','name'=>'confirm_password','placeholder'=>'ulangi password anda');?>
<?php echo form_password($data);?>
</div>

<div class="form-group">
<?php $data=array('class'=>'btn btn-primary','name'=>'submit','value'=>'Daftar');?>
<?php echo form_submit($data);?>
</div>
<?php echo form_close();?>
