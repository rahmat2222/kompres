<h1>Artikel Baru</h1>
<?php $attributes = array('id'=>'create_form', 'class'=>'form-horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>"); ?> <!--validation message-->

<?php echo form_open('projects/create',$attributes);?>

<div class="form-group">
<?php echo form_label('Judul');?>
<?php $data=array('class'=>'form-control','name'=>'project_name','placeholder'=>'Masukan judul');?>
<?php echo form_input($data);?>
</div>



<div class="form-group">
<?php echo form_label('Deskripsi');?>
<?php $data=array('id'=>'kompres','class'=>'form-control','name'=>'project_body');?>
<?php echo form_textarea($data);?>
</div>






<div class="form-group">
<?php $data=array('class'=>'btn btn-primary','name'=>'submit','value'=>'Post');?>
<?php echo form_submit($data);?>
</div>
<?php echo form_close();?>
