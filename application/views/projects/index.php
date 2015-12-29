<h1>Dashboard</h1>

<p class="bg-success">
<?php if($this->session->flashdata('project_created')):?>
<?php echo $this->session->flashdata('project_created'); ?>
<?php endif;?>
<?php if($this->session->flashdata('project_update')):?>
<?php echo $this->session->flashdata('project_update'); ?>
<?php endif;?>
<?php if($this->session->flashdata('project_delete')):?>
<?php echo $this->session->flashdata('project_delete'); ?>
<?php endif;?>
</p>

<table class="table table-hover">
	<a class="btn btn-primary pull-right" href="<?php echo base_url()?>projects/create">Tambah</a>
	<thead>
		<tr>
			<th>
				Tempat Wisata
			</th>
			<th>
				Deskripsi
			</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($projects as $project):?>
		<tr>
		<?php echo "<td><a href='".base_url()."projects/display/".$project->id."'>".$project->project_name ."</a><td>";?>
		<?php echo "<td>". $project->project_body ."<td>";?>
		<td><a class="btn btn-danger" href="<?php echo base_url()?>projects/delete/<?php echo $project->id ?>"><span class="glyphicon glyphicon-remove"</a></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>