<h1>Edit Artikel</h1>
<?php $attributes = array('id'=>'create_form', 'class'=>'form-horizontal');?>
<?php echo validation_errors("<p class='bg-danger'>"); ?> <!--validation message-->
<?php echo form_open('projects/edit/'. $project_data->id .'',$attributes);?>

<div class="form-group">
<?php echo form_label('Judul');?>
<?php $data=array('class'=>'form-control','name'=>'project_name','value'=>$project_data->project_name);?>
<?php echo form_input($data);?>
</div>



<div class="form-group">
<?php echo form_label('Deskripsi');?>
<?php $data=array('class'=>'form-control','name'=>'project_body', 'value'=> $project_data->project_body);?>
<?php echo form_textarea($data);?>
</div>




<div class="form-group">
<?php $data=array('class'=>'btn btn-primary','name'=>'submit','value'=>'Update');?>
<?php echo form_submit($data);?>
</div>
<?php echo form_close();?>
