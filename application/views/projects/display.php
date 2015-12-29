<div class="col-xs-9">
	<h1><?php echo $project_data->project_name; ?></h1>
	<p>Date : <?php echo $project_data->date_created; ?></p>
	<p style="text-align:justify"> <?php echo $project_data->project_body; ?></p>
</div>

<div class="col-xs-3 pull-right">
	<ul class="list-group">
		<h3>Action</h3>

		<!--<li class="list-group-item" ><a href="<?php //echo base_url();?>/task/create/<?php echo $project->id;?>">Buat Baru</a></li>-->
		<li class="list-group-item" ><a href="<?php echo base_url()?>projects/edit/<?php echo $project_data->id; ?> ">Edit</a></li>
		<li class="list-group-item" ><a href="<?php echo base_url()?>projects/delete/<?php echo $project_data->id; ?>">Hapus</a></li>

	</ul>
</div>
