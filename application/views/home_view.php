<h3>Kompres 2015/2016</h3>
<p class="bg-success">
<?php if($this->session->flashdata('login_success')):?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif;?>
</p>

<p class="bg-success">
<?php if($this->session->flashdata('user_registered')):?>
<?php echo $this->session->flashdata('user_registered'); ?>
<?php endif;?>
</p>

<p class="bg-danger">
<?php if($this->session->flashdata('login_failed')):?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif;?>
</p>

<p class="bg-danger">
<?php if($this->session->flashdata('no_access')):?>
<?php echo $this->session->flashdata('no_access'); ?>
<?php endif;?>
</p> <div class="uk-grid">
        <div class="uk-width-large-1-3" id="im-uk-1">
        <i class="fa fa-map" id="icon-benefit">
        <span id="benefit"> Related Location</span></i>
        </div>
        <div class="uk-width-large-1-3" id="im-uk-2">
        	<i class="fa fa-plane" id="icon-benefit">
            	<span id="benefit"> Accomodation</span></i></div>
        <div class="uk-width-large-1-3" id="im-uk-3">
        	<i class="fa fa-glass" id="icon-benefit">
            	<span id="benefit"> Food & Drink</span> </i></div>
      </div>
      <hr style="color:#CBCACA">
      
      <div class="uk-grid">
      	<div class="uk-width-1-2">
        	<div class="uk-grid">
                <div class="uk-width-1-3"><submit type="button" class="btn btn-info" id="btn-loct">Jakarta</submit></div><br>
                <div class="uk-width-1-3"><submit type="button" class="btn btn-info" id="btn-loct">Bogor</submit></div><br>
                <div class="uk-width-1-3"><submit type="button" class="btn btn-info" id="btn-loct">Depok</submit></div><br>
            </div>
        </div>
        <div class="uk-width-1-2">
        	<div class="uk-grid">
                <div class="uk-width-1-2"><submit type="button" class="btn btn-info" id="btn-loct">Tangerang</submit></div>
                <div class="uk-width-1-2"><submit type="button" class="btn btn-info" id="btn-loct">Banten</submit></div>
            </div>
        </div>
      </div>